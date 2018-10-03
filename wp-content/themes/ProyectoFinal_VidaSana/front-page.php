<?php get_header(); ?>

<div class="jumbotron">
    
    <h1 class="orgullo">En Quilicura la  <span id="vs" style="font-family: 'Indie Flower', cursive;"> Vida Sana </span>se lleva con orgullo</h1>
    <script type="text/javascript">
        $("#vs").on("mouseover", function(){
        $("#vs").css("color", "yellow");
    })
    </script>
    <script type="text/javascript">
        $("#vs").on("mouseout", function(){
        $("#vs").css("color", "white");
    })
    </script>
</div>


  </header>

<!-- sección deportes -->  
<div id="sección-eventos-deportivos">
  <div class="card-deck">
    <div class="card card-deportes card-item">
    <h3>Eventos Deportivos</h3>
    <i class="fas fa-basketball-ball"></i>
  </div>
    </div>
      <div class="deportes">
        <div class="container card-group deportes">
    <!--entrada-->
   <?php
      $arg = array(
        'post-type' => 'sport',
        'posts_per_page' => 3
      );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
            ?>

    <div class="card card-deportes deportes">
      <?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
            <div class="card-body">
              <h5 class="card-title"> <?php the_title() ?></h5>
              <p class="card-text"> <?php the_content() ?></p>
            </div>
    </div>

      <?php } wp_reset_postdata();
  ?>
  <!--

  <div class="card card-deportes">
    <h5 class="card-title"><?php //the_title() ?></h5>
    <?php //the_post_thumbnail('full', array('class', 'img-fluid')) ?>
  </div>
  <div class="card card-deportes">

    <img class="card-img-top" src="<?php //echo get_template_directory_uri(); ?>/assets/img/corrida.jpg" alt="Card image cap">
    <h5 class="card-title">Deporte en familia</h5>
      <p class="card-text">Próximamente se realizará la quinta corrida familiar en octubre</p>
  <div class="card-body">
      <p class="card-text"><small class="text-muted">Fecha por confirmar</small></p>
  </div>
  </div>
  -->
   </div>
    </div>
<!-- cierre SECCIÓN DEPORTES -->

<!-- SECCIÓN TIPS NUTRICIONALES -->
<div id="sección-tips-nutricionales""></div>
  <div class="card-deck">
    <div class="card card-nutri nutri card-item">
      <h3>Tips Nutricionales</h3>
      <i class="fas fa-thumbtack"></i>
</div>
  </div>
      <div class="nutri">
        <div class="container card-group">
          <div class="card card-nutri">
            <div class="card-body">
              <h5 class="card-title">TIPS: ¡PREFIERE GUISADOS Y SOPAS!</h5>
              <p class="card-text">Para reponernos de tantos días de festejos, nada mejor que una rica sopa o guisado. El aporte hídrico de estas comidas es bastante importante y te ayudarán a volver bien a tu trabajo o estudios.</p>
              <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/nutri1.png" alt="Card image cap">
      </div>
        </div>
          <div class="card card-nutri">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/nutri2.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"> ¿Sabías que...? </h5>
                <p class="card-text">Caminar 30 minutos diarios contribuye a mejorar tu salud cardiovascular, previene la diabetes, ayuda a bajar de peso y aumenta el estado de ánimo ¡A CAMINAR SE HA DICHO! </p>
                
              </div>
          </div>
          <div class="card card-nutri">
            <h5 class="card-title">TIPS: ¡MANTENTE HIDRATAD@ EN DÍAS DE INTENSO CALOR!</h5>
            <p>Algunos de los síntomas que se presentan cuando estamos deshidratados son: dolor de cabeza, boca seca y orina oscura. Es recomendable tener nuestro organismo hidratado y tomar 6 a 8 vasos de agua al día.</p> 
    
              <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/nutri3.png" alt="Card image cap">
    
          </div>
  </div>
</div>
<!-- CIERRE SECCIÓN TIPS NUTRICIONALES -->

<!-- SECCIÓN RECETAS -->
<div id="sección-recetas"></div>
  <div class="card-deck">
    <div class="card recetas card-item">
      <h3>Recetas</h3>
      <i class="fas fa-mortar-pestle"></i>
    </div>
  </div>
    <div class="recetas">
      <div class="container card-group">
        <div class="card recetas">
          <h5 class="card-title">AVENA HORNEADA CON ARÁNDANOS</h5>
            <p class="card-text">Esta receta de avena horneada sin gluten es un desayuno increíble. Sólo tienes que verte todos los ingredientes y meterla en el horno durante unos 40-45 minutos. ¿No te apetece cocinar por la mañana? Entonces prepárala la noche anterior. La puedes calentar al día siguiente o disfrutarla fría.</p>

              <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/receta-1.jpg" alt="Card image cap">
              <div class="card-body">

                <ul class="lista">
                  INGREDIENTES:
                  <li>2 cucharadas de semillas de chia y 3 cucharadas de agua tibia.</li>
                  <li>2 tazas de avena.</li>
                  <li>1/2 taza de almendras.</li>
                  <li>1/2 taza de semillas de cañamo.</li>
                  <li>2/3 taza de coco rallado.</li>
                  <li>1/4 taza de azúcar de coco.</li>
                  <li>1 cucharadita de canela.</li>
                  <li>3/4 cucharadita de sal marina.</li>
                  <li>3/4 taza de leche de almendras, a temperatura ambiente.</li>
                  <li>1/4 taza de sirope de maple.
                  <li>3 cucharadas de aceite de coco, derretido.</li>
                  <li>1 banana cortada en rodajas.</li>
                  <li>1 taza de frutillas.</li>
                  <li>1/2 taza de arándanos.</li>
                        </ul>

                <ol class="lista">
                  PROCEDIMIENTO:
                  <li>Precalentar el horno a 175 grados
                  Aceitar una fuente con cierta profundidad de 20 x 20 cm.</li>
                  <li>En un bowl pequeño, agregar las semillas de chía y el agua tibia. Dejar activar de 5 a 10 minutos, mientras preparas el resto de la receta.</li>
                  <li>Reservar 2 cucharadas de almendras, semillas de cañamo y coco rallado para incorporar al final de toda la preparación.</li>
                  <li>En un bowl grande, agregar la avena, las almendras, semillas de cañamo, coco rallado, canela, azúcar y sal. Revolver bien hasta incorporar.</li>
                  <li>En otro bowl,  combinar la leche de almendras, el sirope de maple, aceite de coco y batir.</li>
                   <li>Luego agregar las semillas de chia y revolver hasta incorporar.</li>
                  <li>Juntar los ingredientes húmedos y los ingrediente secos, y revolver.</li>
                  <li>Empezar agregando las bananas cortadas en rodajas, y frutillas a la base de nuestra fuente.</li>
                  <li>Agregar sobre esta base, la mezcla de avena. También agregar los arándanos, las almendras, las semillas y el coco que dejamos reservado antes.</li>
                  <li>Llevar a horno por 40-50 minutos. Sacar del horno y dejar enfriar por lo menos 15 minutos.</li>
                  </ol>      

      </div>
    </div>

        <div class="card recetas">
          <h5 class="card-title card-pollo">POLLO CON HUMMUS Y VERDURAS</h5>
            <p class="card-text">Este pollo con hummus y verduras ya es el favorito de Runtastic. Normal, si tenemos en cuenta que es una comida rica en proteínas y ácidos grasos esenciales. Además ni siquiera tienes que comprar el hummus: lo puedes hacer en un pispás con los ingredientes que tienes en la despensa.</p>
              <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/receta-2.jpg" alt="Card image cap">
                <div class="card-body">

                  <ul class="lista">
                    INGREDIENTES:
                    <li>400 gr. de garbanzos</li>
                    <li>80 gr. de sésamo</li>
                    <li>40 gr. de cilantro</li>
                    <li>300 gr. de pechugas de pollo</li>
                    <li>1 cebolla</li>
                    <li>2 dientes de ajo</li>
                    <li>Pimienta negra molida</li>
                    <li>Pimentón dulce</li>
                    <li>1 limón</li>
                    <li>1 pimiento rojo</li>
                    <li>4 tortillas</li>
                  </ul>

                  <ol class="lista">
                    PROCEDIMIENTO:
                      <li>Vamos a empezar con el hummus. Lo primero que tienes que hacer es colar los garbanzos, reservar su caldo y ponerlos en el vaso de la batidora. Machaca hasta que consigas formar una masa sin grumos.</li>
                      <li>Añade al vaso el sésamo, los ajos pelados y partidos por la mitad, el cilantro lavado, el jugo del limón y vuelve a machacar. Añade la pimienta negra y un poco de aceite, mezcla de nuevo y, si está muy sólido, echa un poco de jugo de garbanzos. Remueve y reserva en la nevera. Vamos a por el pollo.</li>
                      <li>Lava la carne y hazla a tacos y haz lo mismo con el pimiento. La cebolla por su parte tienes que pelarla y cortarla tan pequeña como puedas.</li>
                      <li>Pon la cebolla en una sartén con un poco de aceite y espera a que se poche. A continuación añade el pimiento y el pollo y espera diez minutos. Transcurrido este tiempo estará listo.</li>
                      <li>Es hora de montar el plato. Al hummus tienes que ponerle un poco de aceite y el pimentón rojo y colócalo sobre las tortillas. Pon encima el pollo y el pimiento y enrolla. ¡Tu plato ya está perfecto para comer!</li>
                  </ol>
          </div>
        </div>

  </div>
</div>

<!-- CIERRE SECCIÓN RECETAS -->

<!-- SECCIÓN ACTIVIDADES -->
<div id="sección-actividades"></div>
   <div class="card actividades card-item">
    <h3>Actividades</h3>
    <i class="fas fa-calendar-check"></i>
</div>
  </div>

    <div class="actividades">
    <div class="container card-group">
      <div class="card actividades">
        <div class="card-body">
          <h5 class="card-title">Taller Actividad Física para el adulto mayor</h5>
          <p class="card-text">Nuestra gestión municipal continuamente busca contribuir a mejorar la calidad de vida de nuestros adultos mayores, es por esto que, a través del programa Más Adultos Mayores Autovalentes los usuarios del CESFAM Irene Frei participaron del taller de estimulación motora y prevención de caídas impartido por nuestros profesionales de Salud Quilicura en las sedes sociales de las villas San Enrique y Beato Padre Hurtado..</p>
          <img class="card-img-top card-img-manzana" src="<?php echo get_template_directory_uri(); ?>/assets/img/adulto-mayor.png" alt="Card image cap">
        </div>
      </div>
          <div class="card actividades">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/nami1.jpg" alt="Card image cap">
          </div>
            <div class="card actividades">
              <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/nadar3.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">¡Promovemos hábitos saludables!</h5>
                <p class="card-text">Usuarios del programa Vida Sana Quilicura pertenecientes a nuestra red de salud comunal participaron de una entretenida clase de Natación en nuestra piscina Municipal. </p>
                <p>El equipo está compuesto por un nutricionista, un sicólogo y un profesor de educación física, logrando un trabajo integral acorde a las necesidades de los participantes.</p>
              </div>
            </div>
          </div>
        </div>

<!-- ciere SECCIÓN ACTIVIDADES -->

<!--PROGRAMA VIDA SANA-->
<div class="container programa">
  <div class="row">
    <div class="col">
      <h3 class="noticias-title">Programa Vida Sana</h3>
        <i class="fas fa-newspaper"></i>

          <ul class="list-unstyled">
            <li class="media my-4">
              <div class="media-body">
                Requisitos: No ser diabético. No ser hipertenso. Presentar sobrepeso u obesidad. Estar inscrito en un Centro de Salud de la comuna y tener entre 2 y 64 años.
              </div>
            </li>
            <li class="media">
              <img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/javier.png" alt="Generic placeholder image">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Javier Videla</h5>
                  Javier Videla, encargado del Programa cuenta que “este año fue todo un éxito. Nosotros llevamos desde el año 2012 con esto. <br>
                  Por primera vez se incluyó a niños desde los dos años, ya que a más temprana edad  los resultados son más efectivos".
                </div>
            </li>
          </ul>
    </div>
      <div class="col">
        <ul class="list-unstyled">
          <li class="media">
            <img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/celindaYnieto.png" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0 mb-1">Celinda Muñoz y su nieto Ángel Orrego</h5>
              “Hay antecedentes en la familia de diabetes y el papá de mi nieto tenía sobrepeso, entonces decidí que él no fuera por el mismo camino, porque es mejor prevenir desde pequeño”.
            </div>
          </li>
          <li class="media my-4">
            <img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/maría.png" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0 mb-1"> María Rojas</h5>
             “He bajado ya 10 kilos con el programa y me ha dado mucho más ánimo, ya que estuve con depresión. Mi ropa me queda buena y me hace feliz. Recomiendo a todos quienes quieran sentirse mejor que entren al programa”.
            </div>
          </li>
        <li class="media">
          <img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/josé.png" alt="Generic placeholder image">
          <div class="media-body">
            <h5 class="mt-0 mb-1"> José Gatica</h5>
            Afirmó que "lo más difícil fue dejar las papas fritas y los completos. Pero ya he bajado 11 kilos. Cambié harto y crecí. La gente me dice que estoy muy cambiado”.
          </div>
        </li>
      </ul>
    </div>
  </div>

<!-- SECCIÓN CONTACTO -->
<div class="row contacto">
  <div class="col">
    <div id="sección-contacto">
      <h2 class="contacto">¡CONTÁCTANOS!</h2>
        <div class="container container-contacto">
          <?php echo do_shortcode('[contact-form-7 id="5" title="Formulario de contacto 1"]') ?>
        </div>
    </div>  
  </div>
</div>
</div>
<!--CIERRE CONTACTO-->
<!--CIERRE PROGRAMA VIDA SANA-->

<!--línea de colores 2-->
<div class="card-deck colores">
      <div class="card deportes card-item">
       <h2></h2> 
      </div>
      <div class="card card-nutri nutri card-item">
       <h2></h2> 
      </div>
      <div class="card recetas card-item">
        <h2></h2> 
      </div>
      <div class="card actividades card-item">
        <h2></h2> 
      </div>
      <div class="card recetas card-item">
        <h2></h2> 
      </div>
      <div class="card card-nutri nutri card-item">
        <h2></h2> 
      </div>
      <div class="card deportes card-item">
        <h2></h2> 
      </div>
</div>
<!--cierra línea de colores 2-->

<?php get_footer(); ?>