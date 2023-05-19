@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">Il mio portfolio</h1>
        <p class="col-md-8 fs-4">Questo è il portoflio di Giovanni Maria Ciclosi</p>
        <a href="{{route('admin.projects.index')}}" class="btn btn-primary btn-lg" type="button">Esplora i progetti</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <p>Boolean classe 88</p>
    </div>
</div>
@endsection