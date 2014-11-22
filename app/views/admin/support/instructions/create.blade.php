@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.support.instructions.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::open_for_files()->method('POST')->route('admin.support.instructions.store') }}

    @include('admin.support.instructions.form')

    {{ Former::close() }}
@stop
