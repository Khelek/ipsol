<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield('title')
  </title>

	<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">

  <!-- hui -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="keywords" content="@yield('keywords')" />
	<meta name="title" content="@yield('meta_title')" />
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	<meta name="description" content="@yield('description')" />

	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="@yield('title')">
	<meta name="DC.subject" content="@yield('description')">
	<meta name="DC.creator" content="@yield('author')">

  <!-- endhui -->
  @yield('meta-tags')

  <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

  <script type="text/javascript">
   VK.init({apiId: 4694437, onlyWidgets: true});
  </script>

	<!-- CSS -->
	<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
	@yield('styles')

</head>
<body class="zoomed_body">

<div id="modal_form"> 
      <span id="modal_close">X</span>
      	<div class="title_container clear-fix">
	    	<h1 class="title">Закажите обратный звонок</h1>
			<div class="dot"></div><hr class="horizontal_line">
		</div>
      	<p>Просто заполните заявку и мы свяжемся с Вами в течении дня и мгновенно <br>
проконсультируем!</p>
		<div class="ask_form">
			<div class="clear-fix">
				<input type="text" name="name" placeholder="Ваше имя" class="input">
				<input type="text" name="phone" placeholder="Ваш телефон" class="input">
				<input type="email" name="email" placeholder="Ваш e-mail" class="input">
				<select type="text" placeholder="Выбор отдела" class="input input_select"  onchange="">
					<option value="отдел">отдел по маркетингу</option>
				</select>
				<!--<input type="hidden" name="page" value="Поддержка - Частно
	    	задаваемые вопросы" class="input"> -->
			</div>
			<input type="submit" class="button button_active" value="Оставить заявку"/>
		</div>
</div>
<div id="overlay"></div>

	<div class="content clear-fix">
		<div class="header">

			<div class="info">
				Мы работаем с 9.00 до 22.00 <a class="phone" href="tel:+74955653204"><img src="{{ asset('assets/images/iphone.png') }}" alt="">+7 495 565 32 04</a>
			</div>
			<div>
				<a href="/" class="logo" style="text-decoration: none;">
					<img class="logo_img" src="{{	asset('assets/images/logo_2014.png') }}" alt="Логотип"/>
					<p>Установка цифровых систем<br>
					видеонаблюдения в Москве и МО</p>
				</a>
				<ul class="menu">
					<li class="item"><a href="/">Главная</a></li>
					<li class="item"><a href="">Компания</a></li>
					<li class="item"><a href="">Системы по типам задач</a></li>
					<li class="item"><a href="">По типам систем</a></li>
					<li class="item"><a href="/works">Наши работы</a></li>
					<li class="item"><a href="{{ URL::route('blogs.index') }}">Блог</a></li>
					<li class="item"><a href="">Контакты</a></li>
				</ul>

			</div>
		</div>
	</div>

	@yield('content')

	<div class="footer">
		<div class="content">
			<p class="seo">Под IP-камерой понимают цифровую видеокамеру, особенностью которой является передача видеопотока в цифровом формате по сети Ethernet и TokenRing, использующей протокол IP. Являясь сетевым устройством, каждая IP-камера в сети имеет свой IP-адрес. В отличие от аналоговых камер, при использовании IP-камер, после получения видеокадра с ПЗС (англ. CCD) или КМОП (англ. CMOS) матрицы камеры, изображение остаётся цифровым вплоть до отображения на мониторе. Как правило, перед передачей, полученное с матрицы изображение сжимается с помощью покадровых (MJPG) или потоковых (MPEG-4, H.264) методов видеосжатия. Существуют специализированные IP-камеры, осуществляющие передачу видео в несжатом виде. В качестве протокола транспортного уровня в IP-камерах могут использоваться протоколы: TCP, UDP и другие протоколы транспортного уровня модели OSI. Распространена возможность электропитания IP-камер через PoE. Благодаря тому, что в IP камерах нет необходимости передавать аналоговый сигнал в формате PAL или NTSC, в IP-камерах могут использоваться большие разрешения, включая мегапиксельные. Типичное разрешение для сетевых камер: 640x480 точек. Существуют камеры     с мегапиксельными разрешениями: 1280x1024, 1600x1200 и более высокими. Благодаря отказу от использования стандартов аналогового телевидения PAL и NTSC, IP-камеры могут передавать видеокадры               с требуемой частотой. Существуют IP-камеры с частотой передачи больше 60 кадров в секунду. IP-камеры можно отнести к категории веб-камер. Понятие веб-камера описывает функцию устройства и является более широким. Например к веб-камерам относятся камеры с интерфейсом USB и FireWire.</p>
		</div>
		<div class="footer_menu clear-fix">
			<div class="content">
				<div class="footer_col5">
					<h5><a href="">Компания</a></h5>
					<a href="">О компании</a>
					<a href="/news">Новости</a>
					<a href="/support">Поддержка</a>
					<a href="/security">Советы по безопасности</a>
				</div>
				<div class="footer_col5">
					<h5><a href="">Системы по типам задач</a></h5>
					<a href="">Для дома</a>
					<a href="">Квартира</a>
					<a href="">Частный дом</a>
					<a href="">Для бизнеса</a>
					<a href="">Офис</a>
					<a href="">Склад</a>
					<a href="">Магазины и рестораны</a>
					<a href="">Автостоянки (Автобазы)</a>
					<a href="">Обслуживание систем</a>
					<a href="">Госучреждениям</a>
				</div>
				<div class="footer_col5">
					<h5><a href="">По типам систем</a></h5>
					<a href="">налоговое видеонаблюдение</a>
					<a href="">IP видеонаблюдение</a>
					<a href="">Контроль доступа</a>
					<a href="">Учет рабочего времени</a>
					<a href="">Домофония</a>
					<a href="">СКУД и распознавание номеров</a>
					<a href="">Контроль периметра</a>
					<a href="">Турникеты</a>
					<a href="">Шлагбаумы</a>
				</div>
				<div class="footer_col5">
					<h5><a href="/works">Наши работы</a></h5>
          @foreach (\Category::all() as $category)
              <a href="{{ URL::route('works.index.category', $category->slug) }}">{{ $category->name }}</a>
          @endforeach
				</div>
				<div class="footer_col5">
					<h5><a href="/blogs">Блог</a></h5>
          @foreach (\Rubric::all() as $rubric)
    		    <a href="{{ URL::route('blogs.index.rubric',
	$rubric->slug) }}" >{{ $rubric->name }}</a>
          @endforeach
				</div>
			</div>
		</div>
		<div class="contact">
			<div class="content clear-fix">
				<div class="contact_text">
					<a class="phone" href="tel:+74955653204">+7 495 565 32 04</a>
					<a class="modal_window" href="">Заказать звонок</a>
					<script>
						document.write('<a class="email "href=" m' + 'ailto:sa' + 'le@ip-so' + 'l.ru ">sale@' + 'ip-sol.' + 'ru</a>');
					</script>
				</div>
				<div class="social clear-fix">
					<div class="icons ">
						<a href=""><span class="social_icon icon_insta"></span></a>
						<a href=""><span class="social_icon icon_youtube"></span></a>
						<a href=""><span class="social_icon icon_vk"></span></a>
						<a href=""><span class="social_icon icon_facebook"></span></a>
						<a href=""><span class="social_icon icon_twitter"></span></a>
					</div>
					<p>Подпишитесь на новости: </p>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="content">
				<p class="copyright_text">
					IPSolutions – Установка цифровых систем видеонаблюдения в Москве и МО
				</p>
				<p class="copyright_text">
					Разработано в студии NEXT<br>
					©2014. ООО «Ай Пи Решение». Все права защищены
				</p>
			</div>
		</div>
	</div>
	<script src="{{asset('bower/jquery/dist/jquery.min.js')}}"></script>
  @yield('scripts')
</body>
</html>
