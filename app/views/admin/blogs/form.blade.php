{{ Former::string('title')->required() }}
{{ Former::string('slug') }}

@include('components.image_upload_input', ["object" => $post, "image" => 'preview'])
@include('components.small_text', ["text" =>
"Загрузите квадратную картинку разрешением не менее 214х214px"])

{{ Former::textarea('content')->addClass('ckeditor')->required() }}


{{ Former::select('rubrics[]')->fromQuery($rubrics, 'name', 'id')
                              ->select($post->rubrics()->getRelatedIds())
                              ->id('rubrics')
                              ->multiple() }}

{{ Former::text('tags') }}
@include('components.small_text', ["text" =>
"Введите название тега, и
нажмите enter или запятую, чтобы подтвердить"])

{{ Former::string('meta_title') }}
{{ Former::string('meta_description') }}
{{ Former::string('meta_keywords') }}
@include('components.small_text', ["text" => "Данные для SEO"])

{{ Former::actions()
            ->large_primary_submit(Lang::get('validation.attributes.submit')) }}

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#tags').tokenfield();
			$('#rubrics').select2();
		});
	</script>
@stop
