@extends('layouts.master')
@section('title', 'مشتریان')
@section('content')
<div class="align-items-center d-flex justify-content-between">
    <h1 class="mt-4 text-dark mb-3 h3">اطلاعات مشتریان</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

<a href="{{route('customers.create')}}" class="btn btn-success mb-3">ایجاد مشتری</a>


<div class="table-responsive">
    <table class="table text-center">
        <thead class="thead-dark">
            <tr style="white-space: nowrap;">
                <th scope="col">ردیف</th>
                <th scope="col">نام مشتری</th>
                <th scope="col">شماره تماس</th>
                <th scope="col">ایمیل</th>
                <th scope="col">کد ارجاع</th>
                <th scope="col">تعدادارجاعات برای صدور کد تخفیف</th>
                <th scope="col">تعداد ارجاعات تاکنون</th>
                <th scope="col">درصد/مبلغ هر کد تخفیف</th>
                <th scope="col">درصد/مبلغ تخفیف ارجاع شونده</th>
                <th scope="col">تاریخ ایجاد</th>
                <th scope="col">عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $index=>$customer)
            <tr>
                <th scope="row">{{$index+1}}</th>
                <td>{{$customer->full_name}}</td>
                <td>{{$customer->phone_number}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->referral->code}}</td>
                <td>{{$customer->referral->need_referral_number}}</td>
                <td>{{$customer->referral->current_referral_number}}</td>
                <td>{{$customer->referral->customer_discount}}</td>
                <td>{{$customer->referral->invited_discount}}</td>
                <td>{{verta($customer->created_at)->formatDate()}}</td>

                <td>
                    <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-warning small"><i class="fa fa-pen"></i></a>
                    <a class="btn btn-danger" onclick="return confirm('مشتری حذف شود؟')" href="{{route('customers.destroy', $customer->id)}}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
