<?php 
/* Footer */
?>
</main>
  <!-- Footer -->
  <footer>
    <div class="sitemap">
      <h4>Sitemap</h4>
      <!-- <ul class="sitemap-links">
        <li class="link-item"><a class="link" href="about-us.html">About Us</a></li>
        <li class="link-item"><a class="link" href="community.html">Community</a></li>
        <li class="link-item"><a class="link" href="diagnostics.html">Diagnostics</a></li>
        <li class="link-item"><a class="link" href="treatment.html">Treatment</a></li>
        <li class="link-item"><a class="link" href="survivorship.html">Survivorship</a></li>
        <li class="link-item"><a class="link" href="legacy.html">Legacy</a></li>
        <li class="link-item"><a class="link" href="resources.html">Resources</a></li>
        <li class="link-item"><a class="link" href="contact.html">Get In Touch</a></li>
      </ul> -->

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
      <h4 class="name">Rare Cancers Philippines</h4>
      <p class="address">10 Garcia St. South Admiral Village, Paranaque City</p>
      <div class="social-media-links">
        <!-- <a href="#" class="link"><i class="fa fa-facebook-square"></i> Facebook</a> -->
        <a href="mailto:rarecancersphilippines@gmail.com" class="link"><i class="fa fa-envelope"></i> rarecancersphilippines@gmail.com</a>
      </div>
      <div class="copyright">2019 &copy; All Rights Reserved.</div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>