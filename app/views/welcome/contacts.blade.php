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
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content clear-fix">
			<img class="map" src="{{ asset('assets/images/map.jpg') }}"  alt="">
			<img id="office" src="{{ asset('assets/images/house.jpg') }}"  alt="">
	</div>
	<div class="content clear-fix">
		<div class="col2 contact_info">
			<h4>Наши контакты</h4>
			<p class="contact-item contact-geo">Центральный офис: 125047, г. Москва, ул. Чаянова, 12 <br>
				Мы работаем: Пн-Пт с 9:00 до 22:00 <br>
			</p>
			<p class="contact-item contact-phone" >
				<strong>7 (495) 565-32-04 <br> </strong>
			</p>
			<p class="contact-item contact-email" >
				<strong>e-mail: <a href="">sales@ip-sol.ru</a><br> </strong>
			</p>
			<p class="contact-item contact-skype" >
				<strong>skype: salesip <br></strong>
			</p>
		
		    <!--<h4>Как попасть к нам в офис:</h4>
		    <div class="contact-road clear-fix">
				<p class="contact-item contact-bus" ><a>Проезд на общественном транспорте</a><span class="plus"></span> <br></p>
				<p class="contact-item contact-car" ><a>Проезд на автомобиле</a><span class="plus"></span></p>
			</div> -->
			<h4>Обратная связь</h4>
			<a href="#ask" id="ask_online">Задать вопрос онлайн </a>
    		<br>
		    <div id="ask_online_form">
            {{ Former::open()->method('POST')->route('requests.store') }}
            {{ Form::token() }}

			      <div class="clear-fix">
				        <input type="text" name="name" placeholder="Ваше имя" class="input" required="true">
                <br>
				        <input type="text" name="phone" placeholder="Ваш телефон" class="input" required="true">
                <br>
				        <input type="email" name="email" placeholder="Ваш e-mail" class="input" required="true">
                <br>
				        <input type="question" name="question" placeholder="Ваш вопрос" class="input" required="true">
                <br>
				        <input type="hidden" name="page" value="О компании(Контакты)" class="input">
			      </div>
			      <input type="submit" class="button button_active" value="Оставить вопрос"/>
            {{ Form::close() }}
		    </div>
		    <h4>Дружите с нами в социальных сетях</h4>
		    <div class="social clear-fix">
		    	<a href=""><span class="social_icon icon_insta"></span></a>
		    	<a href=""><span class="social_icon icon_youtube"></span></a>
		    	<a href=""><span class="social_icon icon_vk"></span></a>
		    	<a href=""><span class="social_icon icon_facebook"></span></a>
		    	<a href=""><span class="social_icon icon_twitter "></span></a>
		    </div>
		</div>
		<div class="col2 persons">
			<h4>Познакомьтесь с нами</h4>
			<div class="person clear-fix">
				<img class="avatar" src="{{ asset('assets/images/avatar-1.jpg') }}" alt="">
				<div>
					<h5>Максим Голубев</h5>
					Генеральный директор
					<p class="contact-item contact-phone" > +7 (901) 001 01 01</p>
					<p class="contact-item contact-email" >golube@ip-sol.ru</p>
				</div>
			</div>
			<div class="person clear-fix">
				<img class="avatar" src="{{ asset('assets/images/avatar-2.jpg') }}" alt="">
				<div>
					<h5>Анна Гаврилова</h5>
					Директор по продажам <br>
					«Обращайтесь ко мне если Вам необходимо получить <br>
					консультацию, подобрать систему, узнать стоимость <br>
					или, например пообщаться на тему сотрудничества» <br>

					<p class="contact-item contact-phone" >+7 (495) 565-3204, доб. 100</p>
					<p class="contact-item contact-email" >gavrilova@ip-sol.ru</p>
				</div>
			</div>
			<div class="person clear-fix">
				<img class="avatar" src="{{ asset('assets/images/avatar-3.jpg') }}" alt="">
				<div>
					<h5>Иван Пичуев</h5>
					Главный инженер <br>
					«Я решаю сложные технические задачи, рассчитываю <br>
					сметы и проектирую системы безопасности»
					<p class="contact-item contact-phone" >+7 (495) 565-3204</p>
					<p class="contact-item contact-email" >pichuev@ip-sol.ru</p>
				</div>
			</div>
			<div class="person clear-fix">
				<img class="avatar" src="{{ asset('assets/images/avatar-4.jpg') }}" alt="">
				<div>
					<h5>Александр Манкевич</h5>
					Инженер проектов и технической поддержки <br>
					«Задавайте мне вопросы по технической поддержке <br> 
					Вашей системы видеонаблюдения, СКУД <br> 
					и компьютерным сетям» 
					<p class="contact-item contact-phone" >+7 (495) 565-3204, доб. 101</p>
					<p class="contact-item contact-email" >mankevich@ip-sol.ru</p>
				</div>
			</div>
			<div class="person clear-fix">
				<img class="avatar" src="{{ asset('assets/images/avatar-1.jpg') }}" alt="">
				<div>
					<h5>Алена Павлова</h5>
					HR менеджер<br>
					«Если Вы ищете работу в области систем безопасности, <br> 
					обязательно пришлите мне Ваше резюме!» <br>
					<p class="contact-item contact-phone" >+7 (495) 565-3204, доб. 102</p>
					<p class="contact-item contact-email" >hr@ip-sol.ru</p>
				</div>
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
				    <input type="text" name="name" placeholder="Ваше имя" class="input" required="true">
				    <input type="text" name="phone" placeholder="Ваш телефон" class="input" required="true">
				    <input type="email" name="email" placeholder="Ваш e-mail" class="input" required="true">
				    <input type="hidden" name="page" value="О компании(Контакты)" class="input">
				    <select type="text" name="departament" placeholder="Выбор отдела" class="input input_select"  onchange="">
					    <option value="HR-отдел">HR-отдел</option>
					    <option value="Отдел продаж">Отдел продаж</option>
					    <option value="Технический отдел">Технический отдел</option>
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
