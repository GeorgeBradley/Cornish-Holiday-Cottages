@component('mail::message')
# {{$enquiry_title}}

## {{$message}}

You have recieved an email from: {{$email}}

Thanks,<br>
{{$first_name}} {{$last_name}}

{{ config('app.name') }}
@endcomponent