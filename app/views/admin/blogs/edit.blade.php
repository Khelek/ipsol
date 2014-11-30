@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop


@section('content')
    @include('components.admin_header', ['title' => $title, 'route' => URL::route("admin.blogs.index")])
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($post) }}
    {{-- TODO мб вынести куда-то --}}
    {{ Former::populateField('tags', implode(",", $post->tagNames())) }}
    {{ Former::open_for_files()->method('PUT')->route('admin.blogs.update', $post->id) }}

    @include('admin.blogs.form')

    {{ Former::close() }}
@stop
