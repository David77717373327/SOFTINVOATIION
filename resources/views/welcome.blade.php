@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
<div class="container text-center">
    <h1>Bienvenido a nuestra aplicación</h1>
    
    <p><a href="{{ route('user.public') }}" class="btn btn-info">Acceder como Usuario</a></p>

    @guest
        <p><a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a></p>
    @else
        <p><a href="{{ route('dashboard') }}" class="btn btn-success">Ir al Panel</a></p>
    @endguest
</div>
@endsection
