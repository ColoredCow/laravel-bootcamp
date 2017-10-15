@component('mail::message')
# Hi {{ $guest->name }}

You have been invited to {{ $event->name }} on {{ $event->date }}.
Please click on the link below.

@component('mail::button', ['url' => 'http://soiree.dev/', 'color' => 'green'])
Check Invitation
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
