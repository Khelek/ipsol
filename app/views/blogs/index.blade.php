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
				<h1><span class="ban_text">Блог</span></h1>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2">
				<div class="triangle"></div>
			</div>
		</div>			
	</div>
	<div class="content clear-fix">
	    <div class="main">
			<div class="line"></div>
	    	<div class="article clear-fix">
	    		<img src="{{ asset('images/article_img_small.jpg') }}" alt="" class="article_img">
	    		<div class="article_container">
		    		<h2><a class="article_header" href="">В «Немецкой деревне»</a></h2>
		    		<p class="description">Рядом с офисом продаж поселка «Немецкая деревня» установлен 
					демонстрационный стенд, на котором выставлены образцы материалов...</p>
					<p class="date">30/05/2014</p>
					Тэги: <a href="" class="tag">камера</a>
					<a href="" class="tag">надзор</a>
					<a href="" class="tag">наблюдение</a>
					<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus"></div>
	    		</div>
	    	</div>
	    	<div class="article clear-fix">
	    		<img src="../images/article_img_small.jpg" alt="" class="article_img">
	    		<div class="article_container">
		    		<a class="article_header" href="">В «Немецкой деревне»</a>
		    		<p class="description">Рядом с офисом продаж поселка «Немецкая деревня» установлен 
					демонстрационный стенд, на котором выставлены образцы материалов...</p>
					<p class="date">30/05/2014</p>
					Тэги: <a href="" class="tag">камера</a>
					<a href="" class="tag">надзор</a>
					<a href="" class="tag">наблюдение</a>
	    		</div>
	    	</div>
	    	<div class="article clear-fix">
	    		<img src="../images/article_img_small.jpg" alt="" class="article_img">
	    		<div class="article_container">
		    		<h2><a class="article_header" href="">В «Немецкой деревне»</a></h2>
		    		<p class="description">Рядом с офисом продаж поселка «Немецкая деревня» установлен 
					демонстрационный стенд, на котором выставлены образцы материалов...</p>
					<p class="date">30/05/2014</p>
					Тэги: <a href="" class="tag">камера</a>
					<a href="" class="tag">надзор</a>
					<a href="" class="tag">наблюдение</a>
	    		</div>
	    	</div>

	    </div>
	    <div class="sidebar">
	    	<div class="input_search_block">
				<input type="text" placeholder="Поиск"class="input input_search">
				<button class="input_search_button"></button>
			</div>
    		<p>Выбор рубрики:</p>
    		<a href="">dfg</a>
    		<a href="">lnsdfs</a>
    		<a href="">Наименование рубрики</a>
    		<a href="">Наименование рубрики</a>
    		<a href="">Наименование рубрики</a>
    		<p>Подписаться на статьи.<br>
			Я хочу быть в курсе<br>
			последних статей</p>
			<input class="input input_email" placeholder="Ваш e-mail">
			<button class="button button_active">Подписаться</button>
	    </div>
	</div>
	<div class="content">
		<div class="pagination">
		    <button class="button button_active">1</button>
		    <button class="button">2</button>
		    <button class="button">3</button>
		    <button class="button">4</button>
		    <span class="ellipsis">...</span>
		    <button class="button">10</button>
		</div>
  </div>
@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/blog.css') }}">
@stop
