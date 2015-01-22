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
        Пользователи
			<div class="pull-right">
				<a href="{{{ route('admin.users.create') }}}" class="btn
				btn-small btn-info iframe"><span class="glyphicon
				glyphicon-plus-sign"></span> Создать пользователя</a>
			</div>
		</h3>
	</div>


	<table id="users" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th> Email </th>
				<th> Дата создание </th>
				<th>  </th>
			</tr>
		</thead>
		<tbody>
        @foreach ($users as $user)
            <tr>
                <td> {{{ $user->id }}} </td>
                <td> {{{ $user->email }}} </td>
                <td> {{{ $user->created_at }}} </td>
                <td>
                    <a href="{{{ route('admin.users.edit', $user->id) }}}"
		                   class="btn btn-xs btn-info"> Редактировать </a>
                    <a href="{{{ route('admin.users.destroy', $user->id) }}}"
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
			oTable = $('#users').DataTable();
		});
	</script>
@stop
