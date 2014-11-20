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
				<div class="form">
					<a href="">Часто задаваемые вопросы</a>
					<a href="">Адреса сервисных центров</a>
					<a href="">Список инструкций пользования</a>
				</div>

			</div>
		</div>
	</div>
	<div class="content clear-fix">
	    
	</div>

@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/security_open.css') }}">
@stop
 