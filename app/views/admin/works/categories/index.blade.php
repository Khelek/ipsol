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
			    Категории
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
        @foreach ($categories as $category)
            <tr>
                {{ BootstrapForm::inline(['route' => ['admin.works.categories.update', $category->id], 'method' => 'PUT']) }}
                <td> {{ $category->id }}
                     {{ Form::hidden('id', $category->id) }}
                </td>
                <td> {{ BootstrapForm::text('name', $category->name, ['class' => 'input-small', 'placeholder' => 'Название']) }} </td>
                <td> {{ BootstrapForm::text('slug', $category->slug, ['class' => 'input-small', 'placeholder' => 'URL']) }} </td>
                <td> {{ BootstrapForm::submit('Сохранить') }} </td>
                <td> <a href="{{{ route('admin.works.categories.destroy', $category->id) }}}"
		                   data-method="delete"
                       data-confirm="Are you sure?"> Удалить </a> </td>
                {{ BootstrapForm::close() }}
            </tr>
        @endforeach
            <tr>
                {{ BootstrapForm::inline(['route' => ['admin.works.categories.store'], 'method' => 'POST']) }}
                <td> </td>
                <td> {{ BootstrapForm::text('name', "", ['class' => 'input-small', 'placeholder' => 'Название']) }} </td>
                <td> {{ BootstrapForm::text('slug', "", ['class' => 'input-small', 'placeholder' => 'ЧПУ']) }} </td>
                <td> {{ BootstrapForm::submit('Создать категорию',
		['class' => 'btn-primary']) }} </td>
                <td> </td>
                {{ BootstrapForm::close() }}
            </tr>
		</tbody>
</table>

@stop
