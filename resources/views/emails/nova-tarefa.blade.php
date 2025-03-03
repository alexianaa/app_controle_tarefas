<x-mail::message>
# {{ $tarefa }}

Data de limite de conclusão: {{ $data_limite_conclusao }}

<x-mail::button :url="$url">
Veja a tarefa
</x-mail::button>

Atenciosamente,<br>
{{ config('app.name') }}
</x-mail::message>
