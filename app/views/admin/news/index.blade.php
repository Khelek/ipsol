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
			    Рубрики
		  </h3>
	</div>

  @include('admin.news.rubrics')

  <div class="page-header">
		<h3>
		 Посты

			<div class="pull-right">
				<a href="{{{ route('admin.news.create') }}}" class="btn
				btn-small btn-info iframe"><span class="glyphicon
				glyphicon-plus-sign"></span> Создать пост</a>
			</div>
		</h3>
	</div>


	<table id="blogs" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>{{{ Lang::get('admin/blogs/table.title') }}}</th>
				<th>{{{ Lang::get('admin/blogs/table.comments') }}}</th>
				<th>{{{ Lang::get('admin/blogs/table.created_at') }}}</th>
				<th>{{{ Lang::get('table.actions') }}}</th>
			</tr>
		</thead>
		<tbody>
        @foreach ($news as $one_news)
            <tr>
                <td> {{{ $one_news->id }}} </td>
                <td> {{{ $one_news->title }}} </td>
                <td>  </td>
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
			oTable = $('#blogs').DataTable();
		});
	</script>
@stop
