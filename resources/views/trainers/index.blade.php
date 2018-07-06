@extends('layouts.app')
@section('title', 'Entrenadores')
@section('content')
<div class="row">
@foreach($trainers as $trainer)
<div class="col-sm">
<div class="card text-center" style="width: 20rem; margin-top: 70px;">
    <img class="card-img-top rounded-circle mx-auto d-block" src="images/{{ $trainer->avatar }}" alt="trainer-image"
    style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;">
    <div class="card-body">
        <h4 class="card-title">{{ $trainer->name }}</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/trainers/{{ $trainer->slug }}" class="btn btn-primary">Ver más...</a>
    </div>
</div>
</div>
@endforeach
</div>
@endsection