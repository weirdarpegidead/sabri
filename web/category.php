    <?php
    /*
    Template Name: artistas 
    */
    ?>
    <?php get_header(); ?>
    <!-- contenido categorias -->
    <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-4 columns text-center blog">
        <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'home' ); } ?></a>
        <h3><?php the_title(); ?></h3>
        <div class="row">
          <div class="large-12 columns"><h3><small><?php the_meta(); ?></small></h3></div>
        </div>
      </div>
      <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
      <?php endif; ?>
    </div>
    <?php get_footer(); ?>