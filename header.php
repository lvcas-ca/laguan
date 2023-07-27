<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LaGuan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="description" content='LaGuan es tu espacio de encuentro en viajes con código gay para integrarte con personas que están o se sienten solas por medio de salidas, "escapadas" y viajes  grupales.
LaGuan es el espacio de referencia para todas aquellas personas que necesitan sentirse contenidas, integradas, en un ambiente seguro y con los mismos códigos de socialización.'>
   
    <!--FUENTES-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Roboto:ital,wght@0,300;0,400;0,500;0,900;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

	<!--GOOGLE SEARCH CONSOLE-->
	<meta name="google-site-verification" content="2WVxyvIOtSZZ0lcCsOV20t7bRnmmaDuUkU7dsXFj9sg" />



	
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-4K8QWDYVYF"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-4K8QWDYVYF');
	</script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KZRLCM4');</script>
    <!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZRLCM4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php wp_body_open(); ?>

<div id="page" class="site">
	
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'laguan' ); ?></a>

	<header id="masthead" class="site-header">
	    <?php wp_loading(); ?>
		<nav class="navbar fixed-top navbar-expand-lg navbar-light navbar.d-lg-block 0 pt-0" id="miNav1">
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
						<a class="nav-link" href="#viajes">EXPERIENCIAS</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#testimonios">Testimonios</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#contacto">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->
