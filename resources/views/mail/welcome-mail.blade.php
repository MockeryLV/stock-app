@component('mail::message')
{{$maildata->subject}}

{{$maildata->message}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
