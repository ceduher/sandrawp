<?php
/**
* Plantilla para todas las páginas
*/

// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();?>

<div id="author">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sandra-complete.webp" loading="lazy">
</div> 
<div class="content">
	<div class="banner-title">
	    <p>DE DEPORTISTA</p>
	    <p>A DEPORTISTA</p>
	</div>
	<p class="banner-subtitle">Buscas asesoría nutricional para:</p>
	<ul class="banner-list">
	      <li>Mejorar tu rendimiento deportivo.</li>
	      <li>Desarrollar estrategias de nutrición e hidratación para tus entrenamientos y competencias.</li><li>Lograr el peso y/o composición corporal adecuado a tu disciplina deportiva.</li>
	</ul>
	 <p class="banner-pie" id="banner-pie">¡Estas en el sitio indicado!</p>
</div>          
<div class="block-author">
 	<p class="name-autor-photo text-right">Sandra Suárez Leña</p>
 	<p class="profesion-autor-photo text-right">Nutricionista deportiva</p>
</div> 
<?php get_footer();