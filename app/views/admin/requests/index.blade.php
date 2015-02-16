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

  {{ BootstrapForm::inline(['route' => ['admin.requests.email_store'], 'method' => 'POST']) }}
  <td> {{ BootstrapForm::text('email', $email, ['class' => 'input-small',
  'style' => 'min-width: 300px', 'placeholder' => 'Почта для
  уведомлений о заявках']) }} </td>
  <td> {{ BootstrapForm::submit('Сохранить', ['class' => 'btn btn-xs']) }} </td>
  {{ BootstrapForm::close() }}

  <table id="requests" class="table table-striped table-hover">
		  <thead>
			    <tr>
				      <th>id</th>
				      <th> Email </th>
				      <th> Имя </th>
				      <th> Телефон </th>
				      <th> Страница </th>
				      <th> Отдел </th>
				      <th> Вопрос </th>
				      <th> Дата создания</th>
			    </tr>
		  </thead>
		  <tbody>
          @foreach ($requests as $request)
              <tr>
                  <td> {{ $request->id }} </td>
                  <td> {{ $request->email }} </td>
                  <td> {{ $request->name }} </td>
                  <td> {{ $request->phone }} </td>
                  <td> {{ $request->page }} </td>
                  <td> {{ $request->departament }} </td>
                  <td> {{ $request->question }} </td>
                  <td> {{ $request->created_at }} </td>
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
			  oTable = $('#requests').DataTable( {
          "order": [[ 0, "desc" ]]
      } );
		});
	</script>
@stop
