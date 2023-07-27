<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package LaGuan
 */
?>
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

				window.addEventListener('load', function () {
					const loading = document.querySelector('.loading');
					loading.style.display = 'none';
				});
			</script>

		</header><!-- #masthead -->

		

		<main id="primary" class="site-main">
			<div class="entry-content">
				<?php
				// Recupera los valores de los campos ACF
				$imagen = get_field('imagen');
				$titulo = get_field('titulo');
				$diasfecha = get_field('diasfecha_de_experiencia');
				$presentacion = get_field('presentacion_de_experiencia');
				$itinerario = get_field('itinerario');
				$tarjeta_soon = get_field('soon');
				$pdf = get_field('pdf');
				?>

				<!-- Muestra los valores de los campos ACF en la entrada -->
				<?php if ($imagen) : ?>
					<div class="imagen-portada" style="background-image: url('<?php echo $imagen['url']; ?>');">
						<!-- Contenido -->
					</div>
				<?php endif; ?>

				<?php if ($titulo) : ?>
					<h2 class="titulo"><?php echo esc_html($titulo); ?></h2>
				<?php endif; ?>

				<?php if ($diasfecha) : ?>
					<p class="fecha_dia"><strong>Duración:</strong> <?php echo esc_html($diasfecha); ?></p>
				<?php endif; ?>

				<?php if ($presentacion) : ?>
					<div class="presentacion"><?php echo $presentacion; ?></div>
				<?php endif; ?>

				<?php if ($itinerario) : ?>
					<div class="itinerario"><?php echo $itinerario; ?></div>
				<?php endif; ?>

				<?php if ($tarjeta_soon) : ?>
					<div class="formulario-container-soon">
					<?php
						echo do_shortcode('[contact-form-7 id="128" title="Formulario Coming Soon"]');
						?>
					</div>
				<?php endif; ?>

				<?php
				

			
				?>


				

				<?php if ($pdf) : ?>
					<div class="btn-container">
						<a class="btn-itinerario" href="<?php echo esc_url($pdf['url']); ?>">DESCARGAR ITINERARIO COMPLETO</a>
					</div>

				<?php endif; ?>
			</div><!-- .entry-content -->

		</main><!-- #main -->

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

	<?php
