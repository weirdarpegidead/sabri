    <?php
    /*
    Template Name: genero 
    */
    ?>
    <?php get_header(); ?>
    <!-- contenido page -->
    <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-12 columns text-right"><h1><?php the_title(); ?></h1></div>
      <div class="large-6 columns">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'home' ); } ?>
      </div>
      <div class="large-6 columns text-justify">
        <ul class="no-bullet">
            <?php wp_list_categories( array(
                'orderby'             => 'name',
                'show_count'          => true,
                'use_desc_for_title'  => false,
                'child_of'            => 9,
                'title_li'            => ' '
            ) ); ?>
        </ul>
      </div>
      <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
      <?php endif; ?>
    </div>
    <?php get_footer(); ?>