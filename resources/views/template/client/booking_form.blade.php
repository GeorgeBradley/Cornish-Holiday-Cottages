@component('mail::message')
# {{$enquiry_title}}

## {{$message}}


Wishes to book from: {{ $date_from }} to {{ $date_to }}

You have recieved an email from: {{$email}}

Thanks,<br>
{{$first_name}} {{$last_name}}

{{ config('app.name') }}
@endcomponent