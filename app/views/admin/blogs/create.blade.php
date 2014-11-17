@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.blogs.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::horizontal_open()->method('POST')->route('admin.blogs.store') }}

    @include('admin.blogs.form')

    {{ Former::close() }}
@stop
