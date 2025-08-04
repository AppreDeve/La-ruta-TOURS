<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galería</title>
    <link rel="stylesheet" href="{{ asset('/CSS/galeria.css') }}" />
</head>
<body>

    <!-- Menú de navegación fijo -->
  <header>
  <div class="menu">
    <div class="logo">
      <img src="{{ asset('img/logosinfondo.png') }}" alt="logo de la empresa"> <!-- Imagen -->
      <span>La ruta tours</span> <!-- Texto -->
    </div>
    
    <nav class="nav-links">
  <ul>
    <!-- Si la URL es '/', se agrega la clase 'active' -->
    <li>
      <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
    </li>
    <li>
      <a href="{{ route('viajes') }}" class="{{ request()->routeIs('viajes') ? 'active' : '' }}">Viajes</a>
    </li>
    <li>
      <a href="{{ route('galeria') }}" class="{{ request()->routeIs('galeria') ? 'active' : '' }}">Galería</a>
    </li>
    <li>
      <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
    </li>
  </ul>
</nav>


    <div class="login">
      <button type="button" onclick="location.href='{{ route('login') }}'">
        Iniciar sesión</button>
    </div>
</header>
    
</body>
</html>