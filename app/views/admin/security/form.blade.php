{{ Former::string('title')->required() }}
{{ Former::string('slug') }}
{{ Former::textarea('content')->addClass('ckeditor')->required() }}
{{ Former::string('meta_title') }}
{{ Former::string('meta_description') }}
{{ Former::string('meta_keywords') }}
@if ($tip->preview_updated_at)
   <div class="col-md-8 col-md-offset-4">
       {{ HTML::image($tip->preview->url('medium')) }}
   </div>
   {{ Former::file('preview')->accept('image') }}
@else
   {{ Former::file('preview')->accept('image')->required() }}
@endif
{{ Former::actions()
            ->large_primary_submit('Submit')
            ->large_inverse_reset('Reset') }}
