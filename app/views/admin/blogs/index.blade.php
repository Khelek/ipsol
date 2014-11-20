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

  @include('admin.blogs.rubrics')

  <div class="page-header">
		<h3>
		 Посты

			<div class="pull-right">
				<a href="{{{ route('admin.blogs.create') }}}" class="btn
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
        @foreach ($posts as $post)
            <tr>
                <td> {{{ $post->id }}} </td>
                <td> {{{ $post->title }}} </td>
                <td> comm </td>
                <td> {{{ $post->created_at }}} </td>
                <td>
                    <a href="{{{ route('admin.blogs.edit', $post->id) }}}"
		                   class="btn btn-xs btn-info"> Редактировать </a>
                    <a href="{{{ route('admin.blogs.destroy', $post->id) }}}"
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
