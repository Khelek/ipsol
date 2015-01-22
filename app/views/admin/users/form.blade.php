{{ Former::string('email')->required() }}
{{ Former::string('password')->required() }}
@include('components.small_text', ["text" =>
"Выберите права пользователя: Администратор имеет полный доступ;
Контентный менеджер может добавлять и редактировать статьи, новости и другие виды
контента;
Менеджер имеет доступ к заявкам и подпискам на блоги."])
<hr>

{{ Former::checkbox('admin')->addClass('col-sm-1 col-lg-1 col-md-1') }}
{{ Former::checkbox('content_manager')->addClass('col-sm-1 col-lg-1 col-md-1') }}
{{ Former::checkbox('manager')->addClass('col-sm-1 col-lg-1 col-md-1') }}

{{ Former::actions()
            ->large_primary_submit(Lang::get('validation.attributes.submit')) }}
