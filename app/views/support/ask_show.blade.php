@extends('layouts.default')

@section('title')
@stop

@section('keywords') {{{ $ask->meta_keywords }}} @stop
@section('meta_title') {{{ $ask->meta_title }}} @stop
@section('description') {{{ $ask->meta_description }}} @stop



@section('content')
	<div class="ban clear-fix">
		<div class="ban_gray">
			<div class="col2">
				<h1><span class="ban_text">Поддержка</span></h1>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2">
				<div class="triangle"></div>
	    	<a href="{{	URL::route('support.ask') }}">Назад к списку вопросов</a>
			</div>
		</div>
	</div>
	<div class="content clear-fix">
			<div class="line_padding">
				<div class="line"></div>
			</div>
		      <div class="title_container clear-fix">
				      <h1 class="title">{{ $ask->title }}</h1>
			        <div class="horizontal_decoration"><div class="dot"></div><hr class="horizontal_line"></div>
		      </div>
	    <div class="main">
			<div class="article">
				<p>
            {{ $ask->content }}
				</p>
				<p class="date">{{ $ask->created_at() }}</p>


	    	</div>
	    	<a href="{{	URL::route('support.ask') }}">Назад к списку вопросов</a>
		</div>
    	<div class="sidebar">
    		<h2>Также спрашивают</h2>
        @foreach ($another_asks as $a_ask)
    		    <div class="sidebar_article">
				        <a href="{{	URL::route('support.ask.show', $a_ask->slug) }}">{{ $a_ask->title }}</a>
		    		    <p> {{ Str::limit(strip_tags($a_ask->content), 100) }} </p>
				        <p class="date">{{ $a_ask->created_at() }}</p>
			      </div>
        @endforeach
		</div>
	</div>

@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/security_open.css') }}">
@stop
