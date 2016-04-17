    <?php get_header(); ?>
    <!-- slide -->
    <div class="orbit hide-for-small-only" role="region" aria-label="Favorite Space Pictures" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        <?php query_posts('category_name=slide&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
        <li class="orbit-slide">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slide' ); } ?>
        </li>
        <?php endwhile; wp_reset_query(); ?>
      </ul>
      <nav class="orbit-bullets">
        <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
      </nav>
    </div>
    <!-- top ventas -->
    <div class="expanded row">
      <div class="large-12 columns sin-padding">
        <h1 class="text-center">TOP VENTAS</h1>
        <div class="expanded row">
          <?php query_posts('category_name=productos' ); while ( have_posts() ) : the_post(); ?>
          <div class="small-4 medium-4 large-4 columns efecto sin-padding">
            <div>
              <a href="<?php echo get_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'home' ); } ?>
                <div class="efect">
                  <h5><?php the_title(); ?></h5>
                  <h5 class="small">ARTISTA</h5>
                </div>
              </a>
            </div>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
    <!-- novedades -->
    <div class="expanded row">
      <div class="large-12 columns sin-padding">
        <h1 class="text-center">NOVEDADES</h1>
        <div class="expanded row">
          <?php query_posts('category_name=productos' ); while ( have_posts() ) : the_post(); ?>
          <div class="small-4 medium-4 large-4 columns efecto sin-padding">
            <div>
              <a href="<?php echo get_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'home' ); } ?>
                <div class="efect">
                  <h5><?php the_title(); ?></h5>
                  <h5 class="small">ARTISTA</h5>
                </div>
              </a>
            </div>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
    <!-- seccion inferior -->
    <div class="expanded row">
      <div class="small-4 medium-4 large-4 columns efecto2 sin-padding">
        <div>
          <a href="#"><img src="http://placehold.it/1000x1000"></a>
          <div class="efect2">
            <h5>VINILOS</h5>
          </div>
        </div>
      </div>
      <div class="small-4 medium-4 large-4 columns efecto2 sin-padding">
        <div>
          <a href="#"><img src="http://placehold.it/1000x1000"></a>
          <div class="efect2">
            <h5>TOCA DISCOS</h5>
          </div>
        </div>
      </div>
      <div class="small-4 medium-4 large-4 columns efecto2 sin-padding">
        <div>
          <a href="#"><img src="http://placehold.it/1000x1000"></a>
          <div class="efect2">
            <h5>BLOG</h5>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>