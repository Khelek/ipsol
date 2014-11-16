@extends('admin.layouts.modal')

@section('title')
    {{{ $title }}} :: @parent
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($post) }}
    {{ Former::horizontal_open()->method('PUT')->route('admin.blogs.update', $post->id) }}

    @include('admin.blogs.form')

    {{ Former::close() }}
@stop
