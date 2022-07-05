<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل مدیریت ارجاعات | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('css/referral.css')}}">
    <link href="{{ mix('/css/referral-app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('css')
    
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="navbar navbar-expand navbar-dark bg-dark d-sm-none">
            <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul class="navbar-nav pr-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('customers.index')}}">مدیریت مشتری‌ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('referrals.showCheck')}}">اصالت سنجی کد ارجاع</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('discounts.index')}}">لیست کد تخفیف ها</a>
                    </li>
              
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('discounts.showCheck')}}">اصالت سنجی کد تخفیف</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">خروج</a>
                    </li>
                </ul>
            </div>
        </nav>
    
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom d-none d-sm-block">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        @include('layouts.sections.sidebar')

        <div class="content-wrapper position-absoloute">
            <section class="content">
                <div id="app" class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
    </div>
    <script src="{{mix('js/referral-admin.js')}}"></script>
    @stack('scripts')

</html>