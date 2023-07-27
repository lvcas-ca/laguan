<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LaGuan
 */

get_header();
?>

<section class="post-header">
  <div class="text-img-container">
    <div class="text-header">
      <h1>
        Entretenimiento.<br>
        Aventura.<br>
        Amigos.<br>
        All Gay
      </h1>
      <p>
        Tu rebaño de ovejas arcoíris.
        Espacio de Encuentro en Viajes
        con código Gay
      </p>
    </div>

    <img class="img-header"
     srcset="
             <?php echo get_template_directory_uri(); ?>/img/PT_Mente-mobile.png 768w,
             <?php echo get_template_directory_uri(); ?>/img/PT_Mente.png 1200w"
     sizes="(max-width: 320px) 280px,
            (max-width: 768px) 730px,
            1140px"
     src="<?php echo get_template_directory_uri(); ?>/img/PT_Mente.png"
     alt="Mente" loading="lazy">
    
    
    
  </div>
</section>

<main id="primary" class="site-main">
  <h1 id="viajes">Viví aventuras únicas con LaGuan</h1>
  <p class="subtitulo-viaje">¡Explorá nuevos destinos, hacé amigos increíbles y viví experiencias inolvidables!</p>
  <section class="tarjetas-viajes-container">
    <?php
    $latest_posts = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => 10,
      'meta_key' => 'fecha_inicio', // Ordenar por el campo "fecha_inicio"
      'orderby' => 'meta_value', // Ordenar según el valor del campo personalizado
      'order' => 'ASC', // Orden ascendente (cambia a 'DESC' si deseas orden descendente)
    ));

    if ($latest_posts->have_posts()) :
      while ($latest_posts->have_posts()) : $latest_posts->the_post();

        $tarjeta_imagen = get_field('imagen-card');
        $tarjeta_destino = get_field('destino');
        $tarjeta_resumen = get_field('resumen');
        $tarjeta_fecha_inicio = get_field('fecha_inicio');
        $tarjeta_fecha_finalizacion = get_field('fecha_finalizacion');
        $tarjeta_agotado = get_field('agotado');
        $tarjeta_soon = get_field('soon');

        $boton_texto = $tarjeta_agotado ? 'COMPLETO' : ($tarjeta_soon ? 'MUY PRONTO' : '+Info');
        $boton_clase = $tarjeta_agotado ? 'agotado' : ($tarjeta_soon ? 'coming-soon' : 'info');
    ?>
        <div class="card">
          <a href="<?php echo esc_url(get_permalink()); ?>">
            <img src="<?php echo esc_url($tarjeta_imagen['url']); ?>" alt="<?php echo esc_attr($tarjeta_imagen['alt']); ?>" loading="lazy">
          </a>

          <div class="info-card">
            <div class="titulo-destino">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/img/mapa-icon.webp" alt="Mapa icon" loading="lazy">
              <p class="nombre-destino"><?php echo esc_html($tarjeta_destino); ?></p>
            </div>

            <p class="info-resumen"><?php echo esc_html($tarjeta_resumen); ?></p>

            <div class="fecha-btn-container">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $tarjeta_agotado ? 'Navigation-sold-out.png' : ($tarjeta_soon ? 'Navigation-coming-soon.png' : 'Navigation.png'); ?>" alt="Mapa icon" loading="lazy">
              <p><?php echo esc_html($tarjeta_fecha_inicio); ?> - <?php echo esc_html($tarjeta_fecha_finalizacion); ?></p>

              <?php if ($tarjeta_agotado) { ?>
                <button class="<?php echo esc_attr($boton_clase); ?>"><?php echo esc_html($boton_texto); ?></button>
              <?php } elseif ($tarjeta_soon) { ?>
                <a href="<?php the_permalink(); ?>">
                  <button class="coming-soon">MUY PRONTO</button>
                </a>
              <?php } else { ?>
                <a href="<?php the_permalink(); ?>">
                  <button class="<?php echo esc_attr($boton_clase); ?>"><?php echo esc_html($boton_texto); ?></button>
                </a>
              <?php } ?>

            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </section>

</main>

<section class="miembros-container">
  <h1>Convertite en miembro de LaGuan</h1>
  <p>disfrutá de beneficios exclusivos</p>

   
  <div id="miCarrusel1" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true" data-bs-interval="5000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/img/membresia-1-w.webp" alt="Mente" loading="lazy">
      </div>
      <div class="carousel-item">
        <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/img/membresia-2-w.webp" alt="Mente" loading="lazy">
      </div>
      <div class="carousel-item">
        <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/img/membresia-3-w.webp" alt="Mente" loading="lazy">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#miCarrusel1" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#miCarrusel1" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>



  <div class="formulario-container">
    <p class="txt-form">Completá el formulario para poder obtener más información sobre las membresías</p>
    <?php echo do_shortcode('[contact-form-7 id="6" title="Formulario de contacto 1"]'); ?>
  </div>

</section>

<section class="testimonios-container" id="testimonios">
  <h1>TESTIMONIOS</h1>
  <p>#LaGuanBoy</p>

  <div id="miCarrusel2" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true" data-bs-interval="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card-testimonio">
          <p class="nombre">Manu</p>
          <img class="dots" src="<?php echo get_template_directory_uri(); ?>/img/dots.webp" alt="Dots" loading="lazy">
          <div class="info-testimonio">
            <div class="avatar"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/manu-avatar-mobile.webp" alt="Manu Avatar" loading="lazy"></div>
            <div class="info">
              <div class="nombre-experiencia">Experiencia Calafate</div>
              <div class="rating">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.webp" alt="Manu Avatar" loading="lazy">
                <span><strong>50</strong> Rating</span>
              </div>
            </div>
          </div>
          <hr class="hr">
          <div class="imagen-txt-container-desk">
            <img class="avatar-desk" src="<?php echo get_template_directory_uri(); ?>/img/manu.webp" alt="Manu Avatar" loading="lazy">
            <div class="info-version-desk">
              <div class="rating-desk">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.png" alt="Manu Avatar" loading="lazy">
                <span><strong>50</strong> Rating</span>
              </div>
              <p class="txt-testimonio manu">
                “Viajar con "LaGuan" no es solo viajar, es vivir una experiencia diferente, es atreverse a dejar los miedos atrás, atreverse a ser uno mismo, atreverse a vivir como uno tiene ganas.Viajar con "LaGuan" es reír si queres reír, jugar si queres jugar, bailar si queres bailar, llorar si queres llorar, pero siempre desde la premisa de estar acompañados entre nosotros, personas que vivimos diferentes realidades, pero que nos conectan los mismos códigos, el mismo vocabulario, las mismas inquietudes y los mismos sueños, personas que aprendimos a sobrevivir en un mundo lleno de dificultades, que se encargó sistemáticamente de poco a poco llevarnos hacia un costado, pero espacios como los de "LaGuan" llegan para ponernos las botas de nieve, y escalar esas montañas que nos obligaron a ver siempre de abajo. Representar nuestras verdades, nuestro amor, nuestro cariño, nuestra manera llena de color de ver el mundo, eso es lo que hace "LaGuan", nos agrupa, nos contiene, nos abraza con amor y nos hace sentir orgullosos de pertenecer a un colectivo tan hermoso como el LGTBQ+, que tiene mucho mas para brindar al mundo de lo que nosotros mismos pensamos.Siempre fui una oveja negra, en mis grupos, mi familia, mi ambiente, pero por fin, después de tanto tiempo, puedo decir que encontré una manada nueva, una que no me juzgaba por ser una oveja negra, al contrario, éramos una gran familia de ovejas negras ✨️💞 Gracias @sebagabe por tu acompañamiento incondicional para con el grupo. Gracias compañeros por hacerme vivir una experiencia inolvidable, aprendí a quererlos en muy poco tiempo.Gracias y nos vemos pronto”
              </p>
              <p class="nombre-desk">Manu</p>
              <span class="experiencia-desk">Experiencia Calafate</span>
            </div>
          </div>

        </div>
      </div>
      <div class="carousel-item">
        <div class="card-testimonio">
          <p class="nombre">RODRI</p>
          <img class="dots" src="<?php echo get_template_directory_uri(); ?>/img/dots.webp" alt="Dots" loading="lazy">
          <div class="info-testimonio">
            <div class="avatar"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/rodri-avatar-mobile.webp" alt="Manu Avatar" loading="lazy"></div>
            <div class="info">
              <div class="nombre-experiencia">Aventura San Rafael</div>
              <div class="rating">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.webp" alt="Manu Avatar" loading="lazy">
                <span><strong>50</strong> Rating</span>
              </div>
            </div>
          </div>
          <hr class="hr">
          <div class="imagen-txt-container-desk">
            <img class="avatar-desk" src="<?php echo get_template_directory_uri(); ?>/img/rodri.webp" alt="Rodri Avatar" loading="lazy">
            <div class="info-version-desk">
              <div class="rating-desk">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.png" alt="Manu Avatar" loading="lazy">
                <span><strong>50</strong> Rating</span>
              </div>
              <p class="txt-testimonio rodri">RODRI eligió a LaGuan para disfrutar de una escapada para divertirse y conocer gente: “Buenísima la experiencia! Los chicos muy copados y atentos. Las fiestas que armaron y la animación de las chicas (Roxy y Psico) fueron lo mejor del viaje. Realmente lo pasamos genial y nos divertimos mucho!!”</p>
              <p class="nombre-desk">RODRI</p>
              <span class="experiencia-desk">Aventura San Rafael</span>
            </div>
          </div>

        </div>
      </div>
      <div class="carousel-item">
        <div class="card-testimonio">
          <p class="nombre">ADRI</p>
          <img class="dots" src="<?php echo get_template_directory_uri(); ?>/img/dots.webp" alt="Dots" loading="lazy">
          <div class="info-testimonio">
            <div class="avatar"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/adri-avatar-mobile.webp" alt="Manu Avatar" loading="lazy"></div>
            <div class="info">
              <div class="nombre-experiencia">Experiencia Costa del Este</div>
              <div class="rating">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.webp" alt="Manu Avatar" loading="lazy">
                <span><strong>50</strong> Rating</span>
              </div>
            </div>
          </div>
          <hr class="hr">
          <div class="imagen-txt-container-desk">
            <img class="avatar-desk" src="<?php echo get_template_directory_uri(); ?>/img/adri.webp" alt="Rodri Avatar" loading="lazy">
            <div class="info-version-desk">
              <div class="rating-desk">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.png" alt="Manu Avatar" loading="lazy">
                <span><strong>50</strong> Rating</span>
              </div>
              <p class="txt-testimonio adri">“Haberse animado y encontrar a otras personas que tienen tus mismos códigos y saber que los mueve algo en común, tener una experiencia única e irrepetible.En distintos escenarios siempre lo que prima es el respeto, la buena onda y muuuchas ganas de pasar un buen momento. Nunca imaginé encontrar un grupo así. A veces más unidos, otras más dispersos. En Costa del Este se vivieron momentos de complicidad y diversión. Cada ratito fue único desde el ensayo de la coreo de #gayloween en la playa hasta el desayuno casi obligado en la cabaña 4. Todo, tooodo eso, sumergidos en un bosquecito casi encantado como es el @complejolapausa LaPausa. Con #LaGuan siempre estás entre conocidos y xq no?, amigos que hacen esta vida mucho más linda.Hablábamos hace unos días de que es la felicidad?Y SI Señores ésto también es la felicidad. 🤗🤗🤗”
              </p>
              <p class="nombre-desk">ADRI</p>
              <span class="experiencia-desk">Experiencia Costa del Este</span>
            </div>
          </div>

        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#miCarrusel2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#miCarrusel2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>

    <!--

   <swiper-container class="mySwiper" pagination="true" navigation="true" auto-height="true">
    <swiper-slide>
      <div class="card-testimonio">
        <p class="nombre">Manu</p>
        <img class="dots" src="<?php echo get_template_directory_uri(); ?>/img/dots.webp" alt="Dots" loading="lazy">
        <div class="info-testimonio">
          <div class="avatar"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/manu-avatar-mobile.webp" alt="Manu Avatar" loading="lazy"></div>
          <div class="info">
            <div class="nombre-experiencia">Experiencia Calafate</div>
            <div class="rating">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.webp" alt="Manu Avatar" loading="lazy">
              <span><strong>50</strong> Rating</span>
            </div>
          </div>
        </div>
        <hr class="hr">
        <div class="imagen-txt-container-desk">
          <img class="avatar-desk" src="<?php echo get_template_directory_uri(); ?>/img/manu.webp" alt="Manu Avatar" loading="lazy">
          <div class="info-version-desk">
            <div class="rating-desk">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.png" alt="Manu Avatar" loading="lazy">
              <span><strong>50</strong> Rating</span>
            </div>
            <p class="txt-testimonio manu">
              <span class="">“Viajar con "LaGuan" no es solo viajar, es vivir una experiencia diferente, es atreverse a dejar los miedos atrás, atreverse a ser uno mismo, atreverse a vivir como uno tiene ganas.Viajar con "LaGuan" es reír si queres reír, jugar si queres jugar, bailar si queres bailar, llorar si queres llorar, pero siempre desde la premisa de estar acompañados entre nosotros, personas que vivimos diferentes realidades, pero que nos conectan los mismos códigos, el mismo vocabulario, las mismas inquietudes y los mismos sueños, personas que aprendimos a sobrevivir en un mundo lleno de dificultades, que se encargó sistemáticamente de poco a poco llevarnos hacia un costado, pero espacios como los de "LaGuan" llegan para ponernos las botas de nieve, y escalar esas montañas que nos obligaron a ver siempre de abajo. Representar nuestras verdades, nuestro amor, nuestro cariño, nuestra manera llena de color de ver el mundo, eso es lo que hace "LaGuan", nos agrupa, nos contiene, nos abraza con amor y nos hace sentir orgullosos de pertenecer a un colectivo tan hermoso como el LGTBQ+, que tiene mucho mas para brindar al mundo de lo que nosotros mismos pensamos.Siempre fui una oveja negra, en mis grupos, mi familia, mi ambiente, pero por fin, después de tanto tiempo, puedo decir que encontré una manada nueva, una que no me juzgaba por ser una oveja negra, al contrario, éramos una gran familia de ovejas negras ✨️💞 Gracias @sebagabe por tu acompañamiento incondicional para con el grupo. Gracias compañeros por hacerme vivir una experiencia inolvidable, aprendí a quererlos en muy poco tiempo.Gracias y nos vemos pronto”</span>
            </p>
            <p class="nombre-desk">Manu</p>
            <span class="experiencia-desk">Experiencia calafate</span>
          </div>
        </div>

      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="card-testimonio">
      <p class="nombre">RODRI</p>
      <img class="dots" src="<?php echo get_template_directory_uri(); ?>/img/dots.webp" alt="Dots" loading="lazy">
      <div class="info-testimonio">
        <div class="avatar"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/rodri-avatar-mobile.webp" alt="Manu Avatar" loading="lazy"></div>
        <div class="info">
          <div class="nombre-experiencia">AVENTURA IGUAZÚ</div>
          <div class="rating">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.webp" alt="Manu Avatar" loading="lazy">
            <span><strong>50</strong> Rating</span>
          </div>
        </div>
      </div>
      <hr class="hr">
      <div class="imagen-txt-container-desk">
        <img class="avatar-desk" src="<?php echo get_template_directory_uri(); ?>/img/rodri.webp" alt="Rodri Avatar" loading="lazy">
        <div class="info-version-desk">
          <div class="rating-desk">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.png" alt="Manu Avatar" loading="lazy">
            <span><strong>50</strong> Rating</span>
          </div>
          <p class="txt-testimonio rodri">RODRI eligió a LaGuan para disfrutar de una escapada para divertirse y conocer gente. Sabe que se viene la #AventuraIguazuALLGAYy nos cuenta: “Buenísima la experiencia! Los chicos muy copados y atentos. Las fiestas que armaron y la animación de las chicas (Roxy y Psico) fueron lo mejor del viaje. Realmente lo pasamos genial y nos divertimos mucho!!”</p>
          <p class="nombre-desk">RODRI</p>
          <span class="experiencia-desk">Aventura Iguazú</span>
        </div>
      </div>

      </div>
    </swiper-slide>
    <swiper-slide>
        <div class="card-testimonio">
        <p class="nombre">ADRI</p>
        <img class="dots" src="<?php echo get_template_directory_uri(); ?>/img/dots.webp" alt="Dots" loading="lazy">
        <div class="info-testimonio">
          <div class="avatar"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/adri-avatar-mobile.webp" alt="Manu Avatar" loading="lazy"></div>
          <div class="info">
            <div class="nombre-experiencia">Experiencia Costa del Este</div>
            <div class="rating">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.webp" alt="Manu Avatar" loading="lazy">
              <span><strong>50</strong> Rating</span>
            </div>
          </div>
        </div>
        <hr class="hr">
        <div class="imagen-txt-container-desk">
          <img class="avatar-desk" src="<?php echo get_template_directory_uri(); ?>/img/adri.webp" alt="Rodri Avatar" loading="lazy">
          <div class="info-version-desk">
            <div class="rating-desk">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/img/estrellas.png" alt="Manu Avatar" loading="lazy">
              <span><strong>50</strong> Rating</span>
            </div>
            <p class="txt-testimonio adri">“Haberse animado y encontrar a otras personas que tienen tus mismos códigos y saber que los mueve algo en común, tener una experiencia única e irrepetible.En distintos escenarios siempre lo que prima es el respeto, la buena onda y muuuchas ganas de pasar un buen momento. Nunca imaginé encontrar un grupo así. A veces más unidos, otras más dispersos. En Costa del Este se vivieron momentos de complicidad y diversión. Cada ratito fue único desde el ensayo de la coreo de #gayloween en la playa hasta el desayuno casi obligado en la cabaña 4. Todo, tooodo eso, sumergidos en un bosquecito casi encantado como es el @complejolapausa LaPausa. Con #LaGuan siempre estás entre conocidos y xq no?, amigos que hacen esta vida mucho más linda.Hablábamos hace unos días de que es la felicidad?Y SI Señores ésto también es la felicidad. 🤗🤗🤗”
            </p>
            <p class="nombre-desk">ADRI</p>
            <span class="experiencia-desk">Experiencia Costa del Este</span>
          </div>
        </div>

      </div>  
    </swiper-slide>
   
  </swiper-container>
  -->





    <style>
      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        background-color: #5d5dffad;
        /* cambia este valor al color que desees */
      }

      .carousel-item {
        transition: transform 0.8s ease-in-out;

      }

      .swiper-slide {
        margin: 0 auto;
      }
    </style>
</section>

<section class="contacto-container" id="contacto">
  <h1>Conectate con LaGuan</h1>
  <p>¡No te pierdas nuestras últimas novedades! ¡Seguinos en Instagram para estar al día de todo lo que tenemos preparado para vos!</p>
  <div class="buttons-container">
    <a href="tel:+541141649090"><img class="llamada" src="<?php echo get_template_directory_uri(); ?>/img/icono-llamada.png" alt="Icono llamada" loading="lazy">LLAMAR AHORA</a>
    <a href="https://www.instagram.com/laguanok/" target="_blank"><img class="Instagram" src="<?php echo get_template_directory_uri(); ?>/img/icono-instagram.png" alt="Icono Instagram" loading="lazy">@LAGUANOK</a>
    <a href="mailto:info@laguan.com.ar" target="_blank"><img class="correo" src="<?php echo get_template_directory_uri(); ?>/img/Icono-correo.png" alt="Icono correo" loading="lazy">info@laguan.com.ar</a>
  </div>
</section>

<?php

get_footer();
