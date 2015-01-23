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
				<h1><span class="ban_text">Контакты</span></h1>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2 clear-fix">
				<div class="triangle"></div>
				<div class="ban_form">
					<div class="input_search_block">
              <!-- какой ещё поиск???
						<input type="text" name="search" placeholder="Поиск" class="input input_search">
				        <button class="input_search_button" type="submit"></button>
                -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content clear-fix">

		<div class="col2">
			<img class="map" src="{{ asset('assets/images/map.jpg') }}"  alt="">
			<img id="office" src="{{ asset('assets/images/house.jpg') }}"  alt="">
		</div>
		<div class="col2 persons">
			<p class="contact_info">
				Центральный офис: <br>
				125047, г. Москва, ул. Чаянова, 12 <br>

				<br>
				<strong><a href="">+7 (495) 565-32-04</a> <br>
				e-mail: sales@ip-sol.ru <br>
				skype: salesip <br>
				<br>
				<a href="#ask" id="ask_online">Задать вопрос онлайн </a>
        <br>
		    <div id="ask_online_form">
            {{ Former::open()->method('POST')->route('requests.store') }}
            {{ Form::token() }}
			      <div class="clear-fix">
				        <input type="text" name="name" placeholder="Ваше имя" class="input">
                <br>
				        <input type="text" name="phone" placeholder="Ваш телефон" class="input">
                <br>
				        <input type="email" name="email" placeholder="Ваш e-mail" class="input">
                <br>
				        <input type="question" name="question" placeholder="Ваш вопрос" class="input">
                <br>
				        <input type="hidden" name="page" value="О компании(Контакты)" class="input">
			      </div>
			      <input type="submit" class="button button_active" value="Оставить вопрос"/>
            {{ Form::close() }}
		    </div>
        <br>
        <br>
        <br>
				</strong>
				Мы работаем: Пн-Пт с 9:00 до 22:00

			</p>
			<div class="person clear-fix">
				<img class="avatar" src="{{ asset('assets/images/avatar-1.jpg') }}" alt="">
				<p>Максим Голубев <br>
					Генеральный директор <br>
					<strong>+7 (901) 001 01 01</strong>
				</p>
			</div>
			<div class="person clear-fix">
				<img class="avatar" src="{{ asset('assets/images/avatar-2.jpg') }}" alt="">
				<p>Телефоны сотрудников  <br>
					Гаврилова Анна <br>
					Руководитель отдела продаж <br>
					<strong>+7 (495) 565 32 04 доб. 005</strong>
				</p>
			</div>
			<div class="person clear-fix">
				<img class="avatar" src="{{ asset('assets/images/avatar-3.jpg') }}" alt="">
				<p>Максим Голубев <br>
				Генеральный директор <br>
				<strong>+7 (901) 001 01 01</strong></p>
			</div>
			<p>HR отдел: <a href="">hr@ip-sol.ru</a> <br> <br>
		</div>
	</div>
	<div class="content clear-fix">

		<div class="title_container clear-fix">
	    	<h1 class="title">Закажите обратный звонок</h1>
			<div class="dot"></div><hr class="horizontal_line">
		</div>
	    <p>Просто заполните заявку и мы свяжемся с Вами в течении дня и мгновенно <br>
проконсультируем!</p>
		<div class="ask_form">
        {{ Former::open()->method('POST')->route('requests.store') }}
        {{ Form::token() }}
			  <div class="clear-fix">
				    <input type="text" name="name" placeholder="Ваше имя" class="input">
				    <input type="text" name="phone" placeholder="Ваш телефон" class="input">
				    <input type="email" name="email" placeholder="Ваш e-mail" class="input">
				    <input type="hidden" name="page" value="О компании(Контакты)" class="input">
				<select type="text" placeholder="Выбор отдела" class="input input_select"  onchange="">
					<option value="отдел">отдел по маркетингу</option>
				</select>
			  </div>
			  <input type="submit" class="button button_active" value="Оставить заявку"/>
        {{ Form::close() }}
		</div>
	</div>
@stop


@section('styles')
	<link rel="stylesheet" href="{{	asset('assets/css/contact.css') }}">

@stop

@section('scripts')
	<script src="{{	asset('assets/js/application.js') }}"></script>
@stop
