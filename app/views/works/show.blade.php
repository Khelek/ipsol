@extends('layouts.default')

@section('title')
    {{{  $work->$title }}}
@stop

@section('keywords') {{{ $work->meta_keywords }}} @stop
@section('meta_title') {{{ $work->meta_title }}} @stop
@section('description') {{{ $work->meta_description }}} @stop


@section('content')
<div class="ban clear-fix">
	<div class="ban_gray">
		<div class="col2">
			<h1><span class="ban_text">Наши работы</span></h1>
		</div>
	</div>
	<div class="ban_orange">
		<div class="col2">
			<div class="triangle"></div>
    	<a href="{{	URL::route('works.index') }}">Назад к списку работ</a>
		</div>
	</div>
</div>
<div class="content clear-fix">
	<div class="title_container clear-fix">
				<h1 class="title">{{ $work->title }}</h1>
				<div class="dot"></div><hr class="horizontal_line">
	</div>
	<div class="works_images clear-fix">
		<img class="work_img_big" src="{{	$work->main_photo->url('medium') }}" alt="">
		<img class="work_img_small" src="{{ $work->second_photo->url('medium') }}" alt="">
		<img class="work_img_small" src="{{	$work->third_photo->url('medium') }}" alt="">
	</div>
	<h2>Описание задачи</h2>
	<p>{{ $work->quest_description }}</p>
	<div class="title_container clear-fix">
				<h1 class="title">Клиент</h1>
				<div class="dot"></div><hr class="horizontal_line">
	</div>
	<div class="about_client clear-fix">
		<img src="{{ $work->client_photo->url('medium') }}" alt="">
		<div class="about_client_text">
			<h2 class="client_name">{{ $work->client_name }}</h2>
			<p class="post_work">{{ $work->client_post }}</p>
			<p class="client_comment">{{ $work->client_description }}</p>
		</div>
	</div>
	<div class="title_container clear-fix">
				<h1 class="title">Реализация</h1>
				<div class="dot"></div><hr class="horizontal_line">
	</div>
	<p>{{ $work->solution_content }}</p>
</div>

@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/works_open.css') }}">
@stop
