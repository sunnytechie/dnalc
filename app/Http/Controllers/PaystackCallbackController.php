<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshopapplication;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaystackCallbackController extends Controller
{
    public function workshopPaymentCallback($id, $ref)
    {
        $paymentDetails = Paystack::getPaymentData();
        
        if($paymentDetails['data']['status'] == 'success') {
            $workshopApplication = Workshopapplication::find($id);
            $workshopApplication->status = 'success';
            $workshopApplication->reference = $paymentDetails['data']['reference'];
            $workshopApplication->save();

            return redirect()->route('workshop')->with('success', 'You have successfully applied for the workshop, thank you.');;
        }

        return redirect()->route('workshop')->with('failed', 'We could not process your payment right now, please try again later.');;

        
        //return redirect()->route('workshop.application.success', $workshopApplication->workshop_id);
    }
}
