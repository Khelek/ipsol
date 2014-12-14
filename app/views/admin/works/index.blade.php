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
		 Работы

			<div class="pull-right">
				<a href="{{{ route('admin.works.create') }}}" class="btn
				btn-small btn-info iframe"><span class="glyphicon
				glyphicon-plus-sign"></span> Создать работу</a>
			</div>
		</h3>
	</div>


	<table id="works" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>{{{ Lang::get('admin/works/table.title') }}}</th>
				<th>{{{ Lang::get('admin/works/table.preview') }}}</th>
				<th>{{{ Lang::get('admin/works/table.created_at') }}}</th>
				<th>{{{ Lang::get('admin/works/table.actions') }}}</th>
			</tr>
		</thead>
		<tbody>
        @foreach ($works as $work)
            <tr>
                <td> {{{ $work->id }}} </td>
                <td> {{{ $work->title }}} </td>
                <td> {{ HTML::image($work->preview->url('small')) }} </td>
                <td> {{{ $work->created_at }}} </td>
                <td>
                    <a href="{{{ route('admin.works.edit', $work->id) }}}"
		                   class="btn btn-xs btn-info"> Редактировать </a>
                    <a href="{{{ route('admin.works.destroy', $work->id) }}}"
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
			oTable = $('#works').DataTable();
		});
	</script>
@stop
