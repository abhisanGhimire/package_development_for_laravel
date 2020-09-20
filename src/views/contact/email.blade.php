@component('mail::message')
<strong>{{ config('app.name') }}</strong>

New email was sent by {{ $name }}

Message:
{{ $message }}
<br>
Email:{{$sender_email}}
@endcomponent