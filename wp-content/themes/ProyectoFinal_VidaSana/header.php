<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>
    
    

<!--abre barra de navegación-->
<nav class="navbar-vidasana navbar navbar-expand-xl navbar-light fixed-top">
  <div class="container">
    <img class="img-fluid logovidasana" src="<?php echo get_template_directory_uri(); ?>/assets/img/vida-sana.png">
        <h1 class="vidasana"></h1>
 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-collapse" aria-controls="menu-collapse" aria-expanded="false" aria-label="Toggle navigation">
  
            <span class="navbar-toggler-icon"></span>
         </button>

            <div class="collapse navbar-collapse justify-content-end" id="menu-collapse">
              <ul class="nav navbar-expand">
                <li class="nav-links">
                  <ul class="navbar-nav">
                  <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="dropdown nav-item">
                  <a  class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Menú<b class="caret"></b></a>
                    <ul class="dropdown dropdown-menu">
                      <li class="dropdown-item">
                        <a class="nav-link" href="#sección-eventos-deportivos"> Eventos Deportivos </a>
                </li>
                <li class="dropdown-item">
                  <a class="nav-link" href="#sección-tips-nutricionales"> Tips Nutricionales </a>
                </li>
                <li class="dropdown-item">
                  <a class="nav-link" href="#sección-recetas"> Recetas </a>
                </li>
                <li class="dropdown-item">
                  <a class="nav-link" href="#sección-actividades"> Actividades </a>
                </li>
              </ul>
                <li class="nav-item">
                  <a class="nav-link" href="#sección-contacto">¡Contáctanos!</a>
                </li>
                  </ul>
            </div>
  </div>

            </ul>

</nav>


<!-- cierre barra de navegación -->