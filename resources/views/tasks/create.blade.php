@extends('master')

@section('titol')



@section('content')

<h3>This is my /resources/views/tasks/create.blade.php file!</h3>

{!!Form::open(array('url'=>'projects/' .$projectid.'/tasks'))!!}


	<div class="form-group">
		{!! Form::label('project_id', 'Project Id:' .$projectid) !!}
		{!! Form::text('project_id',$projectid->id, ['class'=>'form-control', 'readonly' => 'true']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('slug', 'Slug:') !!}
		{!! Form::text('slug',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('completed', 'Completed:') !!}
		{!! Form::text('completed',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('description', 'Description:') !!}
		{!! Form::text('description',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Add',['class'=>'btn btn-success']) !!}
	</div>

{!!Form::close()!!}
@stop


@section('footer')
<h3>Hi Drone a</h3>