@extends('layouts.master')
@section('title', 'صحت سنجی کد ارجاع')
@section('content')
<h1 class="mt-4 text-dark mb-3 h3">صحت سنجی کد ارجاع</h1>
<div class="col-md-4 mb-4">

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-error">
        {{ session()->get('error') }}
    </div>
    @endif

    @if(session()->has('referral_introduction'))
    <div class="alert alert-dark">
        {{ session()->get('referral_introduction') }}
    </div>

    <form action="{{route('referrals.submit')}}" method="POST">
        @csrf
        <input hidden type="text" name="code" class="form-control" value="{{old('code')}}">
        <button type="submit" class="btn btn-success">تایید ارجاع</button>
    </form>

    @endif

    @if(!session()->has('referral_introduction'))
    <form action="{{route('referrals.check')}}" method="POST">
        @csrf

        <div class="form-group">
            <label>کد ارجاع</label>
            <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" placeholder="کد ارجاع" value="{{old('code')}}">
        </div>

        <button type="submit" class="btn btn-success">بررسی کد</button>
    </form>
    @endif

</div>
@endsection
