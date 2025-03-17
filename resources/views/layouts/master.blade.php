<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Panel de Administración')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body { background-color: #f8f9fa; }
        .sidebar { width: 250px; height: 100vh; background: #30c039; color: white; position: fixed; }
        .sidebar a { color: white; padding: 10px; display: block; text-decoration: none; }
        .sidebar a:hover { background: #1fa328; }
        .content { margin-left: 260px; padding: 20px; }
        .navbar { background-color: #212529 !important; }
        .navbar-brand, .nav-link { color: white !important; }
    </style>
</head>
<body>

    @auth
        <!-- Sidebar -->
        <div class="sidebar">
            <h4 class="text-center py-3">{{ Auth::user()->name }}</h4>
            <hr>
            @if(Auth::user()->role == 'admin')
                
            @else
                
            @endif
            <hr>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    @endauth

    <!-- Contenido Principal -->
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Sistema de Viveros</a>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>