@component('mail::message')
# Introduction

New query from {{ $name }}

{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
