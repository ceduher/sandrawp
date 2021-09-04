
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<link rel="preload"  as="style" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap"/>
<meta charset="<?php bloginfo( 'charset' );?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head();?>

</head>

<body <?php body_class();?>>

<div id="wrapper">
    <div class="header-top" style="height:90px;">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div id="header-top-left">
                        <div class="profesion">
                            <p class="profesion-autor">Nutricionista</p>
                            <p class="profesion-autor">Maratonista</p>
                            <p class="profesion-autor">Autora</p>
                        </div>
                        <div class="names">
                            <span class="name-autor">SANDRA</span>
                            <p class="last-autor">SUÁREZ LEÑA</p>
                        </div>
                    </div>
                    <div id="header-top-right">
                        <span>Nutrición deportiva</span>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <div id="header">
          <nav class="navbar navbar-expand-md p-0">
              <ul class="navbar-nav">
                <li class="nav-item site-title">
                  <a class="nav-link" href="/"><i class="icon-home"></i> Inicio</a>
                </li>
              </ul>          
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  <span id="text-close">Cerrar<i class="fa fa-angle-right arrow-close" aria-hidden="true"></i></span>

              </button>
              <div id="main-nav" class="collapse navbar-collapse justify-content-end">
                <ul id="menu-principal" class="navbar-nav">
                  <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-inicio nav-item"><a title="Inicio" href="/" class="nav-link">Inicio</a></li>                    
                  <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26 nav-item"><a title="¿Quién soy?" href="/quiensoy" class="nav-link">¿Quién soy?</a></li>
                  <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26 nav-item"><a title="¿Quién soy?" href="/mi-libro" class="nav-link">Mi libro</a></li>                  
                  <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23 nav-item"><a title="Contáctame" href="/contactame" class="nav-link">Contáctame</a></li>
              </ul>
              </div>
          </nav>
    </div>
<?php wp_body_open(); ?>