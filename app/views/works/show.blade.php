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
		<a class="fancybox" rel="group" href="{{	$work->main_photo->url() }}">
			<img class="work_img_big" src="{{	$work->main_photo->url('medium') }}" alt="">
		</a>
		<a class="fancybox" rel="group" href="{{ $work->second_photo->url() }}">
			<img class="work_img_small" src="{{ $work->second_photo->url('medium') }}" alt="">
		</a>
		<a class="fancybox" rel="group" href="{{	$work->third_photo->url() }}">
			<img class="work_img_small" src="{{	$work->third_photo->url('medium') }}" alt="">
		</a>
	</div>
	<h2>Описание задачи</h2>
	<div class="work_text_content">{{ $work->quest_description }}</div>
	<div class="title_container clear-fix">
				<h1 class="title">Клиент</h1>
				<div class="dot"></div><hr class="horizontal_line">
	</div>
	<div class="about_client clear-fix">
		<img src="{{ $work->client_photo->url('medium') }}" alt="">
		<div class="about_client_text">
			<h2 class="client_name">{{ $work->client_name }}</h2>
			<p class="post_work">{{ $work->client_post }}</p>
			<p class="client_comment work_text_content">{{ $work->client_description }}</p>
		</div>
	</div>
	<div class="title_container clear-fix">
				<h1 class="title">Реализация</h1>
				<div class="dot"></div><hr class="horizontal_line">
	</div>
	<div class="work_text_content">{{ $work->solution_content }}</div>

  <div class="title_container clear-fix">
				<h1 class="title">Результат</h1>
				<div class="dot"></div><hr class="horizontal_line">
	</div>
	<div class="work_text_content">{{ $work->result }}</div>
</div>

	<div class="content clear-fix">

		<div class="title_container clear-fix">
	    	<h1 class="title">Понравилась работа?</h1>
			<div class="dot"></div><hr class="horizontal_line">
		</div>
	    <p>Просто заполните заявку и мы свяжемся с Вами в течении 59 секунд и мгновенно <br>
проконсультируем!</p>
		<div class="ask_form">
        {{ Former::open()->method('POST')->route('requests.store') }}
        {{ Form::token() }}
			  <div class="clear-fix">
				    <input type="text" name="name" placeholder="Ваше имя" class="input" required="true">
				    <input type="text" name="phone" placeholder="Ваш телефон" class="input" required="true">
				    <input type="email" name="email" placeholder="Ваш e-mail" class="input" required="true">
				    <input type="hidden" name="page" value='{{ "Со страницы	работы \"" . $work->title ."\"" }}' class="input">
			  </div>
			  <input type="submit" class="button button_active" value="Оставить заявку"/>
        {{ Form::close() }}
		</div>
	</div>
@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/works_open.css') }}">
	   <link rel="stylesheet" href="{{	asset('assets/css/jquery.fancybox.css') }}">
@stop
@section('scripts')
	<script src="{{	asset('assets/js/application.js') }}"></script>
@stop

@stop
