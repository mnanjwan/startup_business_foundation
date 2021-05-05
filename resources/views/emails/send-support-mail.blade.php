@component('mail::message')
# Support Mail from {{ $support->first_name. ' ' . $support->last_name }}

{{ $support->description }}

<p>Sender's Email: {{ $support->email }}</p>
<p>Sender's Phone : {{ $support->phone }}</p>

<!-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent -->

Thanks,<br>
{{ config('app.name') }}
@endcomponent
