Пришла заявка: Имя пользователя: {{ $name }},
телефон: {{ $phone }},
<br>
e-mail: {{ $email }}
<br>
со страницы: {{ $page }}
<br>
@if ($departament)
    к отделу: {{ $departament }}
@endif
<br>
@if ($question)
    вопрос пользователя: {{ $question }}
@endif

