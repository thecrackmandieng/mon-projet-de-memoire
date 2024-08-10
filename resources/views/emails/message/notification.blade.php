@component('mail::message')
# Nouveau Message

Vous avez reçu un nouveau message :

{{ $message->content }}

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
