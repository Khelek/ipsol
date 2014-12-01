{{ Former::string('name')->required() }}
{{ Former::string('url')->required() }}
{{ Former::checkbox('view_in_news') }}
@include('components.small_text', ["text" =>
"Будет показано на главной новостей в случайном порядке"])

@if ($banner->img_updated_at)
   <div class="col-md-8 col-md-offset-4">
       {{ HTML::image($banner->img->url('medium')) }}
   </div>
   {{ Former::file('img')->accept('image') }}
@else
   {{ Former::file('img')->accept('image')->required() }}
@endif
@include('components.small_text', ["text" =>
"Загрузите квадратную картинку разрешением не менее 214х214px"])

{{ Former::actions()
            ->large_primary_submit(Lang::get('validation.attributes.submit')) }}
