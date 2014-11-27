@extends('layouts.default')

@section('title')
    {{{ $news->$title }}}
@stop

@section('keywords') $news->meta_keywords @stop
@section('author') @stop
@section('description') $news->meta_description @stop


@section('content')
	<div class="ban clear-fix">
		<div class="ban_gray">
			<div class="col2">
				<h1><span class="ban_text">Советы по безопасности</span></h1>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2">
				<div class="triangle"></div>
	    	<a href="{{	URL::route('news.index') }}">Назад к списку советов</a>
			</div>
		</div>
	</div>
	<div class="content clear-fix">
		<div class="line_padding">
				<div class="line"></div>
		</div>
		<div class="title_container clear-fix">
				<h1 class="title">{{ $news->title }}</h1>
			<div class="horizontal_decoration"><div class="dot"></div><hr class="horizontal_line"></div>
		</div>
	    <div class="main">
			
			<div class="article">
				<p>
            {{ $news->content }}
				</p>
				<p class="date">{{ $news->created_at() }}</p>


	    	</div>
	    	<a href="{{	URL::route('news.index') }}">Назад к списку советов</a>
		</div>
    	<div class="sidebar">
    		<h2>Ещё советы</h2>
        @foreach ($another_news as $a_news)
    		    <div class="sidebar_article"><img src="{{ $a_news->preview->url('medium') }}" alt="">
				        <a href="{{	URL::route('news.show', $a_news->slug) }}">{{ $a_news->title }}</a>
				        <p>{{ Str::limit($a_news->content, 100) }}</p>
				        <p class="date">{{ $a_news->created_at() }}</p>
			      </div>
        @endforeach
		</div>
	</div>

@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/blog_open.css') }}">
@stop
