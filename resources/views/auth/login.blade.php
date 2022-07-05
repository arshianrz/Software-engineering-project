<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>اپلیکیشن بازاریابی ارجاعی | ورود</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('css/referral.css')}}">
    <link rel="stylesheet" href="{{mix('css/referral-app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="d-flex flex-wrap justify-content-center mb-4">
        <div class="col-md-3">
            <h1 class="mt-4 text-dark mb-3 h3">اپلیکیشن بازاریابی ارجاعی | ورود</h1>

            <form method="POST" action="{{route('login.post')}}">
                @csrf

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

                <button type="submit" class="btn btn-success">ورود</button>

            </form>
        </div>
    </div>
</body>

</html>
