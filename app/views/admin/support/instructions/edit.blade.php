@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop


@section('content')
    @include('components.admin_header', ['title' => $title, 'route' => URL::route("admin.support.instructions.index")])
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($instruction) }}
    {{ Former::open_for_files()->method('PUT')->route('admin.support.instructions.update', $instruction->id) }}

    @include('admin.support.instructions.form')

    {{ Former::close() }}
@stop
