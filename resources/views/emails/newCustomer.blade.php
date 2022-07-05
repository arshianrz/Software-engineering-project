@component('mail::message')
# {{$details['full_name']}} عزیز، به {{$details['business_name']}} خوش آمدید!

اگر از خدمات راضی هستید خوشحال میشیم ما رو به دوستانتون هم معرفی کنید.

در صورتی که دوستاتون با کد ارجاع شما به ما مراجعه کنند و خرید انجام بدن ما به اونها {{$details['invited_discount']}} تخفیف میدیم.
اگر هم {{$details['need_referral_number']}} بار خرید با کد ارجاع شما انجام بشه ما به شما یه کد تخفیف {{$details['customer_discount']}} هدیه میدیم!

پس عجله کن و کد ارجاع و ادرس فروشگاه ما رو تو گروه های خانوادگی و دوستانه ات به اشتراک بذار.

@component('mail::panel')
کد ارجاع: {{$details['code']}}
<br>
آدرس سایت ما: {{$details['website_url']}}
<br>
آی دی تلگرام: {{$details['telegram_id']}}
<br>
آی دی اینستاگرام:  {{$details['instagram_id']}}
@endcomponent

<br>
با تشکر، {{$details['business_name'] }}
@endcomponent
