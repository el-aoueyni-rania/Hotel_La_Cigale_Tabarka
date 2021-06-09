@component('mail::message')
# Hotel La Cigale Tabarka 

Dear **{{ $user->name}}**

We are happy to announce that your account has been created. <br>
these are the informations that we registred for you, can you please check and tell us if there is any mistake:
- **email **: {{$user->email}} 


{{--@component('mail::button', ['url' => ''])
Button Text
@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
