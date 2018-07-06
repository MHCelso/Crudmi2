@extends('layouts.app')
@section('title', 'Editar')
@section('content')
<div class="container">
    <img style="width: 70px; heigh=70px;" src="/images/{{ $trainer->avatar }}" alt="modify-img" />
    <form class="form-group" method="POST" action="/trainers/{{ $trainer->slug }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" value="{{ $trainer->name }}" class="form-control" name="name" />
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar" accept="image/png, image/jpeg" />
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
@endsection