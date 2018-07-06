@extends('layouts.app')
@section('title', 'Crear-Entrenador')
@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-warning">
            @foreach($errors->all() as $error)
            <ul>
                <li>{{ $error }}</li>
            </ul>
            @endforeach
        </div>
    @endif
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="Nombre"/>
            <label for="slug">NickName</label>
            <input type="text" class="form-control" name="slug" placeholder="Nickanme-unico"/>
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar" accept="image/png, image/jpeg"/>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection