<?php
  session_start();
  require 'conexion.php';
  
  if(!isset($_SESSION["id_usuario"])){
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tutorias ITT - Acerca de</title>

  <!-- Latest compiled and minified CSS BootStrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- ICONOS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- FUENTE -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <!-- COLORES PRIMARIOS-->
	<link rel="stylesheet" type="text/css" href="css/material.min-colors.css">
	
</head>



<style>


/*IMAGEN PRINCIPAL - Pie de pagina*/
/* Header Image Background - Change the URL below to your image path (example: ../images/background.jpg) */
.business-header {
    height: 300px;
    background: url('images/fondo11.jpg') center center no-repeat scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}
/* Customize the text color and shadow color and to optimize text legibility. */
.tagline {
    text-shadow: 0 0 10px #000;
    color: #fff;
}
.img-center {
    margin: 0 auto;
}


/*------TEAM MEMBER---------------*/
.team-member {
  text-align: center;
  margin-bottom: 50px;
}
.team-member img {
  margin: 0 auto;
  border: 7px solid white;
}
.team-member h4 {
  margin-top: 25px;
  margin-bottom: 0;
  text-transform: none;
}
.team-member p {
  margin-top: 0;
}

</style>

<body>


<!-- BARRA PRICIPAL -->
<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
      <!-- Titulo -->
      <span class="mdl-layout-title">Sistema de Tutor&iacute;as ITT</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation (BARRA PRICIPAL) -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index2.php"><b>Inicio</b></a>
        <a class="mdl-navigation__link" href="logout.php"><b>Cerrar Sesi&oacute;n</b></a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
  <!-- Menu flotante del Lado Izquierdo -->
    <span class="mdl-layout-title">Menu</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="index2.php">Inicio</a>
      <a class="mdl-navigation__link" href="logout.php">Cerrar Sesi&oacute;n</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">

    <!--IMAGEN PRINCIPAL-->
    <!-- Image Background Page Header -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Tutor&iacute;as ITT</h1>
                </div>
            </div>
        </div>
    </header>

 <!-- Contenido de la pagina -->
    <div class="container">

        <!-- Linea delgada -->
        <hr>

<!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nuestro asombroso equipo</h2>
                    <h4 class="section-subheading text-muted">La Sistema de Tutor&iacute;as fue desarrollado por: </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="images/6.jpg" class="img-responsive img-circle" alt="">
                        <h4>Mendoza Lorenzo Josue Adrian</h4>
                        <p class="text-muted">Documentador</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="images/6.jpg" class="img-responsive img-circle" alt="">
                        <h4>Ramirez Vasquez Fernando</h4>
                        <p class="text-muted">Administrador de Base de datos</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="images/6.jpg" class="img-responsive img-circle" alt="">
                        <h4>Villegas Castillo Omar</h4>
                        <p class="text-muted">Desarrollador Web</p>
                    </div>
                </div>
            </div>
            <div class="row">
                             <div class="col-sm-4">
                    <div class="team-member">
                        <img src="images/6.jpg" class="img-responsive img-circle" alt="">
                        <h4>Pasillas Luis Miguel Angel</h4>
                        <p class="text-muted">Programador</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="images/20.jpg" class="img-responsive img-circle" alt="">
                        <h4></h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="images/6.jpg" class="img-responsive img-circle" alt="">
                        <h4>Munive Saldaña Evans Josue</h4>
                        <p class="text-muted">Programador</p>
                    </div>
                </div>
            </div>
</section>

    </div>

    </br>
    <!-- Pie de Pagina -->
    <footer class="mdl-mini-footer">
      <div class="mdl-mini-footer__left-section">
        <div class="mdl-logo">Sistema de Tutor&iacute;as ITT</div>
        <ul class="mdl-mini-footer__link-list">
          <li><a href="acerca2.php">Acerda de</a></li>
        </ul>
      </div>
    </footer>
  </main>
</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="js/material.min.js"></script>
</body>

</html>


<!-- 

Diseñada mayormente en MDL:
https://getmdl.io/

Basada en los diseños de BootStrap:
(business-header)
https://startbootstrap.com/template-overviews/business-frontpage/
https://github.com/BlackrockDigital/startbootstrap-business-frontpage/tree/master/css

(callout)
https://startbootstrap.com/template-overviews/stylish-portfolio/
https://github.com/BlackrockDigital/startbootstrap-stylish-portfolio/tree/master/css

(banner)
https://startbootstrap.com/template-overviews/landing-page/
https://github.com/BlackrockDigital/startbootstrap-landing-page


    
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Ayuda a tus Compañeros</h1>
        </div>
    </aside>

TEAM:
https://github.com/BlackrockDigital/startbootstrap-agency
https://github.com/BlackrockDigital/startbootstrap-agency/blob/master/index.html
https://blackrockdigital.github.io/startbootstrap-agency/
-->