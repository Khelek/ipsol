{{ Former::string('title')->required() }}
{{ Former::string('slug') }}
@include('components.image_upload_input', ["object" => $tip, "image" => 'preview'])
@include('components.small_text', ["text" =>
"Загрузите квадратную картинку разрешением не менее 214х214px"])
{{ Former::textarea('content')->addClass('ckeditor')->required() }}
<hr>
{{ Former::string('meta_title') }}
{{ Former::string('meta_description') }}
{{ Former::string('meta_keywords') }}
@include('components.small_text', ["text" => "Данные для SEO"])


{{ Former::actions()
            ->large_primary_submit(Lang::get('validation.attributes.submit')) }}
