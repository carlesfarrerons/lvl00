@extends('master')

@section('titol')



@section('header')
SHOW PROJECTS
<div class="create">
 <button type="button" class="bbtn btn-default btn-lg"> <a href="{{url('projects/'.$project->id.'/edit')}}">Editar Projecte</a>
 </button>
  <button type="button" class="btn btn-default btn-lg"> <a href="{{url('projects/'.$project->id.'/tasks/create')}}">Crear Tasca</a>
 </button>
  <button type="button" class="btn btn-default btn-lg"> <a href="{{url('projects/'.$project->id.'/delete')}}">Eliminar Projecte</a>
 </button>
</div>
@stop

@section('content')

<div class="list-group">
  <a href="#" class="list-group-item-active">
    <h4 class="list-group-item-heading">Id Project</h4>
    <h3 class="list-group-item-text">{{$project->id}}</h3>
  </a>
   <a href="#" c+lass="list-group-item">
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
  <div class="alert alert-warning" role="alert">No hi a tasques al teu projecte
  </div>  
@else

    <h4 class="list-group-item-heading">Tasks</h4>
    <div class="list-group">
    @foreach($project->tasks as $task)
      <a class="list-group-item" href="{{route('projects.tasks.show', [$project->id, $task->id])}}">{{$task->name}}</a>

    @endforeach
    </div>
@endif
  </div>

@stop

@section('footer')