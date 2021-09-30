<?php

namespace App\Http\Controllers;
use App\Models\BikeDetail;
use App\Models\Uer;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function booking(Request $request,$id)
    {
        
        $bike = $request->bikeprice;

        echo '$bike';
        
        return view ('user.checkout.credit-card');
    }

}