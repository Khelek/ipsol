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
				<h1><span class="ban_text">Наши работы</span></h1>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2">
				<div class="triangle"></div>
			</div>
		</div>
	</div>
	<div class="content clear-fix">
	   <p class="works_into">
	   	Каждая наша работа – это уникальное решение и проект для клиента. В ходе каждого проекта мы решаем новые задачи<br>
и используем новые технологии, которые значительно отличают нашу компанию
	   </p>
	   <ul class="works_menu clear-fix">
	   	<li class="works_menu_item works_menu_item_active"><a href="">Всё</a></li>
	   	<li class="works_menu_item"><a href="">Почти всё</a></li>
	   	<li class="works_menu_item"><a href="">Не совсем всё</a></li>
	   	<li class="works_menu_item"><a href="">Половина всего</a></li>
	   	<li class="works_menu_item"><a href="">Чуть-чуть всего</a></li>
	   	<li class="works_menu_item"><a href="">Почти ничего</a></li>
	   	<li class="works_menu_item"><a href="">Ничего</a></li>
	   	<li class="works_menu_item"><a href="">Совсем ничего</a></li>
	   	<li class="works_menu_item"><a href="">Безысходно ничего</a></li>
	   	<li class="works_menu_item"><a href="">чёрная дыра от ничего</a></li>
	   </ul>
	</div>
	<div class="content works clear-fix">
		<div class="works_row clear-fix">
			<div class="work_preview">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">Что здесь интересненького</a>
				<p>Какой-то тоже очень увлекательный и познавательный конечно текстываываыва</p>
			</div>
			<div class="work_preview">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">Что здесь интересненького</a>
				<p>Какой-то тоже очень увлекательный и познавательный конечно текстываываыва</p>
			</div>
			<div class="work_preview work_preview_big">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">Что здесь интересненького</a>
				<p>Какой-то тоже очень увлекательный и познавательный конечно текстываываыва</p>
			</div>
		</div>
		<div class="works_row clear-fix">
			<div class="work_preview">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">Что здесь интересненького</a>
				<p>Какой-то тоже очень увлекательный и познавательный конечно текстываываыва</p>
			</div>
			<div class="work_preview">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">Что здесь интересненького</a>
				<p>Какой-то тоже очень увлекательный и познавательный конечно текстываываыва</p>
			</div>
			<div class="work_preview">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">Что здесь интересненького</a>
				<p>Какой-то тоже очень увлекательный и познавательный конечно текстываываыва</p>
			</div>
			<div class="work_preview">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">Что здесь интересненького</a>
				<p>Какой-то тоже очень увлекательный и познавательный конечно текстываываыва</p>
			</div>
		</div>
		<div class="works_row clear-fix">
			<div class="work_preview work_preview_big">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">Что здесь интересненького</a>
				<p>Какой-то тоже очень увлекательный и познавательный конечно текстываываыва</p>
			</div>
			<div class="work_preview work_preview_big">
				<img src="{{	asset('assets/images/article_img_big.jpg') }}" alt="">
				<a href="">Что здесь интересненького</a>
				<p>Какой-то тоже очень увлекательный и познавательный конечно текстываываыва</p>
			</div>
		</div>
		<button class="button button_active">Показать больше объектов</button>
	</div>
	<div class="content clear-fix">
	    <div class="title_container clear-fix">
			<h1 class="title">Нет времени разбираться? Подскажем</h1>
			<div class="dot"></div><hr class="horizontal_line">
		</div>
	    <p>Просто заполните заявку и мы свяжемся с Вами в течении дня и мгновенно <br>
проконсультируем!</p>
		<div class="ask_form">
			<div class="clear-fix">
				<input type="text" placeholder="Ваше имя" class="input">
				<input type="text" placeholder="Ваш телефон" class="input">
				<input type="text" placeholder="Ваш e-mail" class="input">
			</div>
			<button class="button button_active">Оставить заявку</button>
		</div>
	</div>

@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/works.css') }}">
@stop
