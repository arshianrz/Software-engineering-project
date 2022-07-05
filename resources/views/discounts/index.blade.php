@extends('layouts.master')
@section('title', 'تخفیف ها')
@section('content')
<div class="align-items-center d-flex justify-content-between">
    <h1 class="mt-4 text-dark mb-3 h3">لیست کد تخفیف ها</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

<div class="table-responsive">
    <table class="table text-center">
        <thead class="thead-dark">
            <tr style="white-space: nowrap;">
                <th scope="col">ردیف</th>
                <th scope="col">نام مشتری</th>
                <th scope="col">کد تخفیف</th>
                <th scope="col">وضعیت</th>
                <th scope="col">تاریخ ایجاد</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($discounts as $index=>$discount)
            <tr>
                <th scope="row">{{$index+1}}</th>
                <td>{{$discount->code}}</td>
                <td>{{$discount->customer->full_name}}</td>
                <td>{{$discount->status == 'used' ? 'استفاده شده':'فعال'}}</td>
                <td>{{verta($discount->created_at)->formatDate()}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
