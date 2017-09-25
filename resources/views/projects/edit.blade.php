@extends('master')

@section('titol')
Projects Edit
@stop
@section('header')
<h2>Projects Edit</h2>
@stop

@section('content')


{!!Form::model($project, ['method'=>'PATCH', 'route'=>['projects.update', $project->id]])!!}
	<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null,['class'=>'form.control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('slug', 'Slug:') !!}
		{!! Form::text('slug', null,['class'=>'form.control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Add', ['class'=>'btn btn-success']) !!}
	</div>
{!!Form::close()!!}
@stop
@section('footer')
<h3>App development Alvaro</h3>
@stop