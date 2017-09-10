@component('mail::message')
@component('mail::panel')
User {{ $context['user']->name }} left a feedback <br>
{{ $context['feedback'] }}
@endcomponent
@endcomponent