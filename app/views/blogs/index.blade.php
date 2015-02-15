@extends('layouts.default')

@section('title')
    Блог АйПи Решения
@stop

@section('keywords')Posts administration @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description')Posts administration index @stop


@section('content')
	<div class="ban clear-fix">
		<div class="ban_gray">
			<div class="col2">
				<h1><span class="ban_text">Блог</span></h1>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2">
				<div class="triangle"></div>
			</div>
		</div>
	</div>
	<div class="content clear-fix">
	    <div class="main">
	    <div class="line_padding">
    		<div class="line"></div>
	    </div>
      @foreach ($posts as $post)
	    	<div class="article clear-fix">
				<a href="{{ URL::route('blogs.show', $post->slug) }}"><img src="{{ $post->preview->url('medium') }}" alt="" class="article_img"></a>
	    		<div class="article_container">
		    		<h2><a class="article_header" href="{{ URL::route('blogs.show', $post->slug) }}">{{ $post->title }}</a></h2>
		    		<p class="description"> {{ Str::limit(strip_tags($post->content), 110) }} </p>
					<p class="date">{{ $post->created_at() }}</p>
          @if ($post->tagNames() != [])
					    Тэги:
              {{ implode(", ", array_map(function($name) {
                    return '<a href="/blogs?tag='.$name.'" class="tag">'.$name.'</a>';
                }, $post->tagNames())) }}
          @endif
					<div class="yashare-auto-init" data-yashareL10n="ru"
	data-yashareType="none" data-yashareLink="{{ URL::route('blogs.show', $post->slug) }}" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus"></div>
	    		</div>
	    	</div>
      @endforeach
	    </div>
	    <div class="sidebar">
	    	<div class="input_search_block">
            {{ Form::open(['url' => '/blogs', 'method' => 'get']) }}
				        <input type="text" name="search" placeholder="Поиск"class="input input_search">
				        <button class="input_search_button" type="submit"></button>
            {{ Form::close() }}
			</div>
    		<p>Выбор рубрики:</p>
        @foreach ($rubrics as $rubric)
    		    <a href="{{ URL::route('blogs.index.rubric',
	$rubric->slug) }}" class="{{ Request::is('blogs/rubric/'. $rubric->slug) ?	'blog_rubric_active' : 	'' }}">{{ $rubric->name }}</a>
        @endforeach
    		<p>Подписаться на статьи.<br>
			Я хочу быть в курсе<br>
			последних статей</p>
        {{ Former::open()->method('POST')->route('subscriptions.store') }}
        {{ Form::token() }}
        <input class="input input_email" type="email" name="email" placeholder="Ваш e-mail" required="true">
			  <input class="button button_active" type="submit"
	value="Подписаться" />
        {{ Form::close() }}
	    </div>
	</div>
	<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
<?php $paginator = $posts; ?>
@include('components.pagination')
@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/blog.css') }}">
@stop
