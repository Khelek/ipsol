@extends('layouts.default')

@section('title')
    {{{ $post->$title }}}
@stop

@section('keywords') {{{ $post->meta_keywords }}} @stop
@section('meta_title') {{{ $post->meta_title }}} @stop
@section('description') {{{ $post->meta_description }}} @stop


@section('content')
	<div class="ban clear-fix">
		<div class="ban_gray">
			<div class="col2">
				<h1><span class="ban_text">Блог</span></h1>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2 clear-fix">
				<div class="triangle"></div>
				<div class="ban_form">
					<div class="input_search_block">
            {{ Form::open(['url' => '/blogs', 'method' => 'get']) }}
						    <input type="text" name="search" placeholder="Поиск" class="input input_search">
				        <button class="input_search_button" type="submit"></button>
            {{ Form::close() }}
					</div>
					<select type="text" placeholder="Выбор рубрики" class="input	input_select"  onchange="location = this.options[this.selectedIndex].value;">
              @foreach ($rubrics as $rubric)
						      <option value="/blogs?rubric={{ $rubric->name }}">{{ $rubric->name }}</option>
              @endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="title_container clear-fix">
			<h1 class="title">{{ $post->title }}</h1>
			<div class="dot"></div><hr class="horizontal_line">
		</div>
		<div class="article">
			{{ $post->content }}
			<p class="date">{{ $post->created_at() }}</p>
			<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus"></div>
		</div>
		<div class="another_article clear-fix">
			<div class="title_container clear-fix">
			<h1 class="title">Другие статьи</h1>
			<div class="dot"></div><hr class="horizontal_line">
		</div>
      @foreach ($another_posts as $a_post)
			    <div class="col4">
				      <img src="{{ $a_post->preview->url('medium') }}" alt="">
				      <a href="{{ URL::route('blogs.show', $a_post->slug) }}">{{ $a_post->title }}</a>
				      <p>{{ Str::limit($a_post->content, 100) }}</p>
				      <p class="date">{{ $a_post->created_at() }}</p>
			    </div>
      @endforeach
		</div>
		<div class="comments">
		<div class="title_container clear-fix">
			<h1 class="title">Комментарии</h1>
			<div class="dot"></div><hr class="horizontal_line">
		</div>
      <div id="disqus_thread"></div>
      <script type="text/javascript">
       /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
       var disqus_shortname = 'myawesomelaravelsite'; // required: replace example with your forum shortname

       /* * * DON'T EDIT BELOW THIS LINE * * */
       (function() {
           var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
           dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
           (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
       })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		</div>
	</div>
@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/blog_open.css') }}">
@stop
