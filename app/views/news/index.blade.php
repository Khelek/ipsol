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
      @if ($big_news)
		      <img class="work_img_big" src="{{	$big_news->big_preview->url('medium') }}" alt="">
      @endif
      @for($i = 0; $i < $banners->count() && $i < 2; $i++)
		      <a href="{{ $banners->get($i)->url }}"><img class="work_img_small" src="{{	$banners->get($i)->img->url('medium') }}" alt=""></a>
      @endfor
	</div>
  @if ($big_news)
	<div class="article_container article_container_main">
	    <h2><a class="article_header" href="{{	URL::route('news.show', $big_news->slug) }}">{{ $big_news->title }}</a></h2>
		  <p class="description"> {{ Str::limit(strip_tags($big_news->content), 130) }} </p>
			<p class="date">{{ $big_news->created_at() }}</p>
	</div>
  @endif
	 <div class="main">
          @foreach ($news as $one_news)
	    	      <div class="article clear-fix">
	    		        <a href="{{	URL::route('news.show', $one_news->slug) }}"><img src="{{ $one_news->preview->url('medium') }}" alt=""></a>
	    		        <div class="article_container">
		    		          <h2><a class="article_header" href="{{	URL::route('news.show', $one_news->slug) }}">{{ $one_news->title }}</a></h2>
		    		          <p class="description"> {{ Str::limit(strip_tags($one_news->content), 130) }} </p>
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
	  <link rel="stylesheet" href="{{	asset('assets/css/news.css') }}">
@stop
