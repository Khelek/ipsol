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
			</div>
		</div>
	</div>
	<div class="content clear-fix">
	    <div class="main">
	    	<div class="article clear-fix">
	    		<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
	    		<div class="article_container">
		    		<h2><a class="article_header" href="">В Французуком городе</a></h2>
		    		<p class="description"> Много много текста всягоко разного, увлекательного
		    		 и интересного, может быть даже полезного </p>
					<p class="date">30/09/2014</p>
					    Тэги:
                    <a href="" class="tag">красивый тег</a>
					<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus"></div>
	    		</div>
	    	</div>
	    </div>
	</div>
@stop
	
@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/blog.css') }}">
	  <link rel="stylesheet" href="{{	asset('assets/css/theme.css') }}">
	  <link rel="stylesheet" href="{{	asset('assets/css/security.css') }}">
@stop
