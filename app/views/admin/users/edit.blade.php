@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop


@section('content')
    @include('components.admin_header', ['title' => $title, 'route' => URL::route("admin.users.index")])
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($user) }}
    {{ Former::open_for_files()->method('PUT')->route('admin.users.update', $user->id) }}

    @include('admin.users.form')

    {{ Former::close() }}
@stop
