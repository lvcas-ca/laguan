<?php /* Template Name: quienes */ ?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!--FUENTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Roboto:ital,wght@0,300;0,400;0,500;0,900;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KZRLCM4');
    </script>
    <!-- End Google Tag Manager -->


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZRLCM4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
    wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'laguan'); ?></a>

        <header id="masthead" class="site-header">
            <?php wp_loading(); ?>
            <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar.d-lg-block 0 pt-0" id="miNav3">
                <div class="container-fluid bg-white">
                    <a class="navbar-brand" href="https://laguan.com.ar/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-laguan-negro.png" alt="Logo LaGuan" width="200"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="https://laguan.com.ar/quienes-somos/">QUIÉNES SOMOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://laguan.com.ar/#viajes">EXPERIENCIAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://laguan.com.ar/#testimonios">Testimonios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://laguan.com.ar/#contacto">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <script>
                var myNav3 = document.getElementById('miNav3')
                var bsCollapse3 = new bootstrap.Collapse(myNav3.querySelector('.navbar-collapse'))
                myNav3.querySelector('.navbar-toggler').addEventListener('click', function() {
                    bsCollapse3.toggle()
                })

                window.addEventListener('load', function() {
                    const loading = document.querySelector('.loading');
                    loading.style.display = 'none';
                });
            </script>

        </header><!-- #masthead -->

        <main id="primary" class="site-main">
            <section class="quienes-somos-container" id="quienes">
                <h1>QUIÉNES SOMOS</h1>
                <div class="img-text-quienes-somos">
                    <img class="img-cards-stories" src="<?php echo get_template_directory_uri(); ?>/img/cards-stories.png" alt="Mente" loading="lazy">
                    <p>
                        LaGuan es tu espacio de encuentro en viajes con código gay para integrarte con personas que están o se sienten solas por medio de salidas, "escapadas" y viajes  grupales.
                        <br>
                        LaGuan es el espacio de referencia para todas aquellas personas que necesitan sentirse contenidas, integradas, en un ambiente seguro y con los mismos códigos de socialización.
                        <br>
                        Nuestros valores son la Amistad, la Autenticidad y la Humanidad.
                        Nuestro compromiso es hacerte vivir una experiencia diferente de socialización que marque en tu vida un antes y un después.
                        <br>
                        Somos LaGuan, tu rebaño de ovejas arcoiris.
                    </p>
                </div>
            </section>

            <section class="fundadores-container">
                <h1>FUNDADORES</h1>
                <div class="fundadores">
                    <div class="fundador">
                        <img class="img-cards-stories" src="<?php echo get_template_directory_uri(); ?>/img/fundador-1.png" alt="ceo de laguan" loading="lazy">
                        <p>Hernán Sankovic </p>
                        <span>CEO</span>
                        <div class="redes">
                            <a href="https://www.facebook.com/profile.php?id=100065482843417" target="_blank"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/facebook-fundadores.png" alt="facebook icon" loading="lazy"></a>
                            <a href="https://www.instagram.com/sankovichernan/" target="_blank"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/red2.png" alt="Instagram icono" loading="lazy"></a>

                        </div>
                    </div>
                    <div class="fundador">
                        <img class="img-cards-stories" src="<?php echo get_template_directory_uri(); ?>/img/fundador-2.png" alt="Ceo de Laguan" loading="lazy">
                        <p>Seba Gabe</p>
                        <span>CEO</span>
                        <div class="redes">
                            <a href="https://www.facebook.com/sebagabeoficial" target="_blank"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/facebook-fundadores.png" alt="facebook icon" loading="lazy"></a>
                            <a href="https://www.instagram.com/sebagabe/?hl=es" target="_blank"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/red2.png" alt="Instagram icono" loading="lazy"></a>
                        </div>
                    </div>
                </div>

            </section>

            <section class="porque-elegirnos-container">
              <h1>POR QUE ELEGIRNOS</h1>
              <p>Si estás buscando experiencias únicas y auténticas, LaGuan es la elección ideal para vos. Nosotros entendemos la importancia de brindar destinos y servicios que sean inclusivos y amigables con la comunidad gay, ¡así que preparate para vivir momentos cargados de diversión y alegría!</p>

              <h2>Viajes para gays: Descubrí Argentina sin límites</h2>
              <p>En LaGuan, te ofrecemos viajes especialmente diseñados para vos. Nuestros expertos en viajes han seleccionado cuidadosamente los destinos y actividades más emocionantes y auténticos que Argentina tienen para ofrecer. Desde recorridos culturales y gastronómicos hasta fiestas exclusivas, nuestros viajes para gays están pensados especialmente para complacer tus intereses y preferencias.</p>

              <h2>Escapadas gays: Vive momentos inolvidables</h2>
              <p>¿Estás buscando una escapada de fin de semana o unas vacaciones cortas? Nuestras escapadas gays son la opción perfecta para relajarte y disfrutar de experiencias inolvidables. Te ofrecemos una amplia variedad de opciones, desde salidas nocturnas vibrantes en los barrios más populares de Buenos Aires hasta recorridos por encantadores destinos en Argentina. Sea cual sea tu idea de una escapada perfecta, LaGuan tiene el paquete ideal para vos.</p>

              <h2>Destinos gay friendly: Descubrí Argentina</h2>
              <p>Argentina es un país conocido por su apertura y tolerancia hacia la comunidad gay. En LaGuan, hemos elegido cuidadosamente los destinos más amigables y respetuosos en todo el país para asegurarnos de que disfrutes de una experiencia de viaje segura y acogedora. Desde Buenos Aires, con su vibrante escena, hasta las maravillas naturales de la Patagonia y las bodegas de Mendoza, cada destino que ofrecemos te brinda una perspectiva auténtica de Argentina y te permite conectar con la cultura local.</p>
              
              <h2>Hoteles para gays: Comodidad y estilo</h2>
              <p>En LaGuan, nos preocupamos por tu comodidad y bienestar durante tu estadía. Por eso, hemos seleccionado cuidadosamente una amplia variedad de hoteles gay friendly en Buenos Aires y en toda Argentina. Nuestros hoteles ofrecen alojamientos de calidad, atención personalizada y un ambiente inclusivo donde te sentirás bienvenido y respetado. </p>
              
              <h2>Viajes gay friendly: Conectate con otros viajeros</h2>
              <p>En LaGuan, creemos que viajar es una oportunidad para hacer conexiones significativas con otras personas. Por eso, organizamos viajes gay friendly que te brindan la oportunidad de conocer a otros viajeros que comparten tus gustos y preferencias. Ya sea que viajes solo o en pareja, nuestros viajes te permitirán conectar con personas afines, compartir experiencias y crear recuerdos duraderos. Disfrutá de la compañía de otros viajeros mientras explorás Buenos Aires y Argentina juntos.</p>
              
              <h2>Grupo gay de Hombres: Conectando con Nuevos Amigos</h2>
              <p>En LaGuan, nos esforzamos por crear un espacio inclusivo y respetuoso para todos nuestros viajeros. Nuestro objetivo es que te sientas parte de una comunidad donde puedas conectar con otros hombres gay, compartir tus experiencias de viaje y crear recuerdos inolvidables juntos.</p>
           
              <h2>Viajar solo gay: Libertad y empoderamiento</h2>
              <p>Si sos un viajero solitario, en LaGuan te invitamos a disfrutar de la libertad y el empoderamiento que te brinda viajar solo. Buenos Aires y Argentina son destinos seguros y acogedores para los viajeros gay que desean explorar por su cuenta. Te proporcionaremos toda la información y el apoyo que necesitás para que te sientas seguro y confiado durante tu viaje en solitario. Descubrí nuevas experiencias, hacé amistades mientras te sumergís en la cultura y la belleza de Argentina.</p>
              
              <h2>Vacaciones para gays: Experiencias inolvidables</h2>
              <p>En LaGuan, nos apasiona brindarte la mejor experiencia de viaje gay en Buenos Aires y Argentina. Nuestro compromiso con la calidad, la autenticidad y la inclusión nos distingue como la opción ideal para los viajeros gay que desean explorar y conectarse con la cultura y la belleza de Argentina. Vení y descubrí por qué elegirnos marca la diferencia en tus próximas aventuras en Argentina.</p>
            </section>
        </main>

        <footer id="colophon" class="site-footer">
            <a href="https://laguan.com.ar/"><img class="llamada" src="<?php echo get_template_directory_uri(); ?>/img/lofo-footer.webp" alt="Logo footer" loading="lazy"></a>
            <nav>
                <ul>
                    <li><a href="https://laguan.com.ar/quienes-somos/">Quiénes somos</a></li>
                    <li><a href="https://laguan.com.ar/#viajes">Experiencias</a></li>
                    <li><a href="https://laguan.com.ar/#testimonios">Testimonios</a></li>
                    <li><a href="https://laguan.com.ar/#contacto">Contacto</a></li>
                </ul>
            </nav>
            <div class="enlaces-footer">
                <a href="https://www.facebook.com/LaGuanOK/?locale=es_LA" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-footer.png" alt="Logo facebook footer" loading="lazy"></a>
                <a href="https://www.instagram.com/laguanok/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram-footer.png" alt="Logo instagram footer" loading="lazy"></a>
            </div>

            <a class="logo-sw-fixed" href="https://wa.me/1141649090" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" alt="Logo ws" loading="lazy"></a>

        </footer><!-- #colophon -->