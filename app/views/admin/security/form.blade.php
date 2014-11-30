{{ Former::string('title')->required() }}
{{ Former::string('slug') }}
{{ Former::textarea('content')->addClass('ckeditor')->required() }}
{{ Former::string('meta_title') }}
{{ Former::string('meta_description') }}
{{ Former::string('meta_keywords') }}

@include('components.image_upload_input', ["object" => $tip, "image" => 'preview'])

{{ Former::actions()
            ->large_primary_submit(Lang::get('validation.attributes.submit')) }}
