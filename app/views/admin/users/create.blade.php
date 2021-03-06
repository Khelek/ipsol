@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop


@section('content')
    @include('components.admin_header', ['title' => $title, 'route' => URL::route("admin.users.index")])
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::open_for_files()->method('POST')->route('admin.users.store') }}

    @include('admin.users.form')

    {{ Former::close() }}
@stop

