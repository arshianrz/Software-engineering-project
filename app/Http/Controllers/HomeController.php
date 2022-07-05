<?php

namespace App\Http\Controllers;

use App\Mail\NewCustomer;
use App\Mail\NewDiscount;
use Mail;

class HomeController extends Controller
{


    public function myDemoMail()
    {
        $myEmail = 'aatmaninfotech@gmail.com';

        $user = auth()->user();

        $details = [
            'full_name' => 'علی محسنی',
            'business_name' => $user->business_name,
            'need_referral_number' => 2,
            'customer_discount' => '12 هزار تومان',
            'invited_discount' => '10 درصد',
            'code' => '123ssad',
            'instagram_id' => $user->instagram_id,
            'telegram_id' => $user->telegram_id,
            'website_url' => $user->website_url,
        ];

    
        Mail::to("s@gmail.com")->send(new NewCustomer($details));

        dd("Mail Send Successfully");
    }
}
