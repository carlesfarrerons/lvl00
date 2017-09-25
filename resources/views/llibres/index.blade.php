@extends('master')
@section('titol')
Llibres
@stop
@section('header')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>   
</ol>
<div class="panel panel-info">
  <div class="panel-heading"><h3>Llistat de llibres</h3></div> 
</div>
@stop
@section('content')

<h3>Llistat de tots els llibres del sistema</h3>
@foreach($llibres as $llibre)
	<ul class="list-group">
	  <li class="list-group-item"><a href="{{ url('llibres/'.$llibre->id) }}">{{ $llibre->id }}</a></li>
	   <li class="list-group-item">{{ $llibre->titol }}</li>	  	  
	</ul>
	

@endforeach

@stop
@section('footer')
<h5>App Company</h5>
@stop

