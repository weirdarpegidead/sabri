    <!-- footer -->
    <div class="expanded row footer">
      <div class="medium-4 large-4 columns">
        <h3 class="text-center">NAVEGACIÓN</h3>
        <div class="row">
          <div class="large-12 columns">
            <!--<ul class="menu menu-centered vertical">
              <li><a href="#">One</a></li>
              <li><a href="#">Two</a></li>
              <li><a href="#">Three</a></li>
              <li><a href="#">Four</a></li>
            </ul>-->
            <?php wp_nav_menu(
              array(
              'container' => false,
              'items_wrap' => '<ul class="menu menu-centered vertical">%3$s</ul>',
              'theme_location' => 'menu_inferior'
              )); ?>
          </div>
        </div>
      </div>
      <div class="medium-4 large-4 columns">
        <h3 class="text-center">NEWSLETTER</h3>
        <form>
          <div class="row">
            <div class="large-12 columns">
              <div class="input-group">
                <input class="input-group-field custom" placeholder="tucorreo@ejemplo.cl" type="email">
                <a class="input-group-button button secondary">ÚNETE</a>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="medium-4 large-4 columns">
        <h3 class="text-center">SÍGUENOS</h3>
        <div class="row">
          <div class="large-12 columns menu-centered">
            <ul class="menu">
              <li><a href="#"><i class="fi-social-facebook"></i></a></li>
              <li><a href="#"><i class="fi-social-twitter"></i></a></li>
              <li><a href="#"><i class="fi-social-youtube"></i></a></li>
              <li><a href="#"><i class="fi-social-instagram"></i></a></li>
              <li><a href="#"><i class="fi-social-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- disclaimer -->
    <div class="expanded row disclaimer">
      <div class="large-12 columns text-center">
        <p>Diseño y Desarrollo Web <a href="#">Anibal Garcias</a></p>
      </div>
    </div>
    <!-- scripts -->
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/what-input.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/foundation.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
