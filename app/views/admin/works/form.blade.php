{{ Former::string('title')->required() }}
{{ Former::string('slug') }}
{{ Former::checkbox('need_big_preview')->addClass('col-sm-1 col-lg-1 col-md-1') }}
@include('components.small_text', ["text" =>
"Большим превью можно выделить наиболее важные работы"])

{{ Former::textarea('preview_for_main_page')->required() }}
@include('components.image_upload_input', ["object" => $work, "image" => 'photo_preview_for_main'])
@include('components.small_text', ["text" =>
"Этот текст и изображение(разрешение не менее 400x250px) будет отображаться на главной странице в разделе
\"Последний объект\""])

@include('components.image_upload_input', ["object" => $work, "image" => 'preview'])
@include('components.small_text', ["text" =>
"Загрузите квадратную картинку разрешением не менее 214х214px"])

@include('components.image_upload_input', ["object" => $work, "image" => 'big_preview'])
@include('components.small_text', ["text" =>
"Загрузите прямоугольную картинку 2x1 разрешением не менее 416х214px"])

@include('components.image_upload_input', ["object" => $work, "image" => 'main_photo'])
@include('components.small_text', ["text" =>
"Загрузите изображение разрешением 810х457px(иное разрешение будет
обрезано до этого размера)"])

@include('components.image_upload_input', ["object" => $work, "image" => 'second_photo'])
@include('components.small_text', ["text" =>
"Загрузите изображение разрешением 400х214px(иное разрешение будет
обрезано до этого размера)"])

@include('components.image_upload_input', ["object" => $work, "image" => 'third_photo'])
@include('components.small_text', ["text" =>
"Загрузите изображение разрешением 400х214px(иное разрешение будет
обрезано до этого размера)"])

{{ Former::textarea('quest_description')->addClass('ckeditor')->required() }}
{{ Former::string('client_name')->required() }}
{{ Former::string('client_post')->required() }}
@include('components.image_upload_input', ["object" => $work, "image" => 'client_photo'])
@include('components.small_text', ["text" =>
"Загрузите квадратную картинку разрешением не менее 214х214px"])
{{ Former::string('client_description')->required() }}
{{ Former::textarea('solution_content')->addClass('ckeditor')->required() }}
{{ Former::textarea('result')->addClass('ckeditor')->required() }}

{{ Former::select('categories[]')->fromQuery($categories, 'name', 'id')
                              ->select($work->categories()->getRelatedIds())
                              ->id('categories')
                              ->multiple() }}


{{ Former::string('meta_title') }}
{{ Former::string('meta_description') }}
{{ Former::string('meta_keywords') }}
@include('components.small_text', ["text" => "Данные для SEO"])
{{ Former::actions()
            ->large_primary_submit(Lang::get('validation.attributes.submit')) }}

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#categories').select2();
		});
	</script>
@stop
