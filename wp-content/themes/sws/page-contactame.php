<?php
// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();
?>
<div class="backbg"></div>
<div class="container-fluid content">
    <div class="row">
        <div class="col-sm-12 col-md-5 col-xl-5">
	        <div class="contact-border-yellow">
	            <div class="title">
	              <p class="has-text-align-left contact-title">CONTACTO</p>
	              <p class="has-text-align-left contact-city">Caracas-Venezuela</p>
	            </div>
	            <div class="iconos">
	              <i class="fa fa-map-marker" aria-hidden="true"></i>
	              <i class="fa fa-whatsapp" aria-hidden="true"></i>
	              <i class="fa fa-phone mt-2" aria-hidden="true"></i>
                  <i class="fa fa-envelope" aria-hidden="true"></i>	              
	            </div>
	            <div class="info">
	                <span class="has-text-align-left face-to-face">Consulta presencial</span>
	              <p class="has-text-align-left contact-adress">Avenida Circunvalación del Sol, Centro Profesional Santa Paula, Torre B, Piso 2. Oficina 205.<br>Urbanización Santa Paula.</p>
	              <p class="contact-whatpsapp"><a href="https://wa.me/584142704664?text=Quiero mas información">(+58) 414 270 46 64</a></p>
	              <p class="contact-phone">(+58) 212 985 16 26
	              <span class="contact-phone">(+58) 212 988 04 94</span></p>
	              <p class="contact-email"><a href="mailto:ssnut1970@gmail.com">ssnut1970@gmail.com</a></p>
	              
	            </div>
	          </div>
	        </div>
	        <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="content-back">
                    <a id="contactame-back" class="read-more" href="#">< Volver</a>
                </div>  	            
	          <div class="contact-info">
	                <p class="contact-subtitle">Para consultas OnLine, asesorías o cualquier otra solicitud 
especial, llena y envía el siguiente formulario:</p>
	                <?php
	                echo do_shortcode( '[contact-form-7 id="110" title="Contactame2"]' );
	                ?>
              </div>
            </div>
	    </div>
    </div>      
<div class="content-more">
    <a id="contactame-more" class="read-more" href="#">Llenar &gt;</a>
</div>    
</div>

<?php          
get_footer();