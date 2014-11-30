@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ $title }}} :: @parent
@stop

@section('keywords')Posts administration @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description')Posts administration index @stop

{{-- Content --}}
@section('content')

	<div class="page-header">
		<h3>
			{{{ $title }}}
		</h3>
	</div>

  <div class="page-header">
		<h3>
		 Новости

			<div class="pull-right">
				<a href="{{{ route('admin.news.create') }}}" class="btn
				btn-small btn-info iframe"><span class="glyphicon
				glyphicon-plus-sign"></span> Создать новость </a>
			</div>
		</h3>
	</div>


	<table id="news" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>{{{ Lang::get('admin/news/table.title') }}}</th>
				<th>{{{ Lang::get('admin/news/table.preview') }}}</th>
				<th>{{{ Lang::get('admin/news/table.created_at') }}}</th>
				<th>{{{ Lang::get('admin/news/table.actions') }}}</th>
			</tr>
		</thead>
		<tbody>
        @foreach ($news as $one_news)
            <tr>
                <td> {{{ $one_news->id }}} </td>
                <td> {{ HTML::linkRoute('news.show', $one_news->title, $one_news->slug) }} </td>
                <td> {{ HTML::image($one_news->preview->url('small')) }} </td>
                <td> {{{ $one_news->created_at }}} </td>
                <td>
                    <a href="{{{ route('admin.news.edit', $one_news->id) }}}"
		                   class="btn btn-xs btn-info"> Редактировать </a>
                    <a href="{{{ route('admin.news.destroy', $one_news->id) }}}"
		                   class="btn btn-xs btn-danger"
		                   data-method="delete"
                       data-confirm="Are you sure?"> Удалить </a>
                </td>

            </tr>
        @endforeach
		</tbody>
	</table>
@stop

{{-- Scripts --}}
@section('scripts')
	<script type="text/javascript">
		var oTable;
		$(document).ready(function() {
			oTable = $('#news').DataTable();
		});
	</script>
@stop
