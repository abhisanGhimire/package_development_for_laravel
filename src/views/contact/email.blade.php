@component('mail::message')
#{{ config('app.name') }}

New email was sent by {{ $name }}

Message:
{{ $message }}
<br>
Email:{{$email}}
@endcomponent