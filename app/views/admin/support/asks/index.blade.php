@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ $title }}} :: @parent
@stop

@section('keywords')Addresses administration @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description')Addresses administration index @stop

{{-- Content --}}
@section('content')

  <div class="page-header">
		<h3>
        FAQ(Часто задаваемые вопросы)
			<div class="pull-right">
				<a href="{{{ route('admin.support.asks.create') }}}" class="btn
				btn-small btn-info iframe"><span class="glyphicon
				glyphicon-plus-sign"></span> Создать объект</a>
			</div>
		</h3>
	</div>


	<table id="addresses" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th> Заголовок </th>
				<th> Дата создание </th>
				<th>  </th>
			</tr>
		</thead>
		<tbody>
        @foreach ($asks as $ask)
            <tr>
                <td> {{{ $ask->id }}} </td>
                <td> {{{ $ask->name }}} </td>
                <td> {{{ $ask->created_at }}} </td>
                <td>
                    <a href="{{{ route('admin.support.asks.edit', $ask->id) }}}"
		                   class="btn btn-xs btn-info"> Редактировать </a>
                    <a href="{{{ route('admin.support.asks.destroy', $ask->id) }}}"
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
			oTable = $('#addresses').DataTable();
		});
	</script>
@stop
