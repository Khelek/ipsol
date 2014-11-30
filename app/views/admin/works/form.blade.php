{{ Former::string('title')->required() }}
{{ Former::string('slug') }}
{{ Former::checkbox('need_big_preview')->addClass('col-sm-1 col-lg-1 col-md-1') }}

@include('components.image_upload_input', ["object" => $work, "image" => 'preview'])
@include('components.image_upload_input', ["object" => $work, "image" => 'big_preview'])
@include('components.image_upload_input', ["object" => $work, "image" => 'main_photo'])
@include('components.image_upload_input', ["object" => $work, "image" => 'second_photo'])
@include('components.image_upload_input', ["object" => $work, "image" => 'third_photo'])

{{ Former::textarea('quest_description')->addClass('ckeditor')->required() }}
{{ Former::string('client_name')->required() }}
{{ Former::string('client_post')->required() }}
@include('components.image_upload_input', ["object" => $work, "image" => 'client_photo'])
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
            ->large_primary_submit(Lang::get('validation.attributes.submit')) }}

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#categories').select2();
		});
	</script>
@stop
