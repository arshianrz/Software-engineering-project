<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required|',
            'phone_number' => 'required|unique:users,phone_number|iran_mobile',
            'email' => 'required|email|unique:users,email',
            'need_referral_number' => 'required|integer',
            'customer_discount' => 'required|string',
            'invited_discount' => 'required|string',
        ];
    }
}
