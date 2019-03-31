<?php
/* Search template */
get_header(); ?>

<main class="resources" id="search-results">
  <!-- HERO BANNER -->
  <section class="hero-banner text-only">
    <!-- <div class="hero-text">
      <h1>Search Results</h1>
    </div> -->
  </section>

  <!-- STAGES -->
  <div class="stages">
    <section class="stage">
      <div class="stage-details">
        <h1 class="stage-name" id="title"><?php #echo $wp_query->found_posts; ?>
        <?php _e( 'Search Results for', 'locale' ); ?>: "<?php the_search_query(); ?>"</h1>
      </div>
      <?php get_template_part( 'template-parts/section-article-cards', 'article-cards' ); ?>
    </section>
  </div>

  <!-- Newsletter CTA -->
  <?php get_template_part( 'template-parts/section-newsletter', 'newsletter-section' ); ?>

<?php get_footer(); ?>