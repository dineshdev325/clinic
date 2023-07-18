<?php

namespace App\Http\Livewire\Payment;

use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\PatientDetails;
use App\Models\Payment as ModelsPayment;
use App\Models\Slot;
use App\Models\TimeSlot;
use Carbon\Carbon;
use Error;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Stripe\Stripe;
use Twilio\Rest\Client;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class Payment extends Component
{
    public $consultation_details;
    public $consultation_id;
    public $patient_id;
    public $amount;
    public $patient;

    public function make_payment()
    {

        $this->consultation_id = session()->get('consultation_id');
        $this->consultation_details = Consultation::with('patient', 'doctor')->where('id', '=', $this->consultation_id)->get();
        $this->amount = $this->consultation_details[0]->doctor->amount;
        $this->patient_id = Consultation::where('id', $this->consultation_id)->pluck('patient_details_id');
        $stripe = new \Stripe\StripeClient(
            env('STRIPE_SECRET_KEY')
        );

        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'inr',
                    'product_data' => [
                        'name' => $this->consultation_details[0]->doctor->name,
                    ],
                    'unit_amount' => $this->amount * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => url('/success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('appointment'),
        ]);

        $payment = new ModelsPayment();
        $payment->patient_details_id = $this->patient_id[0];
        $payment->consultations_id = $this->consultation_id;
        $payment->amount = $this->amount;
        $payment->transaction_id = $checkout_session->id;
        $payment->payment_status = 'pending';
        $payment->payment_date = Carbon::now();
        $payment->save();

        return redirect()->to($checkout_session->url);
    }

    public function success()
    {
        $session_id=Request::get('session_id');
        $stripe = new \Stripe\StripeClient(
            env('STRIPE_SECRET_KEY')
        );
        
        try {
            $session = $stripe->checkout->sessions->retrieve($session_id);
            $payment=ModelsPayment::where('transaction_id','like',$session_id)->where('payment_status','pending')->first(); 
            $payment->payment_status = 'success';
            $payment->save();
            // GET PAYMENT DETAILS
            $this->patient=ModelsPayment::where('transaction_id','like',$session_id)->get();
            $payment_details=ModelsPayment::with('patient','consultation','consultation.doctor')->where('transaction_id','like',$session_id)->get();
            $patient_detail = $payment_details[0]->patient;
            $consultation_detail = $payment_details[0]->consultation;
            $doctor_detail=$payment_details[0]->consultation->doctor;
            // CREATE SLOT
            $slot=new Slot();
            $slot->doctors_id=$payment_details[0]->consultation->doctor->id;
            $slot->date=substr($payment_details[0]->consultation->consultation_date_time,0,10);
            $slot->save();
            $slot_id=$slot->id;
            // UPDATE TIME SLOT
            $time_slot=new TimeSlot();
            $time_slot->slots_id=$slot_id;
            $time_slot->time=substr($payment_details[0]->consultation->consultation_date_time,11);
            $time_slot->is_available=0;
            $time_slot->save();

            $sid = getenv("TWILIO_ACCOUNT_SID");
            $token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = env('TWILIO_PHONE_NUMBER');  // Your Twilio Phone Number

            $twilio = new Client($sid, $token);
           $message = $twilio->messages
      ->create("whatsapp:+916385477692", // to
        array(
          "from" => 'whatsapp:'.$twilio_number,
          "body" => 'At your appointment time, please ensure you have a stable internet connection and your WhatsApp is open. Our doctor will initiate the video call.'
        )
      );

        } catch (Error $e) {
            throw new NotFoundHttpException();
        }
        return view('detail-page', ['patient'=>$this->patient]);
    }
    public function render()
    {
        return view('livewire.payment.payment');
    }
}
