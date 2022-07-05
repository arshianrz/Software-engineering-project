<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerCreateRequest;
use App\Mail\NewCustomer;
use App\Models\Customer;
use App\Models\ReferralCode;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::where('user_id', auth()->user()->id)->with('referral')->get();

        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(CustomerCreateRequest $request)
    {
        $user = auth()->user();
        $customer = $user->customer()->create($request->only('full_name', 'phone_number', 'email'));
        $customer->referral()->create($request->only('need_referral_number', 'customer_discount', 'invited_discount'));

        $details = [
            'full_name' => $request->full_name,
            'business_name' => $user->business_name,
            'need_referral_number' => $request->need_referral_number,
            'customer_discount' => $request->customer_discount,
            'invited_discount' => $request->invited_discount,
            'code' => $customer->referral->code,
            'instagram_id' => $user->instagram_id,
            'telegram_id' => $user->telegram_id,
            'website_url' => $user->website_url,
        ];
    
        Mail::to($customer->email)->send(new NewCustomer($details));

        return redirect()->route('customers.index')->with('success', 'مشتری با موفقیت اضافه شد.');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Customer $customer, CustomerCreateRequest $request)
    {
        $customer->update($request->only('full_name', 'phone_number', 'email'));
        $customer->referral()->update($request->only('need_referral_number', 'customer_discount', 'invited_discount'));

        return redirect()->route('customers.index')->with('success', 'مشتری با موفقیت ویریش شد.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'مشتری با موفقیت حذف شد.');
    }

    public function showCheckReferralCode(Customer $customer)
    {
        return view('customers.checkReferralCode', compact('customer'));
    }
}
