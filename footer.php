<?php 
/* Footer */
?>
</main>
  <!-- Footer -->
  <footer>
    <div class="sitemap">
      <h4>Sitemap</h4>
      <?php if( has_nav_menu( 'sitemap' ) ): ?>
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'sitemap',
              'menu_class' => 'sitemap-links',
              'container' => '',
            )
          );
        ?>
      <?php endif; ?>
    </div>
    <div class="org-information">
      <?php
        # Get information from Contact Us page
        $info_query = new WP_Query( 'pagename=contact' );
      ?>
      <?php while( $info_query->have_posts() ) : $info_query->the_post(); ?>
        <h4 class="name"><?php bloginfo( 'name' ); ?></h4>
        <p class="address"><?php the_field( 'contact_address' ); ?></p>
        <div class="social-media-links">
          <a href="mailto:<?php the_field( 'contact_email' ); ?>" class="link"><i class="fa fa-envelope"></i> <?php the_field( 'contact_email' ); ?></a>
        </div>
        <div class="copyright"><?php the_time( 'Y' ); ?> &copy; All Rights Reserved.</div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>