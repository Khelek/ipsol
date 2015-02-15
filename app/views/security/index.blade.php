@extends('layouts.default')

@section('title')
    Советы по безопасности АйПи Решения
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
          @foreach ($tips as $tip)
	    	      <div class="article clear-fix">
	    		        <img src="{{ $tip->preview->url('medium') }}" alt="">
	    		        <div class="article_container">
		    		          <h2><a class="article_header" href="{{	URL::route('security.show', $tip->slug) }}">{{ $tip->title }}</a></h2>
		    		          <p class="description"> {{ Str::limit(strip_tags($tip->content), 110) }} </p>
					            <p class="date">{{ $tip->created_at() }}</p>
	    		        </div>
	    	      </div>
        @endforeach
	    </div>
	</div>

  <?php $paginator = $tips; ?>
  @include('components.pagination')
@stop

@section('styles')
	  <link rel="stylesheet" href="{{	asset('assets/css/blog.css') }}">
	  <link rel="stylesheet" href="{{	asset('assets/css/security.css') }}">
@stop
