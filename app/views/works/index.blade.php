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
				<h1><span class="ban_text">Наши работы</span></h1>
			</div>
		</div>
		<div class="ban_orange">
			<div class="col2">
				<div class="triangle"></div>
			</div>
		</div>
	</div>
	<div class="content clear-fix">
	   <p class="works_into">
	   	Каждая наша работа – это уникальное решение и проект для клиента. В ходе каждого проекта мы решаем новые задачи<br>
и используем новые технологии, которые значительно отличают нашу компанию
	   </p>
	   <ul class="works_menu clear-fix">
	   	<li class="works_menu_item {{ Request::is('works') ? 'works_menu_item_active' : '' }}"><a href="{{ URL::route('works.index') }}">Всё</a></li>
      @foreach ($categories as $category)
	   	    <li class="works_menu_item {{ Request::is('works/categories/'. $category->slug) ?	'works_menu_item_active' : 	'' }}">
              <a href="{{ URL::route('works.index.category', $category->slug) }}">{{ $category->name }}</a>
          </li>
      @endforeach
	   </ul>
	</div>
	<div class="content works clear-fix">
      <?php /*строки рассчитываются по весам: у маленького превью вес
	            1, у большого - 2. всего в строке может быть не больше 4*/ ?>
      <?php function sum_weight($carry, $item) { $carry += $item->weight(); return $carry; } ?>
      @for ($i = 0, $row_count = 1; $i < count($works); $i++, $row_count++)
          <?php $arr = $works->slice($i, 4) ?>
          @if ($arr->reduce('sum_weight') <= 4)
              @include('works.works_row', ["arr" => $arr, "row_count" => $row_count])
              <?php $i = $i + count($arr) ?>
              <?php continue; ?>
          @endif

          <?php $arr->pop() ?>
          @if ($arr->reduce('sum_weight') <= 4)
              @include('works.works_row', ["arr" => $arr, "row_count" => $row_count])
              <?php $i = $i + count($arr) ?>
              <?php continue; ?>
          @endif

          <?php $arr->pop() ?>
          @include('works.works_row', ["arr" => $arr, "row_count" => $row_count])
          <?php $i = $i + count($arr) ?>
      @endfor
		<button class="show_works_button button button_active">Показать больше объектов</button>
	</div>
	<div class="content clear-fix">
	    <div class="title_container clear-fix">
			<h1 class="title">Нет времени разбираться? Подскажем</h1>
			<div class="dot"></div><hr class="horizontal_line">
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


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/works.css') }}">
@stop

@section('scripts')
	<script src="{{	asset('assets/js/application.js') }}"></script>
@stop
