<!DOCTYPE html>
<html lang="fa">

<head>
  <title>اپلیکیشن بازاریابی ارجاعی</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link href="{{ mix('/css/referral-app.css') }}" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- <link rel="shortcut icon" href="{{ asset('storage/other/logo1.png') }}" type="image/x-icon"> --}}
</head>

<body>
  <div id="referral-intro" class="pb-3">

    <section id="page1" class="section pt-4 pt-md-0 d-flex flex-column justify-content-center align-items-center">
      <p class="mb-1 text-center">قدر مشتریاتون رو بدونید!</p>
      <p class="mb-3 text-center">با کمک مشتری ها رایگان تبلیغ کنید و هدفمند تخفیف بدید</p>
      <a href="{{route('register.show')}}"
        class="bg-white btn font-weight-bold text-prim text-primary">همین حالا شروع کن</a>
    </section>

    <section id="page2" class="section pt-4 pt-md-0">
      <div class="align-items-center d-flex flex-column justify-content-center section-body">
        <div class="align-items-center d-flex flex-column justify-content-center my-5 m-md-0 mb-md-5 title">
          <p class="mb-2">بازاریابی معرف یعنی چی؟</p>
          <div class="line"></div>
        </div>

        <div class="d-flex justify-content-center align-items-center flex-wrap">
          <img width="290px" class="mb-4 ml-5" srcset="{{asset('storage/other/referral-intro/mainpic.jpg')}},
          {{asset('storage/other/referral-intro/mainpic@2x.jpg')}} 2x,
          {{asset('storage/other/referral-intro/mainpic@3x.jpg')}} 3x"
            src="{{asset('storage/other/referral-intro/mainpic.jpg')}}" alt="mainpic">
          <div style="width:310px">
            <p class="mb-2" style="font-size: 1rem;font-weight: 500;">بازاریابی معرف به زبون ساده یعنی</p>
            <p class="mb-1">مشریان فعلی ما رو یه دوستاشون به راحت ترین شکل ممکن معرفی کنن</p>
            <p> در علم مارکتینگ، تاثیرگذارترین و ارزانترین نوع بازاریابی همین است.</p>
          </div>
        </div>
      </div>
    </section>
    <section id="page3" class="section pt-4 pt-md-0">
      <div class="align-items-center d-flex flex-column justify-content-center section-body">
        <div class="align-items-center d-flex flex-column justify-content-center my-5 title">
          <p class="mb-2">چرا بازاریابی معرف خوبه؟</p>
          <div class="line"></div>
        </div>
        <div class="row" style="width:100%">
          <div class="col-lg-2"></div>
          <div class="col-lg-4 col-md-6 d-flex flex-column">
            <div class="align-items-center d-flex justify-content-center mb-3 rectangle">
              <img src="{{asset('storage/other/referral-intro/talk.svg')}}" class="mr-3" width="45px" alt="talk">
              <div class="text mr-2">تبلیغ محصولات
                از مشتریان
              </div>
            </div>
            <div class="align-items-center align-self-end d-flex justify-content-center mb-3 ml-md-5 rectangle">
              <img src="{{asset('storage/other/referral-intro/product.svg')}}" class="mr-3" width="45px" alt="product">
              <div class="text mr-2">معرفی و پیشنهاد
                خرید محصول
              </div>
            </div>
            <div class="rectangle d-flex justify-content-center align-items-center">
              <img src="{{asset('storage/other/referral-intro/shopping.png')}}" class="mr-3" width="45px"
                alt="shopping-done">
              <div class="text mr-2">خرید و پیوستن
                به مشتریان جدید
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 pt-sm-0">
            <ul>
              <li>
                <div class="circle ml-1"></div>
                <div class="besides-circle">حدودا ۸۳ درصد از مردم در هنگام خرید از دوستان و اقوام خود کمک میگیرند.</div>
              </li>
              <li>
                <div class="circle ml-1"></div>
                <div class="besides-circle">
                  توصیه و پیشنهاد طرفداران یک برند احتمال خرید یک محصول را ۵۰ درصد افزایش میدهد.
                </div>
              </li>
              <li>
                <div class="circle ml-1">
                  <div class="besides-circle">
                    مشتریانی که توسط دوستانشان معرفی می شوند به طور میانگین ۳۷ درصد ماندگاری بیشتری دارند.
                  </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>
    <section id="page4" class="section pt-4 pt-md-0">
      <div class="align-items-center d-flex flex-column justify-content-center section-body">
        <div class="align-items-center d-flex flex-column justify-content-center my-5 title">
          <p class="mb-2">از کجا باید شروع کنم؟</p>
          <div class="line"></div>
        </div>
        <div class="align-items-center align-items-sm-baseline col-10 col-md-6 col-sm-8 d-flex flex-column">
          <div class="mb-4">
            <div class="btn btn-primary py-1 px-4 mb-2">قدم اول</div>
            <div class="rectangle d-flex justify-content-center align-items-center p-3">
              <img src="{{asset('storage/other/referral-intro/service.svg')}}" alt="service" width="45px">
              <div class="mr-3">
                خدماتمان واقعا خوب باشد، تا مشتری علاقه داشته باشد ما را معرفی کند
              </div>
            </div>
          </div>
          <div class="align-items-baseline align-self-sm-end d-flex flex-column mb-4">
            <div class="align-self-end align-self-md-baseline btn btn-primary mb-2 px-4 py-1">قدم دوم</div>
            <div class="rectangle d-flex justify-content-center align-items-center p-3">
              <img src="{{asset('storage/other/referral-intro/share.svg')}}" alt="share" width="45px">
              <div class="mr-3">
                دیده شدن بیشتر با فراهم کردن ابزار مناسب معرفی برای مشتریان
              </div>
            </div>
          </div>
          <div>
            <div class="btn btn-primary py-1 px-4 mb-2">قدم سوم</div>
            <div class="rectangle d-flex justify-content-center align-items-center p-3">
              <img src="{{asset('storage/other/referral-intro/gift.svg')}}" alt="gift" width="45px">
              <div class="mr-3">
                برای دعوت ها پاداش در نظر بگیریم تا بیشتر به معرفی ترغیب شوند
              </div>
            </div>
          </div>
        </div>
        {{-- <img id="arrow-img" src="{{asset('storage/other/referral-intro/arrow.svg')}}" alt="arrow"> --}}
      </div>
    </section>

    <div id="sing-up" class="col-lg-6 col-md-8 col-10 mt-5 offset-lg-3 offset-md-2 offset-1 p-3">
      <div class="align-items-sm-center d-flex flex-column flex-sm-row justify-content-sm-around row">
        <div class="text-center text-white" style="font-weight: 500;">
          <p class="mb-0" style="font-weight: bold;font-size: 1rem;">مشتریاتو چند برابر کن !</p>
          <p class="mb-0">می تونی همین الان شروع کنی</p>
        </div>
        <div class="mt-3 text-center text-white">
          <a href="{{route('register.show')}}" class="bg-white btn font-weight-bolder text-primary">
            رایگان ثبت نام کن
          </a>
        </div>
      </div>
    </div>

  </div>
</body>

</html>