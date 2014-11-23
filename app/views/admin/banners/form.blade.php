{{ Former::string('name')->required() }}
{{ Former::string('url')->required() }}
{{ Former::checkbox('view_in_news') }}

@if ($banner->img_updated_at)
   <div class="col-md-8 col-md-offset-4">
       {{ HTML::image($banner->img->url('medium')) }}
   </div>
   {{ Former::file('img')->accept('image') }}
@else
   {{ Former::file('img')->accept('image')->required() }}
@endif

{{ Former::actions()
            ->large_primary_submit('Submit')
            ->large_inverse_reset('Reset') }}
