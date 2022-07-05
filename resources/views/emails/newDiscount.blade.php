@component('mail::message')
# {{$details['full_name']}} عزیز

یک کد تخفیف جدید برای شما صادر شد!
<br>
در خرید بعدی با ارائه کد زیر از {{$details['customer_discount']}} تخفیف بهره مند شوید. 

@component('mail::panel')
کد تخفیف: {{$details['code']}}
@endcomponent

<br>
با تشکر، {{$details['business_name'] }}
@endcomponent
