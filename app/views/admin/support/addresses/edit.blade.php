@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.support.addresses.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($address) }}
    {{ Former::open_for_files()->method('PUT')->route('admin.support.addresses.update', $address->id) }}

    @include('admin.support.addresses.form')

    {{ Former::close() }}
@stop
