@extends('layouts.default')

@section('title')
    Поддержка АйПи Решения
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
					<a href="{{ URL::route('support.ask') }}">Часто задаваемые вопросы</a>
					<a href="{{ URL::route('support.pod') }}">Адреса сервисных центров</a>
					<a href="{{ URL::route('support.sip') }}">Список инструкций пользования</a>
				</div>

			</div>
		</div>
	</div>
	<div class="content clear-fix">

		<div class="title_container clear-fix">
			<h1 class="title">Часто задаваемые вопросы</h1>
			<div class="dot"></div><hr class="horizontal_line">
		</div>
		<div class="main">
        @foreach ($asks as $ask)
	    	    <div class="article clear-fix">
		    		    <h2><a class="article_header" href="{{ URL::route('support.ask.show', $ask->slug) }}">{{{ $ask->title }}}</a></h2>
		    		    <p class="description"> {{ Str::limit(strip_tags($ask->content), 110) }} </p>
					      <p class="date">{{ $ask->created_at() }}</p>
		        </div>
        @endforeach
	    </div>
	</div>
  <?php $paginator = $asks; ?>
  @include('components.pagination')
	<div class="content clear-fix">

		<div class="title_container clear-fix">
	    	<h1 class="title">Нужна помощь?</h1>
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
				<input type="hidden" name="page" value="Поддержка - Частно
	    	задаваемые вопросы" class="input">
			</div>
			<input type="submit" class="button button_active" value="Оставить заявку"/>
      {{ Form::close() }}
		</div>
	</div>

@stop

@section('scripts')
	<script src="{{	asset('assets/js/application.js') }}"></script>
@stop
@section('styles')
	<link rel="stylesheet" href="{{	asset('assets/css/ask.css') }}">
@stop
