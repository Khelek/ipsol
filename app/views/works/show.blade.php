@extends('layouts.default')

@section('title')
    {{{  $work->$title }}}
@stop

@section('keywords') $work->meta_keywords @stop
@section('author') @stop
@section('description') $work->meta_description @stop


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
    	<a href="{{	URL::route('works.index') }}">Назад к списку советов</a>
		</div>
	</div>
</div>
<div class="content clear-fix">
	<div class="title_container clear-fix">
				<h1 class="title">{{ $work->title }}</h1>
				<div class="dot"></div><hr class="horizontal_line">
	</div>
	<div class="works_images clear-fix">
		<img class="work_img_big" src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
		<img class="work_img_small" src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
		<img class="work_img_small" src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
	</div>
	<h2>Описание задачи</h2>
	<p>Здравствуйте многоуважаемое общество! В группе уже 42000, и я надеюсь, что есть люди, или люди которые знают людей, которые занимаются мореплавством, морские бродяги может, на маленьком судне, которые бороздят океаны и моря в различных целях, или собираются отплыть. Хотел бы найти таких людей, и как-то втерется в команду :)
Я правда не тямлю в морских делах, но мог бы драить палубу там, посуду мыть, подсобные дела, а там может и научился бы чего) И зарплата не нужна, ну еда только...
Может вы мне подскажете?</p>
	<div class="title_container clear-fix">
				<h1 class="title">Клиент</h1>
				<div class="dot"></div><hr class="horizontal_line">
	</div>
	<div class="about_client clear-fix">
		<img src="{{	asset('assets/images/article_img_small.jpg') }}" alt="">
		<div class="about_client_text">
			<h2 class="client_name">Санта клаус</h2>
			<p class="post_work">Генеральный директор</p>
			<p class="client_comment">Нам очень нужно было побольше снега, нам его оперативно доставили, мы очень довольны.<br>
			Хотя можно было бы и прислать немного льда...</p>
		</div>
	</div>
	<div class="title_container clear-fix">
				<h1 class="title">Реализация</h1>
				<div class="dot"></div><hr class="horizontal_line">
	</div>
	<p>Какой-то текст</p>
</div>

@stop


@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/works_open.css') }}">
@stop
