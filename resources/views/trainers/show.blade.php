@extends('layouts.app')
@section('title', 'Entrenador')
@section('content')

<div class="card mb-3" style="margin-top: 70px;">
    <img class="card-img-top rounded-circle mx-auto d-block" src="/images/{{ $trainer->avatar }}" alt="trainer-image" 
    style="height: 200px; width:200px; background-color: #EFEFEF;"/>
    <div class="card-body">
      <h4 class="card-title">{{ $trainer->name }}</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated {{ $trainer->updated_at }}</small></p>
      <a href="/trainers/{{ $trainer->slug }}/edit" class="btn btn-primary">Editar</a>
    </div>
</div>
@endsection