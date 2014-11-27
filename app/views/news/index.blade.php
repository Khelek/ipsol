@extends('layouts.default')

@section('title')
    {{{ $title }}}
@stop

@section('keywords')Posts administration @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description')Posts administration index @stop


@section('content')
	<div class="ban clear-fix">
		<div class="ban_gray">
			<div class="col2">
				<h1><span class="ban_text">Новости</span></h1>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2">
				<div class="triangle"></div>
			</div>
		</div>
	</div>
	<div class="content clear-fix">
	<div class="works_images clear-fix">
		<img class="work_img_big" src="{{	$last_news->big_preview->url('medium') }}" alt="">
    @for($i = 0; $i < $banners->count() && $i < 2; $i++)
		    <a href="{{ $banners->get($i)->url }}"><img class="work_img_small" src="{{	$banners->get($i)->img->url('medium') }}" alt=""></a>
    @endfor
	</div>
	<div class="article_container">
	    <h2><a class="article_header" href="{{	URL::route('news.show', $last_news->slug) }}">{{ $last_news->title }}</a></h2>
	    <p class="description"> {{ Str::limit($last_news->content, 100) }} </p>
			<p class="date">{{ $last_news->created_at() }}</p>
  </div>
	 <div class="main">
          @foreach ($another_news as $one_news)
	    	      <div class="article clear-fix">
	    		        <img src="{{ $one_news->preview->url('medium') }}" alt="">
	    		        <div class="article_container">
		    		          <h2><a class="article_header" href="{{	URL::route('news.show', $one_news->slug) }}">{{ $one_news->title }}</a></h2>
		    		          <p class="description"> {{ Str::limit($one_news->content, 100) }} </p>
					            <p class="date">{{ $one_news->created_at() }}</p>
	    		        </div>
	    	      </div>
        @endforeach
	    </div>
	</div>

<?php $paginator = $news; ?>
@include('components.pagination')
@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/blog.css') }}">
	  <link rel="stylesheet" href="{{	asset('assets/css/security.css') }}">
	  <link rel="stylesheet" href="{{	asset('assets/css/news.css') }}">
	  <link rel="stylesheet" href="{{	asset('assets/css/works_open.css') }}">
@stop
