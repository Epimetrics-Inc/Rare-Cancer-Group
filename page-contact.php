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
      <?php
        $contact_tel = get_field( 'contact_tel_number' );
        preg_match_all('!\d+!', $contact_tel, $contact_tel_matches);
        $contact_tel_compress = implode('', $contact_tel_matches[0]);

        $contact_cell = get_field( 'contact_cell_number' );
        preg_match_all('!\d+!', $contact_cell, $contact_cell_matches);
        $contact_cell_compress = implode('', $contact_cell_matches[0]);
       ?>
      <a href="tel:<?php echo $contact_tel_compress; ?>" class="link"><i class="fa fa-phone"></i><span class="info"><?php echo $contact_tel; ?></span></a>
      <a href="tel:+<?php echo $contact_cell_compress; ?>" class="link"><i class="fa fa-mobile"></i><span class="info"><?php echo $contact_cell; ?></span></a>
      <a href="mailto:<?php the_field( 'contact_email' ); ?>" class="link"><i class="fa fa-envelope"></i><span class="info"><?php the_field( 'contact_email' ); ?></span></a>
      <span><i class="fa fa-map-marker"></i><span class="info"><?php the_field( 'contact_address'); ?></span></span>
    </div>
  <?php endwhile; ?>

<?php get_footer(); ?>