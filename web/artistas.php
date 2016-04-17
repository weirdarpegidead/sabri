    <?php
    /*
    Template Name: artistas 
    */
    ?>
    <?php get_header(); ?>
    <!-- contenido artistas -->
    <div class="row">
      <?php query_posts('category_name=artistas' ); while ( have_posts() ) : the_post(); ?>
      <div class="large-4 columns text-center blog">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'home' ); } ?>
        <h3><?php the_title(); ?></h3>
        <div class="row">
          <div class="large-6 columns">Artista</div>
          <div class="large-6 columns"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?></div>
        </div>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <?php get_footer(); ?>