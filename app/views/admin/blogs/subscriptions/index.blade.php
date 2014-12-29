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
			    Подписки
		  </h3>
	</div>


  <a href="/admin/blogs/subscriptions/unload"> Скачать в CSV </a>
  <br>
  <br>
  <table id="subscriptions" class="table table-striped table-hover">
		  <thead>
			    <tr>
				      <th>id</th>
				      <th> Email </th>
				      <th> Дата создания</th>
			    </tr>
		  </thead>
		  <tbody>
          @foreach ($subscriptions as $subscription)
              <tr>
                  <td> {{ $subscription->id }} </td>
                  <td> {{ $subscription->email }} </td>
                  <td> {{ $subscription->created_at }} </td>
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
			oTable = $('#subscriptions').DataTable();
		});
	</script>
@stop
