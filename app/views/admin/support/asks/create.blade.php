@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.support.asks.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::open_for_files()->method('POST')->route('admin.support.asks.store') }}

    @include('admin.support.asks.form')

    {{ Former::close() }}
@stop
