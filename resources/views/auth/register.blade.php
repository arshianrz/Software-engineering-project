<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>اپلیکیشن بازاریابی ارجاعی | ثبت نام</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('css/referral.css')}}">
    <link rel="stylesheet" href="{{mix('css/referral-app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="d-flex flex-wrap justify-content-center mb-4">
        <div class="col-md-4">
            <h1 class="mt-4 text-dark mb-3 h3">اپلیکیشن بازاریابی ارجاعی | ثبت نام</h1>

            <form method="POST" action="{{route('register.post')}}">
                @csrf

                <div class="form-group">
                    <label>نام و نام خانوادگی *</label>
                    <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" placeholder="نام و نام خانوادگی" />
                </div>

                @error('full_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label>شماره موبایل *</label>
                    <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="شماره موبایل"/>
                    <small class="form-text text-muted">شماره موبایل را با فرمت *********09 وارد نمایید.</small>
                </div>

                @error('phone_number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label>ایمیل *</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" />
                </div>

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label>پسورد *</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="پسورد" />
                </div>

                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label>نام کسب و کار *</label>
                    <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror" placeholder="نام کسب و کار" />
                </div>

                @error('business_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label>آدرس سایت شما</label>
                    <input type="text" name="website_url" class="form-control @error('website_url') is-invalid @enderror" placeholder="مثلا: test" />
                </div>

                @error('website_url')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label>آی دی پیج اینستاگرام</label>
                    <input type="text" name="instagram_id" class="form-control @error('instagram_id') is-invalid @enderror" placeholder="مثلا: test" v-model="instagram_url" />
                    <small class="form-text text-muted">آیدی را بدون @ وارد نمایید.</small>
                </div>

                @error('instagram_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label>آی دی پیج تلگرام</label>
                    <input type="text" name="telegram_id" class="form-control @error('telegram_id') is-invalid @enderror" placeholder="مثلا: test" v-model="instagram_url" />
                    <small class="form-text text-muted">آیدی را بدون @ وارد نمایید.</small>
                </div>

                @error('telegram_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label>متن معرفی کسب و کار خود *</label>
                    <textarea class="form-control @error('business_introduction') is-invalid @enderror" name="business_introduction" rows="7" placeholder="ارائه دهنده بهترین برندهای جهان با قیمت مناسب" v-model="business_introduction"></textarea>
                    <div class="alert alert-warning mt-2" style="display: none;">
                        این قسمت در متنی که مشتری شما برای دوستانش میفرستد، جهت آشنایی بیشتر با کسب و کار شما ارسال
                        خواهد شد.
                    </div>
                </div>

                @error('business_introduction')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="d-flex justify-content-around align-items-center">
                    <button type="submit" class="btn btn-success">ثبت</button>
                    <span>
                        قبلا ثبت نام کرده اید؟
                        <a href="{{route('login')}}">ورود</a>
                    </span>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
