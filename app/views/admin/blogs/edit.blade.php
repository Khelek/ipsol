@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.blogs.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($post) }}
    {{-- TODO мб вынести куда-то --}}
    {{ Former::populateField('tags', implode(",", $post->tagNames())) }}
    {{ Former::horizontal_open()->method('PUT')->route('admin.blogs.update', $post->id) }}

    @include('admin.blogs.form')

    {{ Former::close() }}
@stop
