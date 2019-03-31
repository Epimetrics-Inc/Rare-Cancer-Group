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
      <div class="article-cards">
        <?php query_posts('showposts=3'); if (have_posts()) : ?>
        <div class="article-card medical-information">
          <div class="article-card-heading">
            <h3 class="article-title"><?php the_title(); ?></h3>
            <p class="article-meta"><?php the_date( 'j F Y' ) ?> | <?php the_time( 'H:i A' ); ?></p>
          </div>
          <p class="article-excerpt"><?php echo substr(get_the_excerpt(), 0,200); ?></p>
          <a href="<?php echo get_permalink(); ?>" class="article-read-more">Read more &raquo;</a>
          <?php $article_category = get_the_category(); ?>
          <a href="<?php echo esc_url( get_category_link( $article_category[0]->cat_ID ) ); ?>" class="article-card-category"><?php echo $article_category[0]->name; ?></a>
        </div>
        <?php endif; ?>
      </div>
    </section>
  </div>

<?php get_footer(); ?>