@extends('layouts.default')

@section('title')
@stop

@section('keywords') $tip->meta_keywords @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description') $tip->meta_description @stop


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
	    	<a href="{{	URL::route('security.index') }}">Назад к списку советов</a>
			</div>
		</div>
	</div>
	<div class="content clear-fix">
		<div class="line_padding">
				<div class="line"></div>
		</div>
		<div class="title_container clear-fix">
				<h1 class="title">{{ $tip->title }}</h1>
			<div class="horizontal_decoration"><div class="dot"></div><hr class="horizontal_line"></div>
		</div>
	    <div class="main">
			
			<div class="article">
				<p>
            {{ $tip->content }}
				</p>
				<p class="date">{{ $tip->created_at() }}</p>


	    	</div>
	    	<a href="{{	URL::route('security.index') }}">Назад к списку советов</a>
		</div>
    	<div class="sidebar">
    		<h2>Ещё советы</h2>
        @foreach ($another_tips as $a_tip)
    		    <div class="sidebar_article"><img src="{{ $a_tip->preview->url('medium') }}" alt="">
				        <a href="{{	URL::route('security.show', $a_tip->slug) }}">{{ $a_tip->title }}</a>
				        <p>{{ Str::limit($a_tip->content, 100) }}</p>
				        <p class="date">{{ $a_tip->created_at() }}</p>
			      </div>
        @endforeach
		</div>
	</div>

@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/theme.css') }}">
	  <link rel="stylesheet" href="{{	asset('assets/css/security_open.css') }}">
@stop
