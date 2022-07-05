<?php

namespace App\Http\Controllers;

use App\Models\DiscountCode;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = DiscountCode::latest()->get();

        return view('discounts.index',compact('discounts'));
    }

    public function showCheck()
    {
        return view('discounts.check');
    }

    public function check(Request $request)
    {
        $code = DiscountCode::where('code', $request->code)->where('status','active')->first();
        
        if(!$code){
            return redirect()->route('discounts.check')->with('error', 'کد تخفیف وجود ندارد!')->withInput();
        }

        $text = 'کد تخفیف وارد شده مربوط به ' . $code->customer->full_name . ' می باشد. در صورت صحت کد تخفیف روی تایید کلیک نمایید:';

        return redirect()->route('discounts.check')->with('discount_introduction', $text)->withInput();
    }

    public function submit(Request $request)
    {
        $code = DiscountCode::where('code', $request->code)->where('status','active')->first();
        $code->status = 'used';
        $code->save();

        return redirect()->route('discounts.check')->with('success', 'کد تخفیف با موفقیت تایید شد.');
    }
}
