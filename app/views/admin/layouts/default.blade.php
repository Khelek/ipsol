<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>
		@section('title')
			Administration
		@show
	</title>

	<meta name="keywords" content="@yield('keywords')" />
	<meta name="author" content="@yield('author')" />
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	<meta name="description" content="@yield('description')" />

	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="@yield('description')">
	<meta name="DC.creator" content="@yield('author')">

	<!--  Mobile Viewport Fix -->
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0, maximum-scale=1.0">
  <meta name="_token" content="{{ csrf_token() }}" />

	<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">

	<!-- CSS -->
    <link rel="stylesheet" href="{{asset('bower/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower/bootstrap-tokenfield/dist/css/bootstrap-tokenfield.min.css/')}}">
    <link rel="stylesheet" href="{{asset('bower/select2/select2.css')}}">
    <link rel="stylesheet" href="{{asset('bower/select2/select2-bootstrap.css')}}">
	  <link rel="stylesheet" href="{{	asset('assets/css/style_v2.css?123') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">

	<style>
	body {
		padding: 60px 0;
	}
	</style>

	@yield('styles')

</head>

<body style="padding: 0;">
	<!-- Container -->
    <!-- FIXME DANGER - на мобилках этого меню нет -->
    <header class="col-sm-2" style="border: 0; position: fixed;">
        <div id="logo" class="row">
            <div class="col-sm-12">
                <a> Админка </a>
            </div>
        </div>
    </header>
	<div id="main" class="container-fluid" style="margin-top: 0">
      <div class="row">
          <!-- sidebar -->
          <div id="sidebar-left" class="col-xs-2 col-sm-2"
	style="margin-top: 51px">
              <ul class="nav main-menu">
                  <li class="dropdown">
                      <a class="dropdown-toggle {{ (Request::is('admin/blogs*') ? 'active active-parent' : '') }}" href="#">
                          <i class="fa fa-table"></i>
                          <span class="hidden-xs">
                              Блоги
                          </span>
                      </a>

                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ URL::route('admin.blogs.index') }}"
                                 class="{{ (Request::is('admin/blogs*') && !(Request::is('admin/blogs/rubrics*')) ? 'active' : '') }}">
                                  <span class="hidden-xs">
                                      Посты
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ URL::route('admin.blogs.rubrics.index') }}" class="{{ (Request::is('admin/blogs/rubrics*') ? 'active' : '') }}">
                                  <span class="hidden-xs">
                                      Рубрики
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a class="dropdown-toggle {{ (Request::is('admin/works*') ? 'active active-parent' : '') }}" href="#">
                          <i class="fa fa-cloud-download"></i>
                          <span class="hidden-xs">
                              Наши работы
                          </span>
                      </a>

                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ URL::route('admin.works.index') }}"
                                 class="{{ (Request::is('admin/works*') && !(Request::is('admin/works/categories*')) ? 'active' : '') }}">
                                  <span class="hidden-xs">
                                      Работы
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ URL::route('admin.works.categories.index') }}" class="{{ (Request::is('admin/works/categories*') ? 'active' : '') }}">
                                  <span class="hidden-xs">
                                      Категории
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li>
                      <a href="{{ URL::route('admin.news.index') }}" class="{{ (Request::is('admin/news*') ? 'active' : '') }}">
                          <i class="fa fa-ticket"></i>
                          <span class="hidden-xs">
                              Новости
                          </span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ URL::route('admin.banners.index') }}" class="{{ (Request::is('admin/banners*') ? 'active' : '') }}">
                          <i class="fa fa-dollar"></i>
                          <span class="hidden-xs">
                              Баннеры
                          </span>
                      </a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle {{ (Request::is('admin/support*') ? 'active active-parent' : '') }}" href="#">
                          <i class="fa fa-at"></i>
                          Поддержка
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ URL::route('admin.support.asks.index') }}" class="{{ (Request::is('admin/support/asks*') ? 'active' : '') }}">
                                  <span class="hidden-xs">
                                      Вопросы
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ URL::route('admin.support.instructions.index') }}" class="{{ (Request::is('admin/support/instructions*') ? 'active' : '') }}">
                                  <span class="hidden-xs">
                                      Инструкции
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ URL::route('admin.support.addresses.index') }}" class="{{ (Request::is('admin/support/addresses*') ? 'active' : '') }}">
                                  <span class="hidden-xs">
                                      Адреса
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li>

                      <a href="{{ URL::route('admin.security.index') }}" class="{{ (Request::is('admin/security*') ? 'active' : '') }}">
                          <i class="fa fa-user"></i>
                          <span class="hidden-xs">
                              Советы по безопасности
                          </span>
                      </a>
                  </li>
              </ul>

          </div>
         <!-- end sidebar -->
          <div id="content-container" class="col-xs-12 col-sm-10">
              <div style="padding-left: 20px">
		              @yield('content')
              </div>
          </div>
      </div>
  </div>

	<footer class="clearfix">
			@yield('footer')
	</footer>

	</div>
	<!-- ./ container -->

	<!-- Javascripts -->
    <script src="{{asset('bower/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('bower/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('bower/select2/select2.min.js')}}"></script>
    <script src="{{asset('bower/select2/select2_locale_ru.js')}}"></script>

    <script src="{{asset('bower/bootstrap-tokenfield/dist/bootstrap-tokenfield.min.js')}}"></script>

    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/laravel.js')}}"></script>
    <script src="{{asset('assets/js/application.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
    <script src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

    @yield('scripts')

</body>

</html>
