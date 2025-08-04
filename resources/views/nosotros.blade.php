<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
      <link rel="stylesheet" href="/CSS/nosotros.css" />
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




<!-- Sección de información general -->
<section class="nosotros-intro">
  <p>
    Lorem ipsum dolor sit amet consectetur adipiscing elit pharetra, interdum est praesent consequat volutpat massa neque posuere ornare, 
    litora maecenas sem quisque rutrum quis bibendum. Ad proin eu suscipit et ante pellentesque fusce quis tincidunt, hendrerit odio facilisis 
    at feugiat sem felis conubia, eleifend elementum rhoncus quisque dictum penatibus vitae tempus. Quis sem eu tempor platea vitae interdum molestie, 
    sapien aliquet tempus mollis mus ultrices, id sodales nisl ligula cubilia in.
  </p>
</section>

<!-- Sección de Misión, Visión y Valores -->
<section class="nosotros-valores">
  <div class="tarjeta">
    <h3>Misión</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pharetra, interdum est praesent consequat volutpat massa 
      neque posuere ornare, litora maecenas sem quisque rutrum quis bibendum.</p>
  </div>
  <div class="tarjeta">
    <h3>Visión</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pharetra, interdum est praesent consequat volutpat massa 
      neque posuere ornare, litora maecenas sem quisque rutrum quis bibendum.</p>
  </div>
  <div class="tarjeta">
    <h3>Valores</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pharetra, interdum est praesent consequat volutpat massa 
      neque posuere ornare, litora maecenas sem quisque rutrum quis bibendum.</p>
  </div>
</section>



<!-----FOOTER-->
    <footer>
    <div class="redes">
      <!-- Instagram -->
      <a href="#" class="instagram">
        <svg viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9 
        114.9-51.3 114.9-114.9S287.7 141 224.1 141zm0 
        186c-39.3 0-71.1-31.8-71.1-71.1s31.8-71.1 
        71.1-71.1 71.1 31.8 71.1 71.1-31.8 71.1-71.1 
        71.1zm146.4-194.3c0 14.9-12.1 
        27-27 27-14.9 0-27-12.1-27-27s12.1-27 
        27-27 27 12.1 27 27zm76.1 27.2c-.5-35.3-9.9-66.7-36.3-93.1S373.6 
        0.6 338.3.1c-35.3-.5-138.5-.5-173.8 
        0-35.3.5-66.7 9.9-93.1 36.3S0.6 138.4.1 
        173.7c-.5 35.3-.5 138.5 0 173.8.5 35.3 9.9 
        66.7 36.3 93.1s57.8 35.8 93.1 36.3c35.3.5 
        138.5.5 173.8 0 35.3-.5 66.7-9.9 
        93.1-36.3s35.8-57.8 36.3-93.1c.5-35.3.5-138.5 
        0-173.8zM398.8 388c-7.8 19.6-22.9 
        34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 
        9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 
        9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 
        99.5-9 132.1-9s102.7-2.6 
        132.1 9c19.6 7.8 34.7 22.9 42.6 
        42.6 11.7 29.5 9 99.5 
        9 132.1s2.7 102.7-9 132.1z"/></svg>
      </a>

      <!-- Twitter -->
      <a href="#" class="twitter">
        <svg viewBox="0 0 512 512"><path d="M459.4 151.7c.3 4.5.3 9.1.3 13.6 
        0 138.7-105.6 298.7-298.7 298.7-59.5 0-114.7-17.2-161.1-47.1 
        8.4 1 16.8 1.3 25.6 1.3 
        49.1 0 94.2-16.8 130.3-45.1-46.1-1-84.8-31.2-98.1-72.8 
        6.5 1 13 1.6 19.8 1.6 
        9.4 0 18.7-1.3 27.5-3.6-48.1-9.7-84.3-52.1-84.3-103 
        0-.5 0-1 0-1.6 
        14.1 7.8 30.3 12.6 47.5 13.3-28.3-18.9-46.8-51-46.8-87.4 
        0-19.4 5.2-37.3 14.1-52.8 
        51.2 62.7 127.5 103.5 213.2 107.8 
        -1.6-7.8-2.6-15.9-2.6-24.1 
        0-57.8 46.8-104.9 104.9-104.9 
        30.3 0 57.8 12.6 77 32.9 
        24.1-4.5 46.5-13.3 66.8-25.6 
        -7.8 24.4-24.4 44.8-46.1 57.8 
        21.4-2.3 42.5-8.1 61.6-16.2 
        -14.1 21-32 39.4-52.6 54.3z"/></svg>
      </a>

      <!-- LinkedIn -->
      <a href="#" class="linkedin">
        <svg viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 
        108.1C24.09 108.1 0 83.6 0 53.8 
        0 24 24.09 0 53.79 0s53.79 24 53.79 53.8c0 
        29.8-24.09 54.3-53.79 54.3zM447.9 
        448h-92.4V302.4c0-34.7-.7-79.2-48.3-79.2 
        -48.3 0-55.7 37.7-55.7 76.7V448h-92.6V148.9h88.9v40.8h1.3 
        c12.4-23.5 42.6-48.3 87.7-48.3 
        93.8 0 111.1 61.8 111.1 142.3V448z"/></svg>
      </a>

      <!-- WhatsApp -->
      <a href="#" class="whatsapp">
        <svg viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.4 32 
        224.5 32c-118.6 0-215 96.4-215 
        215 0 37.8 9.9 74.6 28.6 107.1L0 
        480l130.5-34.3c30.5 16.6 64.9 
        25.4 99.7 25.4h.1c118.6 0 215-96.4 
        215-215 0-57.3-22.3-111.2-64.4-152.9zM224.6 
        438.6h-.1c-30.6 0-60.9-8.2-87.1-23.7l-6.2-3.7-77.4 
        20.3 20.7-75.3-4.1-6.5c-17.6-28.1-26.9-60.5-26.9-93.8 
        0-97 79-176 176-176 47 0 91.1 
        18.3 124.3 51.5s51.5 77.3 51.5 
        124.3c0 97-79 176-176 176zm101.7-138.3c-5.6-2.8-33.1-16.3-38.2-18.2-5.1-1.9-8.8-2.8-12.5 
        2.8-3.7 5.6-14.3 18.2-17.5 
        21.9-3.2 3.7-6.5 4.2-12.1 
        1.4-33.1-16.5-54.8-29.5-76.6-66.5-5.8-10 
        5.8-9.3 16.5-30.9 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.1-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2s-9.7 
        1.4-14.8 6.9c-5.1 5.6-19.4 
        19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 
        3.7 38.9 59.6 94.2 83.6 13.1 
        5.6 23.3 8.9 31.2 11.4 13.1 
        4.2 25 3.6 34.5 2.2 
        10.6-1.6 33.1-13.5 37.8-26.5 
        4.7-13 4.7-24.1 3.2-26.5-1.3-2.4-5.1-3.8-10.6-6.5z"/></svg>
      </a>
    </div>
  </footer>

</body>
</html>