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
				<h1><span class="ban_text">Поддержка</span></h1>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2">
				<div class="triangle"></div>
				<div class="ban_form">
					<a href="">Часто задаваемые вопросы</a>
					<a href="">Адреса сервисных центров</a>
					<a href="">Список инструкций пользования</a>
				</div>

			</div>
		</div>
	</div>
	<div class="content clear-fix">
		
		<div class="title_container clear-fix">
			<h1 class="title">Часто задаваемые вопросы</h1>
			<div class="horizontal_decoration"><div class="dot"></div><hr class="horizontal_line"></div>
		</div>
		<div class="main">
	    	<div class="article clear-fix">
		    		<h2><a class="article_header" href="">В немецкой деревне открылся демонстративный стенд</a></h2>
		    		<p class="description">Рядом с офисом продаж поселка «Немецкая деревня» установлен демонстрационный стенд, на котором выставлены 
образцы материалов из которого строятся таунхаусы...</p>
					<p class="date">20/12/2014</p>
		    </div>
		    <div class="article clear-fix">
		    		<h2><a class="article_header" href="">В немецкой деревне </a></h2>
		    		<p class="description">Рядом с офисом продаж поселка «Немецкая деревня» установлен демонстрационный стенд, на котором выставлены 
образцы материалов из которого строятся таунхаусы...В поселке таунхаусов «Николино» усовершенствована пропускная система: вместо традиционного шлагбаума 
установлены современные и удобные автоматические болларды. Таунхаусы надежно защищены...</p>
					<p class="date">20/12/2014</p>
		    </div>
		    <div class="article clear-fix">
		    		<h2><a class="article_header" href="">В немецкой деревне открылся демонстративный стенд</a></h2>
		    		<p class="description">Рядом с офисом продаж поселка «Немецкая деревня» установлен демонстрационный стенд, на котором выставлены 
образцы материалов из которого строятся таунхаусы...</p>
					<p class="date">20/12/2014</p>
		    </div>
	    </div>
	</div>
	<div class="content clear-fix">

		<div class="title_container clear-fix">
	    	<h1 class="title">Нужна помощь?</h1>
			<div class="horizontal_decoration"><div class="dot"></div><hr class="horizontal_line"></div>
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

@section('scripts')
	<script src="{{	asset('assets/js/application.js') }}"></script>
@stop
@section('styles')
	<link rel="stylesheet" href="{{	asset('assets/css/ask.css') }}">
@stop
