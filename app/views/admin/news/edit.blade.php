@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.news.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($news) }}
    {{-- TODO мб вынести куда-то --}}
    {{ Former::populateField('tags', implode(",", $news->tagNames())) }}
    {{ Former::open_for_files()->method('PUT')->route('admin.news.update', $news->id) }}

    @include('admin.news.form')

    {{ Former::close() }}
@stop
