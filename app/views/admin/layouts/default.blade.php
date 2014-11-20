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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">

	<!-- CSS -->
    <link rel="stylesheet" href="{{asset('bower/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower/bootstrap-tokenfield/dist/css/bootstrap-tokenfield.min.css/')}}">
    <link rel="stylesheet" href="{{asset('bower/select2/select2.css')}}">
    <link rel="stylesheet" href="{{asset('bower/select2/select2-bootstrap.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">

	<style>
	body {
		padding: 60px 0;
	}
	</style>

	@yield('styles')

</head>

<body>
	<!-- Container -->
	<div class="container">
		<!-- Navbar -->
		<div class="navbar navbar-default navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
    			<div class="collapse navbar-collapse navbar-ex1-collapse">
    				<ul class="nav navbar-nav">
    					<li{{ (Request::is('admin/blogs*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/blogs') }}}"><span class="glyphicon glyphicon-list-alt"></span> Блог</a></li>
    					<li{{ (Request::is('admin/security*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/security')	}}}"><span class="glyphicon glyphicon-list-alt"></span> Советы по безопасности</a></li>
    				</ul>
    				<ul class="nav navbar-nav pull-right">
    					<li><a href="{{{ URL::to('/') }}}">View Homepage</a></li>
    					<li class="divider-vertical"></li>
    					<li class="dropdown">
    							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
    								<span class="glyphicon glyphicon-user"></span> {{-- Auth::user()->username --}}	<span class="caret"></span>
    							</a>
    							<ul class="dropdown-menu">
    								<li><a href="{{{ URL::to('user/settings') }}}"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
    								<li class="divider"></li>
    								<li><a href="{{{ URL::to('user/logout') }}}"><span class="glyphicon glyphicon-share"></span> Logout</a></li>
    							</ul>
    					</li>
    				</ul>
    			</div>
            </div>
		</div>
		<!-- ./ navbar -->

    @if (trim($__env->yieldContent('back-url')))
		    <div class="page-header">
            <div class="row">
                <div class="col-md-10">
			              <h3>
				                {{ $title }}
		       	        </h3>
                </div>
			          <div class="col-md-2">
                    <a href="@yield('back-url')" class="btn btn-default btn-small btn-inverse close_popup" style="margin-top: 20px"> 
                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                        Back</a>
                </div>
            </div>
		    </div>
    @endif


		<!-- Content -->
		@yield('content')
		<!-- ./ content -->

		<!-- Footer -->
		<footer class="clearfix">
			@yield('footer')
		</footer>
		<!-- ./ Footer -->

	</div>
	<!-- ./ container -->

	<!-- Javascripts -->
    <script src="{{asset('bower/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('bower/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('bower/select2/select2.min.js')}}"></script>
    <script src="{{asset('bower/select2/select2_locale_ru.js')}}"></script>

    <script src="{{asset('bower/bootstrap-tokenfield/dist/bootstrap-tokenfield.min.js')}}"></script>

    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/application.js')}}"></script>
    <script src="{{asset('assets/js/laravel.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
    <script src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

    @yield('scripts')

</body>

</html>
