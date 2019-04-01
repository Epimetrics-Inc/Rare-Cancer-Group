<?php 
/* Single Page template */
get_header(); ?>

<main id="about">
  <?php while( have_posts() ) : the_post(); ?>
    <section class="hero-banner text-only">
      <div class="hero-text">
        <?php the_title( '<h1>', '</h1>'); ?>
        <div class="hero-description">
          <?php the_content(); ?>
        </div>
      </div>
    </section>

    <section class="big-parallax-image" style="background-image: url('<?php the_field( "first_image" ); ?>'); background-position: top center;"></section>

    <section class="vision-mission">
      <div class="vision">
        <h2>Our Vision</h2>
        <div class="description"><?php the_field( 'vision' ); ?></div>
      </div>
      <div class="mission">
        <h2>Our Mission</h2>
        <div class="description"><?php the_field( 'mission' ); ?></div>
      </div>
    </section>

    <section class="big-parallax-image" style="background-image: url('<?php the_field( "second_image" ); ?>');"></section>
  <?php endwhile; ?>

  <!-- Newsletter CTA -->
  <?php get_template_part( 'template-parts/section-newsletter', 'newsletter-section' ); ?>

<?php get_footer(); ?>