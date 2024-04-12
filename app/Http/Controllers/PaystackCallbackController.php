<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshopapplication;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationConfirmationMail;
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

            $workshpTitle = $workshopApplication->workshop->title;

            //send mail
            Mail::to($workshopApplication->email)->send(new ApplicationConfirmationMail($workshopApplication->fullname, $workshpTitle));

            return redirect()->route('workshop')->with('success', 'You have successfully applied for the workshop, thank you.');;
        }

        return redirect()->route('workshop')->with('failed', 'We could not process your payment right now, please try again later.');;


        //return redirect()->route('workshop.application.success', $workshopApplication->workshop_id);
    }
}
