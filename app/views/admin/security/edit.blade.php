@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop


@section('content')
    @include('components.admin_header', ['title' => $title, 'route' => URL::route("admin.security.index")])
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($tip) }}
    {{ Former::open_for_files()->method('PUT')->route('admin.security.update', $tip->id) }}

    @include('admin.security.form')

    {{ Former::close() }}
@stop
