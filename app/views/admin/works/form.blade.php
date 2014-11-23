{{ Former::string('title')->required() }}
{{ Former::string('slug') }}

@include('components.image_upload_input', ["object" => $work, "image" => 'preview'])
@include('components.image_upload_input', ["object" => $work, "image" => 'big_preview'])
@include('components.image_upload_input', ["object" => $work, "image" => 'main_photo'])
@include('components.image_upload_input', ["object" => $work, "image" => 'second_photo'])
@include('components.image_upload_input', ["object" => $work, "image" => 'third_photo'])

{{ Former::textarea('quest_description')->addClass('ckeditor')->required() }}
{{ Former::string('client_name')->required() }}
{{ Former::string('client_post')->required() }}
{{ Former::string('client_description')->required() }}
{{ Former::textarea('solution_content')->addClass('ckeditor')->required() }}

{{ Former::select('categories[]')->fromQuery($categories, 'name', 'id')
                              ->select($work->categories()->getRelatedIds())
                              ->id('categories')
                              ->multiple() }}
{{ Former::string('meta_title') }}
{{ Former::string('meta_description') }}
{{ Former::string('meta_keywords') }}
{{ Former::actions()
            ->large_primary_submit('Submit')
            ->large_inverse_reset('Reset') }}

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#categories').select2();
		});
	</script>
@stop
