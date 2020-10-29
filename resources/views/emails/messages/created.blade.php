@component('mail::message')
# Hey Admin

-{{ $name }} <br>
-{{ $email }}

@component('mail::panel')
{{$msge}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
