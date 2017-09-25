@extends('master')
@section('titol')
Llibre
@stop
@section('header')
<h3>Dades de llibres</h3>
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li> 
  <li><a href="{{ url('llibres') }}">Llibres</a></li>  
</ol>

@stop
@section('content')

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3>Informació del Llibre</h3></div>
  <div class="panel-body">
    <h3>Titol: {{ $llibre->titol }}</h3>
  </div>

  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item">Data de publicació:{{ $llibre->publicacio }}</li>
    <li class="list-group-item">Temàtica: {{ $llibre->tematica }}</li>    
  </ul>
</div>




@stop
@section('content')

<div class="list-group">
  <a href="#" class="list-group-item-active">
    <h4 class="list-group-item-heading">Id Project</h4>
    <h3 class="list-group-item-text">{{$project->id}}</h3>
  </a>
   <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">Name</h4>
    <h3 class="list-group-item-text">{{$project->name}}</h3>
  </a>
   <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">Slug</h4>
    <h3 class="list-group-item-text">{{$project->slug}}</h3>
  </a>
   <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">Created
    </h4>
    <h3 class="list-group-item-text">{{$project->created_at}}</h3>
  </a>
<div class="list-group-item">
@if(!$project->tasks->count())
  <div class="alert alert-warning" role="alert">No tasks on your project</div>  
@else

    <h4 class="list-group-item-heading">Tasks</h4>
    <div class="list-group">
    @foreach
      <a class="list-group-item" href="{{route('projects.tasks.show', [$project->id, $task->id])}}">{{$task->name}}</a>

    @endforeach
    </div>
@endif
  </div>
</div>

@stop
@section('footer')
<h5>App Company</h5>
@stop

