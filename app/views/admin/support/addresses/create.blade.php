@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop


@section('content')
    @include('components.admin_header', ['title' => $title, 'route' => URL::route("admin.support.addresses.index")])
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::open_for_files()->method('POST')->route('admin.support.addresses.store') }}

    @include('admin.support.addresses.form')

    {{ Former::close() }}
@stop
