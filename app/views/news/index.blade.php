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
	<div class="works_images clear-fix">
		<img class="work_img_big" src="{{	asset('assets/images/article_img_big.jpg') }}" alt="">
		<img class="work_img_small" src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
		<img class="work_img_small" src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
	</div>
	 <div class="main">
          @foreach ($tips as $tip)
	    	      <div class="article clear-fix">
	    		        <img src="{{ $tip->preview->url('medium') }}" alt="">
	    		        <div class="article_container">
		    		          <h2><a class="article_header" href="{{	URL::route('security.show', $tip->slug) }}">{{ $tip->title }}</a></h2>
		    		          <p class="description"> {{ Str::limit($tip->content, 100) }} </p>
					            <p class="date">{{ $tip->created_at() }}</p>
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
