{{ Former::string('email')->required() }}
{{ Request::is('admin/users/create*') ?
    Former::string('password')->required() :
    Former::string('password')->forceValue("") }}

<hr>
{{ Former::checkbox('admin')->addClass('col-sm-1 col-lg-1 col-md-1') }}
{{ Former::checkbox('content_manager')->addClass('col-sm-1 col-lg-1 col-md-1') }}
{{ Former::checkbox('manager')->addClass('col-sm-1 col-lg-1 col-md-1') }}
@include('components.small_text', ["text" =>
"Выберите права пользователя: <ul>
<li>Администратор имеет полный доступ;</li>
<li>Контентный менеджер может добавлять и редактировать статьи, новости и другие виды
контента;</li>
<li>Менеджер имеет доступ к заявкам и подпискам на блоги.</li></ul>"])


{{ Former::actions()
            ->large_primary_submit(Lang::get('validation.attributes.submit')) }}
