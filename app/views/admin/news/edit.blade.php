@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop


@section('content')
    @include('components.admin_header', ['title' => $title, 'route' => URL::route("admin.news.index")])
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($news) }}
    {{ Former::open_for_files()->method('PUT')->route('admin.news.update', $news->id) }}

    @include('admin.news.form')

    {{ Former::close() }}
@stop
