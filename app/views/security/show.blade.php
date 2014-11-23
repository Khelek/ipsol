@extends('layouts.default')

@section('title')
@stop

@section('keywords')Posts administration @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description')Posts administration index @stop


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
	    <div class="main">
			<div class="line_padding">
				<div class="line"></div>
			</div>
			<div class="article">
				<h1 class="title">{{ $tip->title }}</h1>
				<p>
            {{ $tip->content }}
				</p>
				<p class="date">{{ $tip->created_at() }}</p>


	    	</div>
	    	<a href="{{	URL::route('security.index') }}">Назад к списку советов</a>
		</div>
    	<div class="sidebar">
    		<h2 class="title">Ещё советы</h2>
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
