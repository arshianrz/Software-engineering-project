<?php

namespace App\Http\Controllers;

use App\Mail\NewDiscount;
use App\Models\ReferralCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReferralController extends Controller
{
    public function showCheck()
    {
        return view('referrals.check');
    }

    public function check(Request $request)
    {
        $code = ReferralCode::where('code', $request->code)->first();

        if (!$code) {
            return redirect()->route('referrals.check')->with('error', 'کد ارجاع وجود ندارد!')->withInput();
        }

        $text = 'کد ارجاع وارد شده مربوط به ' . $code->customer->full_name . ' می باشد. در صورت صحت کد ارجاع روی تایید کلیک نمایید:';
        return redirect()->route('referrals.check')->with('referral_introduction', $text)->withInput();
    }

    public function submit(Request $request)
    {
        $code = ReferralCode::where('code', $request->code)->first();

        $customer = $code->customer;

        $referral = $customer->referral;
        $referral->current_referral_number += 1;
        $referral->save();

        $referral = $referral->refresh();

        if ($referral->current_referral_number % $referral->need_referral_number == 0) {
            $discount = $customer->discounts()->create();

            $details = [
                'full_name' => $customer->full_name,
                'business_name' => auth()->user()->business_name,
                'customer_discount' => $customer->referral->customer_discount,
                'code' => $discount->code,
            ];

            Mail::to($customer->email)->send(new NewDiscount($details));
        }

        return redirect()->route('referrals.check')->with('success', 'کد ارجاع با موفقیت تایید شد.');
    }
}
