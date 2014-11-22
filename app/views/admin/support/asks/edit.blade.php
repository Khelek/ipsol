@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.support.asks.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($ask) }}
    {{ Former::open_for_files()->method('PUT')->route('admin.support.asks.update', $ask->id) }}

    @include('admin.support.asks.form')

    {{ Former::close() }}
@stop
