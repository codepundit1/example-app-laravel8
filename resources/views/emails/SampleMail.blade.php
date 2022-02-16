@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel')
This is the panel content.
@endcomponent

@component('mail::table')
| Name          | Table         | Example  |
| ------------- |:-------------:| --------:|
| Jahid Hasan   | Centered      | $10      |
| Jony Miya     | Right-Aligned | $20      |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
