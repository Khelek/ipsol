{{ Former::string('title')->required() }}
{{ Former::string('slug') }}

{{ Former::textarea('preview_for_main_page')->required() }}
@include('components.image_upload_input', ["object" => $news, "image" => 'photo_preview_for_main'])
@include('components.small_text', ["text" =>
"Этот текст и изображение(разрешение не менее 400x250px) будет
отображаться на главной странице в разделе
\"Новости компании\""])

@include('components.image_upload_input', ["object" => $news, "image" => 'preview'])
@include('components.small_text', ["text" =>
"Загрузите квадратную картинку разрешением не менее 214х214px"])
@include('components.image_upload_input', ["object" => $news, "image" => 'big_preview'])
@include('components.small_text', ["text" =>
"Загрузите изображение разрешением 810х457px(иное разрешение будет
обрезано до этого размера)"])
{{ Former::textarea('content')->addClass('ckeditor')->required() }}
{{ Former::string('meta_title') }}
{{ Former::string('meta_description') }}
{{ Former::string('meta_keywords') }}
@include('components.small_text', ["text" => "Данные для SEO"])


{{ Former::actions()
            ->large_primary_submit(Lang::get('validation.attributes.submit')) }}
