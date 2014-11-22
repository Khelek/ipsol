@extends('admin.layouts.default')

@section('title')
    {{{ $title }}} :: @parent
@stop

@section('back-url')
    {{ URL::route("admin.works.index") }}
@stop


@section('content')
    {{ Former::framework('TwitterBootstrap3') }}
    {{ Former::populate($work) }}
    {{-- TODO мб вынести куда-то --}}
    {{ Former::populateField('tags', implode(",", $work->tagNames())) }}
    {{ Former::open_for_files()->method('PUT')->route('admin.works.update', $work->id) }}

    @include('admin.works.form')

    {{ Former::close() }}
@stop
