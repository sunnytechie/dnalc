<x-mail::message>
# Contact message

<p>Hello,</p>

<p>You have received a new contact message from:</p>
Name: {{ $contact['name'] }} <br>
Email: {{ $contact['email'] }} <br>
Phone: {{ $contact['phone'] }} <br>
Subject: {{ $contact['subject'] }} <br>
Message: {{ $contact['message'] }} <br>

Please respond to this message as soon as possible.
<br><br>
Thank you,<br>
{{ config('app.name') }}
</x-mail::message>
