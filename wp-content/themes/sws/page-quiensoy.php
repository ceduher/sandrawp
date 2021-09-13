<?php
// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();
?>
<div id="author">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/autor-quiensoy.png">
</div> 
<div class="content shadow-bg">
    <div class="banner-title">
        <p>
            <span>¿CÓMO ME</span><br/>
            <span>DEFINO EN POCAS</span><br/>
            <span>PALABRAS?</span>
        </p>                                    
  </div>
    <div class="content-subtitle">
      <span class="subtitle"><span class="text-up">Venezolana, mamá, nutricionista <br>deportiva, maratonista</span>
         y adicta a sentirme bien y llena de endorfinas gracias al ejercicio.</span>
    </div>
    <div class="content-more">
        <a class="read-more" href="/quien-soy-detalles/">Leer más &gt;</a>
    </div>
</div>

<?php          
get_footer();