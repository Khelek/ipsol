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
	<div class="support_container content clear-fix">
		<div class="links clear-fix">
			<a href="">Часто задаваемые вопросы</a>
			<a href="">Адреса сервисных центров</a>
			<a href="">Список инструкций пользователя</a>
		</div>
		<h1 class="title">Список инструкций пользователя</h1>
		<div class="clear-fix">
		    <div class="support_row clear-fix"></div>
		    <div class="support_block clear-fix">
				<h2>Веб камера 100500</h2>
				<a class="instruction_files">Инструкции по экспуатации</a>
		    	<a class="instruction_files">Техническая документация</a>
		    	<a class="instruction_files">Сертификат</a>
		    </div>
		    <div class="support_block clear-fix">
				<h2>Веб камера 100500</h2>
				<a class="instruction_files">Инструкции по экспуатации</a>
		    	<a class="instruction_files">Техническая документация</a>
		    	<a class="instruction_files">Сертификат</a>
		    </div>
		</div>
	    <button class="show_support_block button button_active">Показать всё</button>
	</div>
	<div class="content clear-fix">
	    <h1 class="title">Нужна помощь?</h1>
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
	<link rel="stylesheet" href="{{	asset('assets/css/pod.css') }}">
@stop
