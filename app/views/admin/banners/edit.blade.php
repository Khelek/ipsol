@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.banners.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($banner) }}
    {{ Former::open_for_files()->method('PUT')->route('admin.banners.update', $banner->id) }}

    @include('admin.banners.form')

    {{ Former::close() }}
@stop
