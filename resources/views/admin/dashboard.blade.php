@extends('layouts/admin')

@section('content')
  <h1 class="mt-5">Pagina di amministrazione</h1>

  <hr>

  <ul>
    <li><a href="{{route('admin.projects.index')}}">Mostra tutti i progetti</a></li>
  </ul>
@endsection