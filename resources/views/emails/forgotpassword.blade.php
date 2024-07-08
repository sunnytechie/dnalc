<x-mail::message>
# Reset Password Pin

<p>Hi {{ $forgotPswdMail['name'] }},</p>

<span>Your reset pin: {{ $forgotPswdMail['otp'] }}</span><br>
<span>Please don't share this details to anyone.</span>

<br>
<br>

Thanks,<br>
&copy; {{ date('Y') }} DNA | Learning Center. All rights reserved.


</x-mail::message>
