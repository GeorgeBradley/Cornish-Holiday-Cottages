@component('mail::message')
# Thank you for contacting us

Thank you for your enquiry! We'll try and get back to you as soon as we can!

@component('mail::button', ['url' => 'https://worst'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
