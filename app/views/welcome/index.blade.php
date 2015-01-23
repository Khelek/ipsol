@extends('layouts.default')

@section('title')
    {{{ $title }}}
@stop

@section('keywords')Posts administration @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description')Posts administration index @stop


@section('content')
	<div id="owl-demo" class="owl-carousel owl-theme">
		<div class="ban industrial_solutions_1 clear-fix">
			<div class="ban_content item">
				<h1 class="clear-fix"><span class="ban_text ">Промышленные решения</span></h1>
				<ul class="ban_list">
				    <li class="ban_list_item">Собственные разработки</li>
				    <li class="ban_list_item">Комплексная поставка</li>
				    <li class="ban_list_item">Выработка решений для проектных организаций</li>
				</ul>
				<div clear-fix>
					<button class="modal_window" class="button button_active">Заказать</button>
					<button class="button button_light">Узнать больше</button>
				</div>
			</div>
		</div>
		<div class="ban industrial_solutions_2 clear-fix">
			<div class="ban_content item">
				<h1 class="clear-fix"><span class="ban_text ">Промышленные2</span></h1>
				<ul class="ban_list">
				    <li class="ban_list_item">Собственные разработки</li>
				    <li class="ban_list_item">Комплексная поставка</li>
				    <li class="ban_list_item">Выработка решений для проектных организаций</li>
				</ul>
				<div clear-fix>
					<button class="button button_active">Заказать</button>
					<button class="button button_light">Узнать больше</button>
				</div>
			</div>
		</div>
		<div class="ban industrial_solutions_3 clear-fix">
			<div class="ban_content item">
				<h1 class="clear-fix"><span class="ban_text ">Промышленные решения3</span></h1>
				<ul class="ban_list">
				    <li class="ban_list_item">Собственные разработки</li>
				    <li class="ban_list_item">Комплексная поставка</li>
				    <li class="ban_list_item">Выработка решений для проектных организаций</li>
				</ul>
				<div clear-fix>
					<button class="button button_active">Заказать</button>
					<button class="button button_light">Узнать больше</button>
				</div>
			</div>
		</div>
	</div>
	<div class="content clear-fix">
			<div class="plus_block">
				<div class="plus_icon plus_icon_1"></div>
				<h3>Решение для дома</h3>
				<p class="plus_info">Видеонаблюдение для дома <br>это возможность контролировать дом
всеми возможными средствами!</p>
				<a href="" class="plus_more">Подробнее</a>
			</div>
			<div class="plus_block">
				<div class="plus_icon plus_icon_2"></div>
				<h3>Решение для бизнеса</h3>
				<p class="plus_info">Видеонаблюдение для бизнеса<br>решение по контролю за всеми моментами<br>
его работы! </p>
				<a href="" class="plus_more">Подробнее</a>
			</div>
			<div class="plus_block ">
				<div class="plus_icon plus_icon_3"></div>
				<h3>Госучереждениям</h3>
				<p class="plus_info">Видеонаблюдение для дома<br>
это возможность контролировать дом <br>
всеми возможными средствами! </p>
				<a href="" class="plus_more">Подробнее</a>
			</div>
	</div>
	<div class="content">
		<div class="title_container clear-fix">
			<h1 class="title">IP решения – это</h1>
			<div class="dot"></div><hr class="horizontal_line">
		</div>
		<div class="about_container clear-fix">
			<div class="about_block">
				<h3 class="about_block_number">1</h3>
				<p class="about_block_text">Монтаж за 1 день без шума
и пыли</p>
			</div>
			<div class="about_block">
				<h3 class="about_block_number">3 000</h3>
				<p class="about_block_text">Более 3 000 товаров в наличии
на складе</p>
			</div>
			<div class="about_block">
				<h3 class="about_block_number">3</h3>
				<p class="about_block_text">Гарантия 3 года на любой
объект</p>
			</div>
			<div class="about_block">
				<h3 class="about_block_number">365</h3>
				<p class="about_block_text">Круглосуточная поддержка
365 дней в году</p>
			</div>
		</div>
	</div>
	<div class="ban big_form clear-fix">
		<div class="ban_gray">
			<div class="col2">
				<div class="ban_image"></div>
				<div class="ban_form">
					<h1 class="clear-fix"><span class="ban_text">Нет времени разбираться?</span> <span class="ban_text">Подскажем!</span></h1>
					<p>Просто заполните заявку и мы свяжемся с вами в течении 59 секунд<br> и мгновенно проконсультируем!</p>
          {{ Former::open()->method('POST')->route('requests.store') }}
          {{ Form::token() }}
					<div class="clear-fix">
				      <input type="text" name="name" placeholder="Ваше имя" class="input">
				      <input type="text" name="phone" placeholder="Ваш телефон" class="input">
				      <input type="email" name="email" placeholder="Ваш e-mail" class="input">
				      <input type="hidden" name="page" value="Главная" class="input">
					</div>
			    <input type="submit" class="button button_active" value="Оставить заявку"/>
          {{ Form::close() }}
				</div>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2">
				<div class="triangle"></div>
			</div>
		</div>
	</div>
	<div class="content clear-fix">
		<div class="additional_information_block">
      @if ($advice)
			    <img src="{{ $advice->preview->url('medium') }}"/>
			    <h3>А знаете ли вы?</h3>
			    <p>{{ $advice->title }}</p>
			    <a href="{{	URL::route('security.show', $advice->slug) }}">Подробнее</a>
      @endif
		</div>
		<div class="additional_information_block">
      @if ($news)
			    <img src="{{ $news->preview->url('medium') }}"/>
			    <h3>Новости компании</h3>
			    <p>{{ $news->title }}</p>
			    <a href="{{	URL::route('news.show', $news->slug) }}">Подробнее</a>
      @endif
		</div>
		<div class="additional_information_block">
      @if ($work)
			    <img src="{{ $work->preview->url('medium') }}"/>
			    <h3>Последний объект</h3>
			    <p>{{ $work->title }}</p>
			    <a href="{{	URL::route('works.show', $work->slug) }}">Подробнее</a>
      @endif
		</div>
	</div>
	<div class="content clear-fix">
		<div class="title_container clear-fix">
			<h1 class="title">Мы представлены в 15 городах России</h1>
			<div class="dot"></div><hr class="horizontal_line">
		</div>
	</div>
	<div id="map">
		<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	</div> 
	<div class="ban big_form ban_comment clear-fix">
		<div class="ban_gray">
			<div class="col2">
				<div class="client_photo"></div>
				<div class="ban_form">
					<h1 class="clear-fix"><span class="ban_text">Что люди думают о нашей</span> <span class="ban_text">компании?</span></h1>
					<div class="clear-fix">
						<p><span class="font_weight">Владимир викторович / </span>Начальник по безопасности ООО «Спилберг»</p>
						<p class="quote"><span class="tab"></span>
								Выбор на компанию «Ай Пи Решение» пал не случайно. В нашем торговом центре они 
за месяц подключили более 5 бутиков. Мы видели, что компания действительно работает! 
Мы общались с бутиками и узнали, что компания федеральная и имеет большущий опыт 
в создании систем видеонаблюдения. В общем теперь весь торговый центр оснащен 
система видеонаблюдения с удаленным просмотром.
						</p>
					</div>
					<button class="button button_active"><</button> <button class="button button_active">></button>
				</div>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2">
				<div class="triangle"></div>
			</div>
		</div>
	</div>
@stop


@section('styles')
	<link rel="stylesheet" href="{{	asset('assets/css/welcome.css') }}">

@stop

@section('scripts')
	<script src="{{	asset('assets/js/application.js') }}"></script>
@stop
