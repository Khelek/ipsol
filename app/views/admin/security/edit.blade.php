@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.security.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($tip) }}
    {{ Former::open_for_files()->method('PUT')->route('admin.security.update', $tip->id) }}

    @include('admin.security.form')

    {{ Former::close() }}
@stop
