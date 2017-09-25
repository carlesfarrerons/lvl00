@extends('master')

@section('titol')



@section('header')
	<h2>Projects Home</h2>
@stop

@section('content')
 <h3>This is my /resources/views/tasks/index.blade.php file!</h3>
 @if(!$tasks->count())
 	No projects
 @else
 	<ul>
 	@foreach($tasks as $task)
 		<li><a href="{{url('projects/'.$project->id.'/tasks/'.$task->id}}">Id task: {{$task->id}}</a></li>
 		<ul>
 			<li>Name:{{$task->name}}</li>
 			<li>Slug:{{$task->slug}}</li>
 			<li>Created at:{{$task->created_at}}</li>
 			<li>Description:{{$task->description}}</li>
 		</ul>
 	@endforeach
 	</ul>p
 @endif
 @stop


@section('footer')