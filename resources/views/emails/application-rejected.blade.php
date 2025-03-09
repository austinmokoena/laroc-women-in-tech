@component('mail::message')
# Application Update

Dear {{ $user->name }},

After careful consideration, we regret to inform you that your application for the Women in Tech program hasn't been successful this time.

**Note:** {{ $reason ?? 'We encourage you to apply again in the future.' }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent