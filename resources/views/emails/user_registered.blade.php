@component('mail::message')
@component('mail::panel')
Dear {{ $context['user']->name }}
@endcomponent

@component('mail::panel')
You can login to your account by clicking the login button on the top of the {{ URL::to('/') }} site and using the username and password below: <br>
<strong>Login:</strong> {{ $context['user']->email }}<br>
<strong>Password:</strong> Your password is the password you created when you registered on the site.
@endcomponent

@component('mail::panel')
Thanks,<br>
{{ config('app.name') }}
@endcomponent
@endcomponent