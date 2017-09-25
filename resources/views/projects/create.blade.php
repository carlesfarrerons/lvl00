@extends('master')

@section('titol')



@section('header')
create proj
@stop

@section('content')

{!!Form::open(array('url'=>'projects'))!!}
	<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('slug', 'Slug:') !!}
		{!! Form::text('slug',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Add',['class'=>'btn btn-success']) !!}
	</div>

{!!Form::close()!!}
@stop

@section('footer')
<h3>Hi Drone</h3>
@stop