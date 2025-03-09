@component('mail::message')
# Congratulations!

Dear {{ $user->name }},

We're pleased to inform you that your application for the Women in Tech program has been accepted! 🥳<br>
After logging in to your dashboard, you find on your navigation bar that the <b>study</b> option is now available

@component('mail::button', ['url' => route('dashboard')])
Access Study Materials
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent