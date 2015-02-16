@extends('layouts.default')

@section('title')
    {{{ $post->$title }}}
@stop

@section('keywords') {{{ $post->meta_keywords }}} @stop
@section('meta_title') {{{ $post->meta_title }}} @stop
@section('description') {{{ $post->meta_description }}} @stop

@section('meta-tags')
    <meta content='{{ $post->title }}' property='og:title'>
    <meta content='{{ Str::limit(strip_tags($post->content, 100)) }}' property='og:description'>
    <meta content='IpSolutions' property='og:site_name'>
    <meta content='{{ \Request::root().$post->preview->url('medium') }}' property='og:image'>
    <meta content='214' property='og:image:width'>
    <meta content='214' property='og:image:height'>
    <meta content='{{ URL::route('blogs.show', $post->slug) }}' property='og:url'>
@stop


@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&appId=164865747003422&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



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
	<div class="content clear-fix">
		  <div class="line_padding">
				  <div class="line"></div>
		  </div>
		  <div class="title_container clear-fix">
				  <h1 class="title">{{ $post->title }}</h1>
			    <div class="horizontal_decoration"><div class="dot"></div><hr class="horizontal_line"></div>
		  </div>
	    <div class="main">

			    <div class="article">
				      <p>
                  {{ $post->content }}
				      </p>
				      <p class="date">{{ $post->created_at() }}</p>
	            <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>


	        </div>
		  </div>
    	<div class="sidebar">
    		  <h2>Ещё статьи</h2>
          @foreach ($another_posts as $a_post)
    		      <div class="sidebar_article"><img src="{{ $a_post->preview->url('medium') }}" alt="">
				          <a href="{{	URL::route('blogs.show', $a_post->slug) }}">{{ $a_post->title }}</a>
		    		      <p> {{ Str::limit(strip_tags($a_post->content), 100) }} </p>
				          <p class="date">{{ $a_post->created_at() }}</p>
			        </div>
          @endforeach
		  </div>
	</div>
  <div class="content">
		  <div class="comments">
		      <div class="title_container clear-fix">
			        <h1 class="title">Комментарии</h1>
			        <div class="dot"></div><hr class="horizontal_line">
		      </div>
          <div class="section">
              <ul class="tabs">
                  <li class="current">Основные</li>
                  <li>ВКонтакте</li>
                  <li class="tab_facebook">Facebook</li>
              </ul>
              <div class="box visible">
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
              <div class="box">
                  <div id="vk_comments"></div>
                  <script type="text/javascript">
                   VK.Widgets.Comments("vk_comments", {limit: 10, width: "1000", attach: "*"});
                  </script>
              </div>
              <div class="box">
                  <div class="fb-comments" data-href="http://ipsol-test.tk" data-width="900" data-numposts="10" data-colorscheme="light"></div>
              </div>
          </div>
	    </div>
  </div>
@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/blog_open.css') }}">
@stop

@section('scripts')
	<script src="{{	asset('assets/js/application.js') }}"></script>
@stop
