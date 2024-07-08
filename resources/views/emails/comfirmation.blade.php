<x-mail::message>
# Workshop Payment Confirmation

<p>Dear {{ $compose['name'] }},</p>

<p>Thank you for registering for the DNALC Workshop {{ $compose['workshop'] }}.</p>

<p>Your registration is confirmed. Please note that you can also register for any other open workshops available now. If you have any questions or need further assistance, feel free to contact us. We look forward to your participation and hope you have a rewarding experience.</p>


Best regards,<br>
Admin
&copy; {{ date('Y') }} DNA | Learning Center. All rights reserved.
</x-mail::message>
