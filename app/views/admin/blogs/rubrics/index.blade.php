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


  <table class="table table-striped table-hover">
		  <thead>
			    <tr>
				      <th>id</th>
				      <th> Название </th>
				      <th> ЧПУ </th>
				      <th></th>
				      <th></th>
			    </tr>
		  </thead>
		  <tbody>
          @foreach ($rubrics as $rubric)
              <tr>
                  {{ BootstrapForm::inline(['route' => ['admin.blogs.rubrics.update', $rubric->id], 'method' => 'PUT']) }}
                  <td> {{ $rubric->id }}
                      {{ Form::hidden('id', $rubric->id) }}
                  </td>
                  <td> {{ BootstrapForm::text('name', $rubric->name, ['class' => 'input-small', 'placeholder' => 'Название']) }} </td>
                  <td> {{ BootstrapForm::text('slug', $rubric->slug, ['class' => 'input-small', 'placeholder' => 'URL']) }} </td>
                  <td> {{ BootstrapForm::submit('Сохранить') }} </td>
                  <td> <a href="{{{ route('admin.blogs.rubrics.destroy', $rubric->id) }}}"
		                      data-method="delete"
                          data-confirm="Вы уверены?"> Удалить </a> </td>
                  {{ BootstrapForm::close() }}
              </tr>
          @endforeach
          <tr>
              {{ BootstrapForm::inline(['route' => ['admin.blogs.rubrics.store'], 'method' => 'POST']) }}
              <td> </td>
              <td> {{ BootstrapForm::text('name', "", ['class' => 'input-small', 'placeholder' => 'Название']) }} </td>
              <td> {{ BootstrapForm::text('slug', "", ['class' => 'input-small', 'placeholder' => 'ЧПУ']) }} </td>
              <td> {{ BootstrapForm::submit('Создрать рубрику',
		  ['class' => 'btn-primary']) }} </td>
              <td> </td>
              {{ BootstrapForm::close() }}
          </tr>
		  </tbody>
  </table>
@stop
