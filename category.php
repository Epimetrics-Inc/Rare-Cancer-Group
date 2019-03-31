<?php
/* Resources page: Stages */

get_header(); ?>

<main class="resources" id="search-results">
  <!-- HERO BANNER -->
  <section class="hero-banner text-only">
  </section>

  <!-- STAGES -->
  <div class="stages">
    <section class="stage">
      <div class="stage-details">
        <h1 class="stage-name"><?php echo get_the_category()[0]->cat_name; ?></h1>
      </div>
      <?php get_template_part( 'template-parts/section-article-cards', 'article-cards' ); ?>
    </section>
  </div>

  <!-- Newsletter CTA -->
  <?php get_template_part( 'template-parts/section-newsletter', 'newsletter-section' ); ?>

<?php get_footer(); ?>