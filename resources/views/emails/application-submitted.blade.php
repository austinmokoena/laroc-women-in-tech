@component('mail::message')
# Application Received!

Dear {{ $user->name }},

We've successfully received your application for the Women in Tech program. 

**Next Steps:**
- Your application is under review
- We'll notify you of the outcome within 5 working days

You can check your application status from your dashboard.

Thanks,<br>
{{ config('app.name') }}
@endcomponent