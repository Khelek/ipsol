@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.works.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::open_for_files()->method('POST')->route('admin.works.store') }}

    @include('admin.works.form')

    {{ Former::close() }}
@stop
