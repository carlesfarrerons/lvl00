@extends('master')

@section('titol')
Project Home
@stop

@section('header')
	<h2>PROJECTES</h2>
@stop

@section('content')

<!-- @if(!$projects->count())
 	No projects
 @else
 -->
 <div class="create">
 <button type="button" class="btn btn-default btn-lg"> <a href="/lvl00/public/projects/create">Create Project</a></button>
 </div>
 	<ul>
 	@foreach($projects as $project)
 		<li><a href="{{route('projects.show' , $project->id)}}">Id project: {{$project->id}}</a></li>
 		<ul>
 			<li>Name:{{$project->name}}</li>
 			<li>Slug:{{$project->slug}}</li>
 			<li>Created at:{{$project->created_at}}</li>
 		</ul>
 	@endforeach
 	</ul>
 <!--@endif-->
 @stop

@section('footer')