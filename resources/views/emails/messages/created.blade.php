@component('mail::message')
# Hey Admin

-{{ $msge->name }} <br>
-{{ $msge->email }}

@component('mail::panel')
{{$msge->message}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
