@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.news.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::open_for_files()->method('POST')->route('admin.news.store') }}

    @include('admin.news.form')

    {{ Former::close() }}
@stop
