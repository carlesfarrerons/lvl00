@extends('master')

@section('titol')
Tasks Edit
@stop


@section('header')
<h2>Tasks Edit</h2>
@stop

@section('content')
<H3>This is my /resource/views/tasks/edit.blade.php file!</H3>

{!!Form::model($task, ['method'=>'PATCH', 'route'=>['projects.tasks.update', $projectid, $task->id]])!!}
	
	<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null,['class'=>'form.control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('slug', 'Slug:') !!}
		{!! Form::text('slug', null,['class'=>'form.control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('completed', 'Completed:') !!}
		{!! Form::text('completed', null,['class'=>'form.control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('description', 'Description:') !!}
		{!! Form::text('description', null,['class'=>'form.control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Add', ['class'=>'btn btn-success']) !!}
	</div>
{!!Form::close()!!}
@stop
@section('footer')
<h3>App development Alvaro</h3>
@stop

@section('footer')