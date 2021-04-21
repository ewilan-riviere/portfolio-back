@component('mail::message')
# A new contact from Portfolio

**Name** : {{ $name }}<br />
**Email**&nbsp;: <a href="mailto:{{ $email }}">{{ $email }}</a>

**Message**&nbsp;:<br />
{{ $message }}

*Portfolio Team*
@endcomponent
