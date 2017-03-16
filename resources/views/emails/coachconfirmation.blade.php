@component('mail::message')
# Welcome to {{ config('app.name') }}, {{ $coach->name }}

Please click the button to Confirm your Account

@component('mail::button', ['url' =>  url('/coach/register/confirm/'. $token->token)  ])
Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
