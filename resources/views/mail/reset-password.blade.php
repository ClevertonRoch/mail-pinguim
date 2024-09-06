<x-mail::message>
# Recuperar Senha

Olá,uma nova senha foi criada para você acessar nosso sistema.

<x-mail::button color="info" :url="''">
Acessar o Site
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
