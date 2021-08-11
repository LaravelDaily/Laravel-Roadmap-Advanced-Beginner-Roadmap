@component('mail::message')
# Task Assignment

Task _{{ $title }}_ have been assigned to you.

@component('mail::button', ['url' => $url ])
View task
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
