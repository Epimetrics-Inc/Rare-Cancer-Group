<?php
/*  Contact Us page */

get_header(); ?>

<main id="contact">
  <?php while( have_posts() ) : the_post(); ?>
    <!-- Contact Us Form -->
    <div class="contact-us">
      <h2>Get in touch</h2>
      <?php the_content(); ?>
    </div>

    <!-- Organization Info -->
    <div class="contact-info">
      <a href="tel:029122345" class="link"><i class="fa fa-phone"></i><span class="info">(02) 912 2345</span></a>
      <a href="tel:+639123456789" class="link"><i class="fa fa-mobile"></i><span class="info">+63 912 345 6789</span></a>
      <a href="#" class="link"><i class="fa fa-map-marker"></i><span class="info">10 Garcia St. South Admiral Village, Paranaque City</span></a>
    </div>
  <?php endwhile; ?>

<?php get_footer(); ?>