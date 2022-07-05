@extends('layouts.master')
@section('title', 'ایجاد مشتری')
@section('content')
<h1 class="mt-4 text-dark mb-3 h3">ایجاد مشتری</h1>
<div class="col-md-4 mb-4">

    <form action="{{route('customers.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label>نام مشتری</label>
            <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" placeholder="نام مشتری" value="{{old('full_name')}}">
        </div>
        @error('full_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>شماره تماس</label>
            <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="شماره تماس" value="{{old('phone_number')}}">
        </div>
        @error('phone_number')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>ایمیل</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" value="{{old('email')}}">
        </div>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>تعداد ارجاعات برای صدور کد تخفیف</label>
            <input type="text" name="need_referral_number" class="form-control @error('need_referral_number') is-invalid @enderror" placeholder="تعدادارجاعات برای صدور کد تخفیف" value="{{old('need_referral_number')}}">
        </div>
        @error('need_referral_number')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>درصد/مبلغ هر کد تخفیف مشتری</label>
            <input type="text" name="customer_discount" class="form-control @error('customer_discount') is-invalid @enderror" placeholder="درصد/مبلغ هر کد تخفیف مشتری" value="{{old('customer_discount')}}">
            <small class="form-text text-muted">مثلا: 20 درصد یا 50 هزار تومان</small>

        </div>
        @error('customer_discount')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>درصد/مبلغ تخفیف ارجاع شونده</label>
            <input type="text" name="invited_discount" class="form-control @error('invited_discount') is-invalid @enderror" placeholder="درصد/مبلغ تخفیف ارجاع شونده" value="{{old('invited_discount')}}">
            <small class="form-text text-muted">مثلا: 20 درصد یا 50 هزار تومان</small>
        </div>
        @error('invited_discount')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-success">ثبت</button>

    </form>

</div>
@endsection
