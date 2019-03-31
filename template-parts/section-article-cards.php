<?php
/* Template: Loading Article Cards */
?>

<div class="article-cards">
  <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
      <div class="article-card <?php echo get_the_category()[0]->slug; ?>">
        <?php the_title( '<h3 class="article-title">', '</h3>' ); ?>
        <p class="article-meta"><?php the_date( 'j F Y' ) ?> | <?php the_time( 'H:i A' ); ?></p>
        <div class="article-excerpt"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></div>
        <a href="<?php the_permalink(); ?>" class="article-read-more">Read more &raquo;</a>
        <a href="<?php echo esc_url( get_category_link( get_the_category()[0]->cat_ID ) ); ?>" class="article-card-category"><?php echo get_the_category()[0]->name; ?></a>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>