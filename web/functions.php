<?php

/*=== Soporte para thumbnail ==*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'homepage-thumb', 0, 0, true );
add_image_size( 'testimonios', 150, 50, true);

/*=== sacar barra de admin ==*/
add_filter( 'show_admin_bar', '__return_false' );

/*=== registro primer menu inferior ===
register_nav_menus ( array(
  'menu-bottom_1' => 'menu_inferior_1',
  'menu' => 'menu_ingenieria'
  ));

/*=== registro segundo menu inferior ===
register_nav_menus ( array(
  'menu-bottom_2' => 'menu_inferior_2',
  'menu' => 'menu_arquitectura'
  ));

/*=== registro tercer menu inferior ===
register_nav_menus ( array(
  'menu-bottom_3' => 'menu_inferior_3',
  'menu' => 'menu_cchc'
  ));

/*=== registro menu del footer ===
register_nav_menus ( array(
  'menu_footer' => 'menu_inferior',
  'menu' => 'footer'
  ));

/*=== registro menu del principal ===*/
register_nav_menus ( array(
    'menu_principal' => 'menu_header'
    ));

/*=== agrego una extencion para el excerpt personalizada ===
function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );*/

/*=== saco el tag "more" ===
function new_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');*/

/*=== agrego una funcion para poder parametrar el excerpt ===*/
function my_excerpt($excerpt_length = 40, $id = false, $echo = true) {
         
    $text = '';
   
          if($id) {
                $the_post = & get_post( $my_id = $id );
                $text = ($the_post->post_excerpt) ? $the_post->post_excerpt : $the_post->post_content;
          } else {
                global $post;
                $text = ($post->post_excerpt) ? $post->post_excerpt : get_the_content('');
    }
         
                $text = strip_shortcodes( $text );
                $text = apply_filters('the_content', $text);
                $text = str_replace(']]>', ']]&gt;', $text);
          $text = strip_tags($text);
       
                $excerpt_more = '...' . '';
                $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
                if ( count($words) > $excerpt_length ) {
                        array_pop($words);
                        $text = implode(' ', $words);
                        $text = $text . $excerpt_more;
                } else {
                        $text = implode(' ', $words);
                }
        if($echo)
  echo apply_filters('the_content', $text);
        else
        return $text;
}
 
function get_my_excerpt($excerpt_length = 10, $id = false, $echo = false) {
 return my_excerpt($excerpt_length, $id, $echo);
}

/*
 * Función para imprimir la ruta de la imagen destacada.
 * Ejemplo de utilización: echo atrib_imagen_destacada();
 
function atrib_imagen_destacada() {
    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_image_src( $thumbID, 'full' ); // Sustituir por thumbnail, medium, large o full
    return $imgDestacada[0]; // 0 = ruta, 1 = altura, 2 = anchura, 3 = boolean
}

/*=== Declaracion de widget para "formulario-lateral" === */
register_sidebar(array(
 'name' => 'formulario-lateral',
 'before_widget' => '<div class="large-12 columns">',
 'after_widget' => '</div>',
 ));

/*=== Declaracion de widget para "fechas y postulaciones"===
register_sidebar(array(
 'name' => 'postulaciones',
 'before_widget' => '<div class="large-12 small-12 columns text-center postula">',
 'after_widget' => '</div>',
 ));

/*=== Declaracion de widget para "formulario lateral"===
register_sidebar(array(
 'name' => 'formulario-lateral',
 'before_widget' => '<div class="formWrap">',
 'after_widget' => '</div>',
 ));

*/?>