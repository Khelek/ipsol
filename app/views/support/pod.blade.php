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
	    
	    <div class="title_container clear-fix">
			<h1 class="title">Адреса сервисных центров</h1>
			<div class="horizontal_decoration"><div class="dot"></div><hr class="horizontal_line"></div>
		</div>
	    <div class="clear-fix">
            @for ($i = 0; $i < count($addresses); $i++)
        			  @if ($i % 2 == 0)
		    	      		<div class="support_row clear-fix"></div>
		    	      @endif
		    	      <div class="support_block clear-fix {{ $i < 6 ? '' : 'support_block_hidden' }}">
					          <h2>{{ $addresses[$i]->name }}</h2>
					          <p>Адреса:</p>
					          <p class="address">
                        @foreach ($addresses[$i]->addresses as $addr)
                            {{ $addr }} <br>
                        @endforeach
					          </p>
		    	      </div>
            @endfor
	    </div>
	    <button class="show_support_block button button_active">Показать всё</button>
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
	<link rel="stylesheet" href="{{	asset('assets/css/pod.css') }}">
@stop
