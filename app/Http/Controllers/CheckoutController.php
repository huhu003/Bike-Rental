<?php

namespace App\Http\Controllers;
use App\Models\BikeDetail;
use Illuminate\Http\Request;
use App\Models\User;
use Stripe;
class CheckoutController extends Controller
{
    //
    public function checkout(Request $request,$id)
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51JeXT6E8vw61AZaQLjaHy3SUO9iv2tLPKyDC8vfIQKdB1Vg2ST3iQVR18l7uiIsYVll4QQzxCHO4rGyWTi0u90jO00MkekBmOK');
    

    //UGMA NI NI 

		$amount = 500;
		$amount *= 100;
        $amount = (int) $amount;

     

        
        $payment_intent = \Stripe\PaymentIntent::create([

			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'PHP',
			'description' => 'Payment From Bike Rental',
			'payment_method_types' => ['card'],
		]);


        //FOR BIKES
		$intent = $payment_intent->client_secret;
      
        $bike_details = BikeDetail::select('*')
        ->where('id', '=', $id)
        ->get();
    



		return view('user.checkout.credit-card',compact('intent','bike_details'));




    }

    public function afterPayment()
    {
        echo 'Payment Has been Received';
    }

}
