@extends('layouts/admin')

@section('content')
  <h1 class="mt-5">Pagina di amministrazione</h1>

  <hr>

  <a href="{{route('admin.projects.index')}}" type="button" class="btn btn-primary mt-3">Vai a tutti i progetti</a>
@endsection