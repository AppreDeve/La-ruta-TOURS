<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viajes</title>
    <link rel="stylesheet" href="/CSS/viajes.css" />
</head>
<body>

    <!-- Menú de navegación fijo -->
  <header>
  <div class="menu">
    <div class="logo">La ruta tours</div>
    
    <nav class="nav-links">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="viajes.html">Viajes</a></li>
        <li><a href="#">Galería</a></li>
        <li><a href="nosotros.html">Nosotros</a></li>
      </ul>
    </nav>

    <div class="login">
      <button onclick="location.href='login.html'">Iniciar sesión</button>
    </div>
  </div>
</header>

  
  <!-----CONTENEDORES DE LOS VIAJES----->
<!-- Contenedor 1 -->
<div class="tarjeta-viaje">
  <!-- Imagen del viaje (lado izquierdo) -->
  <img src="/IMG/destequila.jpg" alt="Imagen del viaje 1">
   <!-- Información del viaje (lado derecho) -->
  <div class="info-viaje">
    <h3>TEQUILA, JALISCO</h3>
    <p><strong>Fecha de salida:</strong> 10-Octubre-2025</p> <!--Acomodar fechas, precios etc etc.-->
    <p><strong>Costo:</strong> Adulto: $1200 | Niño: $850</p>
    <p><strong>Asientos disponibles:</strong> 18</p>
     <!-- Botón alineado en la esquina inferior derecha -->
    <div class="boton-ver">
      <button>Ver más</button>
    </div>
  </div>
</div>
<!-- Modal exclusivo para el viaje a Tequila -->
<div id="modal-tequila" class="modal">
  <div class="modal-contenido">
    <!-- Botón para cerrar el modal -->
    <span class="cerrar-modal">&times;</span>

    <!-- Contenido detallado del viaje -->
    <h2>TEQUILA, JALISCO</h2>

    <br>
    <p><strong>FECHA:</strong> Sábado 16 de Agosto del 2025</p>
    <p><strong>Salida:</strong> 05:00 am | <strong>Regreso:</strong> 19:00 pm</p>
    <br>
    <p><strong>PUNTOS DE REUNIÓN:</strong></p>
    <ul>
      <li>Plaza del Pitillal</li>
      <li>Restaurant Vips, Galerías</li>
      <li>Las juntas (Dominos Pizza)</li>
      <li>Mezcales (Farmacia del Ahorro)</li>
      <li>Bucerías (Banco Santander y Comex)</li>
    </ul>
    <br>

    <p><strong>EXPERIENCIA VIP:</strong></p>
    <ul>
      <li>Desayuno en Ixtlán del Río</li>
      <li>Recorrido en camión tipo botella</li>
      <li>Campos Agaveros</li>
      <li>Fábrica La Rojeña de José Cuervo</li>
      <li>Cata de 3 copas de tequila</li>
      <li>Centro cultural Juan Beckman</li>
      <li>Jardines guiados</li>
      <li>Cantarito con tequila</li>
    </ul>
    <p><strong>Costo VIP:</strong> $2,150 | Niños $1,900</p>
    <br>

    <p><strong>TOUR BÁSICO:</strong></p>
    <ul>
      <li>Desayuno en Ixtlán del Río</li>
      <li>Camión tipo botella</li>
      <li>Cantarito con tequila</li>
      <li><em>Tiempo libre</em></li>
    </ul>
    <p><strong>Costo Básico:</strong> $1,400 | Niños $1,100</p>
    <br>

    <p><strong>INCLUYE:</strong> autobús, seguro, desayuno, entradas, fotos, cantarito.</p>
    <p><strong>NO INCLUYE:</strong> gastos personales, comidas o bebidas adicionales.</p>
    <br>

    <p><strong>FORMAS DE PAGO:</strong> efectivo en OXXO, transferencias, tarjeta (vía Mercado Pago)</p>
    <br>

    <p><strong>DESCUENTO:</strong> 10% a clientes frecuentes.</p>
    <p><strong>APARTA TU LUGAR:</strong> VIP $800 | Básico $500</p>
    <br>

    <p><strong>INFORMES:</strong> Adriana Ibarra - 322 159 0111<br>
    <a href="https://wa.me/message/3GMD7N54MBM2G1" target="_blank">WhatsApp directo</a></p>
  </div>
</div>


<!-- Contenedor 2 -->
<!-- ZOOLOGICO DE GDL -->
<div class="tarjeta-viaje">
  <img src="/IMG/deszoo.jpg" alt="Imagen del viaje 2">
  <div class="info-viaje">
    <h3>ZOOLÓGICO, GUADALAJARA</h3>
    <p><strong>Fecha de salida:</strong> 12-Noviembre-2025</p>
    <p><strong>Costo:</strong> Adulto: $1000 | Niño: $750</p>
    <p><strong>Asientos disponibles:</strong> 25</p>
    <div class="boton-ver">
      <button>Ver más</button>
    </div>
  </div>
</div>

<!-- Modal para el viaje al ZOOLÓGICO de Guadalajara -->
<div id="modal-zoo" class="modal">
  <div class="modal-contenido">
    <!-- Botón para cerrar el modal -->
    <span class="cerrar-modal">&times;</span>

    <!-- Contenido detallado del viaje -->
    <h2>ZOOLÓGICO DE GDL Y TEQUILA JAL.</h2>
    <p><strong>‼️PUERTO VALLARTA Y BAHÍA DE BANDERAS‼️</strong></p>
    <br>
    <p><strong>SALIDA:</strong> MES DE JUNIO</p>
    <ul>
      <li>Sábado 14</li>
      <li>Sábado 28</li>
    </ul>
    <br>

    <p><strong>PAQUETE 1: DIAMANTE 💎</strong></p>
    <ul>
      <li>Tren 🚂</li>
      <li>Safari 🦒🦍🐘</li>
      <li>Acuario 🐟🐠🦈</li>
      <li>Teleférico 🚡</li>
      <li>Pingüinos 🐧🐧</li>
    </ul>
    <p><strong>Costo:</strong> Adulto $1,350 | Niños (3 a 11 años) $1,200</p>
    <br>

    <p><strong>PAQUETE 2: PREMIUM 🏆</strong></p>
    <ul>
      <li>Tren 🚂</li>
      <li>Safari 🦒🦍🐘</li>
      <li>Acuario 🐟🐠🦈</li>
      <li>Pingüinos 🐧🐧</li>
    </ul>
    <p><strong>Costo:</strong> Adulto $1,250 | Niños (3 a 11 años) $1,100</p>
    <br>

    <p><strong>🚌💨 Horario de salida:</strong> 04:00 am</p>
    <ul>
      <li>Restaurant Vips (Puerto Vallarta)</li>
      <li>Oxxo (Las Juntas)</li>
      <li>Farmacia del Ahorro (Mezcales)</li>
      <li>Banco Santander (Bucerías) y localidades vecinas</li>
    </ul>
    <br>

    <p><strong>INCLUYE:</strong></p>
    <ul>
      <li>Transporte en autobús de turismo (ida y regreso)</li>
      <li>Seguro de viajero</li>
      <li>Galería fotográfica interior</li>
      <li>Snacks 🧃🍫🍪🍌</li>
      <li>Entrada al Zoológico</li>
    </ul>

    <p><strong>IMPORTANTE:</strong> No incluye alimentos ni gastos personales.</p>
    <br>

    <p><strong>APARTA TU LUGAR:</strong> $400 por persona, puedes abonar y liquidar 3 días antes de la salida.</p>
    <br>

    <p><strong>INTERINARIO:</strong></p>
    <ul>
      <li>Entrada al Zoológico: 09:00 hrs</li>
      <li>Salida: 15:00 hrs</li>
      <li>Llegada a Tequila (tiempo libre): 16:30 hrs</li>
      <li>Salida: 19:00 hrs</li>
    </ul>
    <br>

    <p><strong>INFORMES:</strong><br>
    Adriana Ibarra - 322 159 0111<br>
    <a href="https://wa.me/message/3GMD7N54MBM2G1" target="_blank">Enlace directo a WhatsApp</a></p>
  </div>
</div>


<!-- Contenedor 3 -->
<!-- SAN SEBASTIAN DEL OESTE -->
<div class="tarjeta-viaje">
  <img src="/IMG/dessansebas.jpg" alt="Imagen del viaje 3">
  <div class="info-viaje">
    <h3>SAN SEBASTIÁN DEL OESTE</h3>
    <p><strong>Fecha de salida:</strong> 05-Diciembre-2025</p>
    <p><strong>Costo:</strong> Adulto: $1500 | Niño: $1250</p>
    <p><strong>Asientos disponibles:</strong> 38</p>
    <div class="boton-ver">
      <button>Ver más</button>
    </div>
  </div>
</div>

<!-- Modal exclusivo para el viaje a SAN SEBASTIÁN DEL OESTE -->
<div id="modal-san-sebastian" class="modal">
  <div class="modal-contenido">
    <!-- Botón para cerrar el modal -->
    <span class="cerrar-modal">&times;</span>

    <!-- Contenido detallado del viaje -->
    <h2>🕍 SAN SEBASTIÁN DEL OESTE 🎆</h2>
    <p><strong>DOS SALIDAS:</strong></p>
    <ul>
      <li>Viernes 10 de Enero (Rompimiento)</li>
      <li>Lunes 20 de Enero (Cierre)</li>
    </ul>
    <br>

    <p><strong>Horario de salida:</strong> 12:00 del día</p>
    <p><strong>Regreso:</strong> 23:00 hrs</p>
    <br>

    <p><strong>PUNTOS DE REUNIÓN:</strong></p>
    <ul>
      <li>Mezcales (OXXO), dirección a Pto. Vallarta</li>
      <li>Las Juntas (Domino's)</li>
      <li>Avenida de Ixtapa</li>
    </ul>
    <br>

    <p><em>***TIEMPO LIBRE EN EL PUEBLO***</em></p> <!--ACOMODAR-->
    <br>

    <p><strong>INCLUYE:</strong></p>
    <ul>
      <li>Autobús de Turismo</li>
      <li>Seguro de Viajero durante el trayecto</li>
      <li>Snacks 🍌🍪🥤🍫</li>
    </ul>
    <br>

    <p><strong>COSTO:</strong> Adulto $550 | Niños (4 a 11 años) $400</p>
    <br>

    <p><strong>✖️ NO INCLUYE:</strong></p>
    <ul>
      <li>Alimentos, bebidas o gastos personales</li>
      <li>Paseo a La Bufa: $250 por persona</li>
      <li>Acceso al mirador: $20</li>
      <li>Paseos en cuatrimotos 🛵</li>
    </ul>
    <br>

    <p><strong>APARTA TU LUGAR:</strong> $300 por persona. Se liquida 3 días antes de la salida.</p>
    <br>

    <p><strong>INFORMES:</strong> Adriana Ibarra - 322 159 0111<br>
    <a href="https://wa.me/message/3GMD7N54MBM2G1" target="_blank">WhatsApp directo</a></p>
  </div>
</div>


<!-- Contenedor 4 -->
<!--CARNAVAL DE MAZATLAN-->
<div class="tarjeta-viaje">
  <img src="/IMG/desmaza.jpg" alt="Imagen del viaje 4">
  <div class="info-viaje">
    <h3>MAZATLÁN</h3>
    <p><strong>Fecha de salida:</strong> 20-Diciembre-2025</p>
    <p><strong>Costo:</strong> Adulto: $1300 | Niño: $1000</p>
    <p><strong>Asientos disponibles:</strong> 20</p>
    <div class="boton-ver">
      <button>Ver más</button>
    </div>
  </div>
</div>

<!-- Modal para el viaje a MAZATLÁN -->
<div id="modal-mazatlan" class="modal">
  <div class="modal-contenido">
    <!-- Botón para cerrar el modal -->
    <span class="cerrar-modal">&times;</span>

    <!-- Contenido detallado del viaje -->
    <h2>🎭 CARNAVAL DE MAZATLÁN 2025 🎆💃🏻</h2>
    <p><strong>MES DE MARZO</strong></p>
    <p><strong>Salida:</strong> Domingo 2 (Últimos 5 lugares)</p>
    <br>

    <p><strong>COSTO:</strong></p>
    <ul>
      <li>Adultos: $1400 pesos</li>
      <li>Niños (4 a 11 años): $1250 pesos</li>
    </ul>
    <br>

    <p><strong>PUNTOS DE REUNIÓN:</strong></p>
    <ul>
      <li>Vallarta (Vips)</li>
      <li>Crucero de las Juntas</li>
      <li>Mezcales (Farmacia del Ahorro)</li>
      <li>Bucerías (Puente Peatonal, Banco Santander y La Comex)</li>
    </ul>
    <br>

    <p><strong>INCLUYE:</strong></p>
    <ul>
      <li>Transporte en Autobús de Turismo (ida y regreso)</li>
      <li>Seguro de viajero (durante el trayecto)</li>
      <li>Snacks 🧃🍫🍪🍌</li>
    </ul>
    <br>

    <p><strong>IMPORTANTE:</strong> No incluye alimentos ni gastos personales.</p>
    <br>

    <p><strong>APARTA TU LUGAR:</strong> $500 pesos, puedes pagar poco a poco y liquidar 3 días antes.</p>
    <br>

    <p><strong>ITINERARIO DEL VIAJE:</strong></p>
    <ul>
      <li>Salida: Puerto Vallarta (Restaurante Vips) 05:00 am</li>
      <li>Llegada a Mazatlán: 11:00 am (Tiempo del Pacífico)</li>
      <li>***TIEMPO LIBRE***</li> <!---ACOMODAR-->
      <li>Lugares para visitar: Gran Acuario, Faro de Mazatlán, Plaza Machado</li>
      <li>Regreso: 23:00 pm rumbo a Vallarta</li>
    </ul>
    <br>

    <p><strong>INFORMES:</strong><br>
    Adriana Ibarra - 322 159 0111<br>
    <a href="https://wa.me/message/3GMD7N54MBM2G1" target="_blank">Enlace directo a WhatsApp</a></p>
  </div>
</div>


<!-- Contenedor 5 -->
<!-- MARIPOSA MONARCA, PÁTZCUARO E ISLA DE JANITZIO -->
<div class="tarjeta-viaje">
  <img src="/IMG/desmazamitla.jpg" alt="Imagen del viaje 5">  <!--CAMBIAR IMAGEN-->
  <div class="info-viaje">
    <h3>MARIPOSA MONARCA, PÁTZCUARO E ISLA DE JANITZIO</h3>
    <p><strong>Fecha de salida:</strong> 15-Enero-2026</p>
    <p><strong>Costo:</strong> Adulto: $1400 | Niño: $1100</p>
    <p><strong>Asientos disponibles:</strong> 22</p>
    <div class="boton-ver">
      <button>Ver más</button>
    </div>
  </div>
</div>

<!-- Modal para MARIPOSA MONARCA, PÁTZCUARO E ISLA DE JANITZIO -->
<div id="modal-monarca" class="modal" data-id="monarca">
  <div class="modal-contenido">
    <span class="cerrar-modal">&times;</span>

    <h2>‼️MARIPOSA MONARCA 🦋 PÁTZCUARO E ISLA DE JANITZIO‼️</h2>
    <p><strong>SALIDA:</strong> Viernes 21 al Domingo 23 de Febrero</p>
    <p><em>Dos días y una noche</em></p>
    <br>

    <p><strong>LUGARES A VISITAR:</strong></p>
    <ul>
      <li>Santuario El Rosario (Mariposa Monarca)</li>
      <li>Pátzcuaro</li>
      <li>Isla de Janitzio</li>
    </ul>
    <br>

    <p><strong>PUNTOS DE REUNIÓN:</strong></p>
    <ul>
      <li>Puerto Vallarta (Restaurant Vips)</li>
      <li>Las Juntas (Oxxo)</li>
      <li>Mezcales (Farmacia del Ahorro)</li>
      <li>Bucerías (Banco Santander) y localidades vecinas</li>
    </ul>
    <br>

    <p><strong>INCLUYE:</strong></p>
    <ul>
      <li>Transporte en Autobús de Turismo</li>
      <li>Seguro de viajero durante el trayecto</li>
      <li>Galería fotográfica</li>
      <li>Snacks 🧃🍫🍪🍌</li>
      <li>Hospedaje una noche en Pátzcuaro</li>
    </ul>
    <br>

    <p><strong>COSTO:</strong></p>
    <ul>
      <li>$3,400 por persona (habitación para 2 personas)</li>
      <li>$3,200 por persona (habitación para 3 a 6 personas)</li>
    </ul>
    <br>

    <p><strong>❌IMPORTANTE:</strong> No incluye alimentos, gastos personales, entradas al Santuario y paseo a Janitzio.</p>
    <ul>
      <li>Santuario: $100</li>
      <li>Paseo a Janitzio: $170</li>
    </ul>
    <br>

    <p><strong>APARTA TU LUGAR:</strong> $800 y liquidar 3 días antes de la salida</p>
    <br>

    <p><strong>INFORMES:</strong><br>
      Adriana Ibarra - 322 159 0111<br>
      <a href="https://wa.me/message/3GMD7N54MBM2G1" target="_blank">WhatsApp directo</a>
    </p>
  </div>
</div>






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

  <script>
  // Todos los botones "Ver más" y todos los modales
  const botones = document.querySelectorAll('.tarjeta-viaje .boton-ver button');
  const modales = document.querySelectorAll('.modal');

  botones.forEach((boton, index) => {
    boton.addEventListener('click', () => {
      // Mostrar el modal correspondiente (es el orden igual al de las tarjetas)
      modales[index].style.display = 'block';
    });
  });

  // Cerrar modales al hacer clic en la "X"
  modales.forEach(modal => {
    const cerrar = modal.querySelector('.cerrar-modal');
    cerrar.addEventListener('click', () => {
      modal.style.display = 'none';
    });

    // Cerrar si se hace clic fuera del contenido
    window.addEventListener('click', e => {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
  });
</script>

    
</body>
</html>