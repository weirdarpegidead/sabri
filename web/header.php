<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      <?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
      <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
      <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
      <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
      <?php if (is_home () ) { echo bloginfo('name'); echo ' | '; bloginfo('description'); }   elseif ( is_category() ) { single_cat_title(); echo ' | ' ; echo bloginfo('name'); }  elseif (is_single() || is_page()) { single_post_title(); echo ' | ' ; echo bloginfo('name'); }  else { wp_title('',true); } ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/foundation-icons.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!-- seccion social -->
    <div class="expanded row logo">
      <div class="medium-4 large-4 columns hide-for-small-only imago"><img src="http://placehold.it/200x200"></div>
      <div class="small-12 columns show-for-small-only text-center"><img src="http://placehold.it/200x200"></div>
      <div class="medium-9 large-6 columns medium-offset-3 large-offset-3 hide-for-small-only">
        <ul class="menu align-right">
          <li><a href="#">CONTACTO</a></li>
          <li><a href="#">12312564987</a></li>
          <li><a href="#">CONTACTO@TIENDA.CL</a></li>
        </ul>
      </div>
      <div class="medium-12 large-3 columns hide-for-small-only">
        <ul class="menu align-right">
          <li><a href="#"><i class="fi-social-facebook"></i></a></li>
          <li><a href="#"><i class="fi-social-twitter"></i></a></li>
          <li><a href="#"><i class="fi-social-youtube"></i></a></li>
          <li><a href="#"><i class="fi-social-instagram"></i></a></li>
          <li><a href="#"><i class="fi-social-pinterest"></i></a></li>
        </ul>
      </div>
    </div>
    <!-- navegacion -->
    <div class="expanded row nav">
      <div class="medium-9 large-12 medium-offset-3 large-offset-0 columns hide-for-small-only">
        <ul class="menu align-right">
          <li><a href="#">TIENDA</a></li>
          <li><a href="#">ARTISTAS</a></li>
          <li><a href="#">GENEROS</a></li>
          <li><a href="#">CONTACTO</a></li>
        </ul>
      </div>
    </div>
    <!-- navegacion movil -->
    <div class="title-bar text-right show-for-small-only" data-responsive-toggle="example-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      <div class="title-bar-title">Menu</div>
    </div>
    <div class="top-bar show-for-small-only" id="example-menu">
      <div class="top-bar-right">
        <ul class="menu align-right">
          <li><a href="#">TIENDA</a></li>
          <li><a href="#">ARTISTAS</a></li>
          <li><a href="#">GENEROS</a></li>
          <li><a href="#">CONTACTO</a></li>
        </ul>
      </div>
    </div>