<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="/CSS/login.css" />
</head>
<body>

    <!-- FORMULARIOS --> 
<section class="registro-section">
  <div class="wrapper"> 
    <div class="card-switch">
      <label class="switch">
        <input class="toggle" type="checkbox">
        <span class="slider"></span>
        <span class="card-side"></span>
        <div class="flip-card__inner">
          <div class="flip-card__front">

            <!----INICIO DE SESIÓN-->
            <div class="title">Iniciar Sesión</div>
            <form action="" class="flip-card__form">
              <input type="email" placeholder="Correo" name="email" class="flip-card__input">
              <input type="password" placeholder="Contraseña" name="password" class="flip-card__input">
              <button class="flip-card__btn">Confirmar</button>
            </form>
            <!--Link para recuperar contraseña-->        <!--MODIFICAR-->
            <div class="forgot-password">
              <a href="#" class="forgot-link">¿Olvidaste tu contraseña?</a>
            </div>
          </div>

          <div class="flip-card__back">
            <!----REGISTRO-->
            <div class="title">Registro</div>
            <form action="" class="flip-card__form">
              <input type="name" placeholder="Nombre" class="flip-card__input">
              <input type="email" placeholder="Correo" name="email" class="flip-card__input">
              <input type="password" placeholder="Contraseña" name="password" class="flip-card__input">
              <button class="flip-card__btn">Confirmar</button>
            </form>
            <!--Link para iniciar sesion con google-->        <!--MODIFICAR-->
            <div class="google-link-container">
              <a href="#" class="google-link">Iniciar sesión con Google</a>
            </div>
          </div>
        </div>
      </label>
    </div>   
  </div>
</section>

    



</body>
</html>