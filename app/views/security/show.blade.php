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
				<a href="">Назад к списку советов</a>
			</div>
		</div>
	</div>
	<div class="content clear-fix">
	    <div class="main">
			<div class="line"></div>
			<div class="article">
				<h1 class="title">Заголовок статьи</h1>
				<p>
				4 и 5 октября состоится праздник, посвященный поселку таунхаусов «Немецкая деревня»
				В первые выходные октября компания «Сабидом» устраивает для своих клиентов праздник на свежем воздухе. На мероприятие 
				приглашаются все, кто хочет сменить городскую квартиру на просторный и комфортабельный таунхаус в поселке «Немецкая деревня».

				Поселок таунхаусов «Немецкая деревня» расположен на Пятницком шоссе, в 12 км от МКАД. По своей концепции «Немецкая 
				деревня» задумана как уютный и удобный для проживания поселок, построенный в архитектурной стилистике европейских стран. 
				Собственное озеро, густой хвойный лес, прогулочные зоны, разнообразная инфраструктура и яркий внешний облик поселка не оставят 
				равнодушными даже самых взыскательных покупателей.
				</p>
				<p class="date">30/05/2014</p>
				<img src="{{	asset('assets/images/article_img_big.jpg') }}" alt="">


	    	</div>
	    	<a href="">Назад к списку советов</a>
		</div>
    	<div class="sidebar">
    		<h2 class="title">Ещё советы</h2>
    		<d+iv class="sidebar_article"><img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">В немецкой деревне открылось что-то там очень увлекательное и интересное</a>
				<p>В рамках Дня открытых дверей состоится презентация поселка</p>
				<p class="date">30/05/2014</p>
			</div>
    		<div class="sidebar_article"><img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">В немецкой деревне открылось что-то там</a>
				<p>В рамках Дня открытых дверей состоится презентация поселка</p>
				<p class="date">30/05/2014</p>
			</div>
		</div>
	</div>

@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/theme.css') }}">
	  <link rel="stylesheet" href="{{	asset('assets/css/security_open.css') }}">
@stop
 