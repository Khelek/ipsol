@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ $title }}} :: @parent
@stop

@section('keywords')Tips administration @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description')Tips administration index @stop

{{-- Content --}}
@section('content')

  <div class="page-header">
		<h3>
        Советы по безопасности
			<div class="pull-right">
				<a href="{{{ route('admin.security.create') }}}" class="btn
				btn-small btn-info iframe"><span class="glyphicon
				glyphicon-plus-sign"></span> Создать совет</a>
			</div>
		</h3>
	</div>


	<table id="tips" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th> Заголовок </th>
				<th> Дата создание </th>
				<th>  </th>
			</tr>
		</thead>
		<tbody>
        @foreach ($tips as $tip)
            <tr>
                <td> {{{ $tip->id }}} </td>
                <td> {{{ $tip->title }}} </td>
                <td> {{{ $tip->created_at }}} </td>
                <td>
                    <a href="{{{ route('admin.security.edit', $tip->id) }}}"
		                   class="btn btn-xs btn-info"> Редактировать </a>
                    <a href="{{{ route('admin.security.destroy', $tip->id) }}}"
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
			oTable = $('#tips').DataTable();
		});
	</script>
@stop
