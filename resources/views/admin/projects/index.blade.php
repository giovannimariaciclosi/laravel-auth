@extends('layouts/admin')

@section('content')


<table class="mt-5 table table-striped">
  <thead>
    <th>Titolo</th>
    <th>Descrizione</th>
    <th>Slug</th>
    <th>Github Repository</th>
    <th>Comandi</th>
  </thead>

  <tbody>
    @foreach($projects as $project)
    <tr >
      <td>{{$project->title}}</td>
      <td>{{$project->content}}</td>
      <td>{{$project->slug}}</td>
      <td>{{$project->github_repository}}</td>
      <td><a href="{{route('admin.projects.show', $project->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="container">
  <a href="{{route('admin.projects.create')}}" class="btn btn-success mb-5 mt-2" type="button">Aggiungi nuovo progetto</a>
</div>
@endsection