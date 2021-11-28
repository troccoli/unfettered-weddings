@component('mail::message')
    # Contact Form Submission

    From: {{ $name }}

    Email: {{ $email}}

    Message:

    {{ $message }}

@endcomponent
