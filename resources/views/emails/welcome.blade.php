@component('mail::message')
# Welcome to Our Platform!

Dear {{ $user->name }},

Thank you for registering with us. You can now proceed to apply for the Women in Tech program.

@component('mail::button', ['url' => route('womenintech.register')])
Apply Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent