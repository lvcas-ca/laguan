<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LaGuan
 */

?>

	<footer id="colophon" class="site-footer">
	    <a href="https://laguan.com.ar/"><img class="llamada" src="<?php echo get_template_directory_uri(); ?>/img/lofo-footer.webp" alt="Logo footer" loading="lazy"></a>
	
		<nav>
			<ul>
				<li><a href="https://laguan.com.ar/quienes-somos/">Quiénes somos</a></li>
				<li><a href="#viajes">Experiencias</a></li>
				<li><a href="#testimonios">Testimonios</a></li>
				<li><a href="#contacto">Contacto</a></li>
			</ul>
		</nav>
		<div class="enlaces-footer">
			<a href="https://www.facebook.com/LaGuanOK/?locale=es_LA" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-footer.png" alt="Logo facebook footer" loading="lazy"></a>
			<a href="https://www.instagram.com/laguanok/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram-footer.png" alt="Logo instagram footer" loading="lazy"></a>
		</div>

		<a class="logo-sw-fixed" href="https://wa.me/1141649090" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" alt="Logo ws" loading="lazy"></a>
		
 
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>
