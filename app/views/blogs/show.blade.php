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
			<div class="col2 clear-fix">
				<div class="triangle"></div>
				<form action="" class="form">
					<div class="input_search_block">
						<input type="text" placeholder="Поиск"class="input input_search">
						<button class="input_search_button"></button>
					</div>
					<select type="text" placeholder="Выбор рубрики" class="input input_select">
						<option value="">выбрать пункт 1</option>
						<option value="">выбрать пункт 2</option>
						<option value="">выбрать пункт 3</option>
						<option value="">выбрать пункт 4</option>
						<option value="">выбрать пункт 5</option>
					</select>
				</form>
			</div>
		</div>			
	</div>
	<div class="content">
		<div class="article">
			<h1 class="title">Заголовок статьи</h1>
			<pre>
4 и 5 октября состоится праздник, посвященный поселку таунхаусов «Немецкая деревня»
В первые выходные октября компания «Сабидом» устраивает для своих клиентов праздник на свежем воздухе. На мероприятие 
приглашаются все, кто хочет сменить городскую квартиру на просторный и комфортабельный таунхаус в поселке «Немецкая деревня».

Поселок таунхаусов «Немецкая деревня» расположен на Пятницком шоссе, в 12 км от МКАД. По своей концепции «Немецкая 
деревня» задумана как уютный и удобный для проживания поселок, построенный в архитектурной стилистике европейских стран. 
Собственное озеро, густой хвойный лес, прогулочные зоны, разнообразная инфраструктура и яркий внешний облик поселка не оставят 
равнодушными даже самых взыскательных покупателей.
			</pre>
			<img src="../images/article_img_big.jpg" alt="">
			<pre>
В рамках Дня открытых дверей состоится презентация поселка: здесь можно будет узнать все подробности о архитектуре, ходе 
строительства, возможностях приобретения таунхаусов, а также об инфраструктуре «Немецкой деревни», богатство и оригинальность 
которой обещают стать настоящим сюрпризом.

По традиции праздник состоится на территории поселка «Белый город», где можно будет увидеть уже построенные таунхаусы, а потом 
вместе с менеджерами съездить в расположенную совсем рядом «Немецкую деревню», пройтись по поселку и посмотреть на процесс 
стройки.

Для гостей Дня открытых дверей будет организован настоящий праздник на природе с вкусной едой, активными играми, мастер-классами, 
конкурсами, подарками и душевной атмосферой. Маленьких посетителей ждет особенное веселье, ведь для них весь день будут работать 
мастер по игрушкам из воздушных шаров, профессиональные аниматоры, и, конечно, любимый аттракцион детей всех возрастов — огромный 
надувной батут.

Ждем всех 4 и 5 октября с 12 до 17 часов в поселке таунхаусов «Белый город»! Запишитесь на праздник в отделе продаж или call-центре.
			</pre>
			<p class="date">30/05/2014</p>
			<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus"></div>
		</div>
		<div class="another_article clear-fix">
			<h1 class="title">Другие статьи</h1>
			<div class="col4">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">В немецкой деревне открылось что-то там</a>
				<p>В рамках Дня открытых дверей состоится презентация поселка</p>
				<p class="date">30/05/2014</p>
			</div>
			<div class="col4">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">В немецкой деревне открылось что-то там</a>
				<p>В рамках Дня открытых дверей состоится презентация поселка: здесь можно будет узнать все подробности о архитектуре, ходе 
					строительства, возможностях приобретения таунхаусов</p>
				<p class="date">30/05/2014</p>
			</div>
			<div class="col4">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">В немецкой деревне открылось что-то там</a>
				<p>В рамках Дня открытых дверей состоится презентация поселка: здесь можно будет узнать все подробности о архитектуре, ходе 
					строительства, возможностях приобретения.</p>
				<p class="date">30/05/2014</p>
			</div>
			<div class="col4">
				<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
				<a href="">В немецкой деревне открылось что-то там</a>
				<p>В рамках Дня открытых дверей состоится презентация поселка</p>
				<p class="date">30/05/2014</p>
			</div>
		</div> 
		<div class="comments">
			<h1 class="title">Комментарии</h1>
		</div>
	</div>
@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/blog_open.css') }}">
@stop
