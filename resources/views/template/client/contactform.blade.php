@component('mail::message')
# {{$subject}}

## {{$message}}

Feel free to contact me via {{$email}}

Thanks,<br>
{{$first_name}} {{$last_name}}

{{ config('app.name') }}
@endcomponent