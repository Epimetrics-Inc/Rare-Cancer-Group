<?php
/* Article page template */
get_header(); ?>

<main id="article">
<?php while( have_posts() ):
  the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
    <div class="hero-banner article-feature-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.75)), url('<?php echo $image[0]; ?>');">

      <div class="article-header">
        <?php the_title( '<h1 class="article-title">', '</h1>' ); ?>
        <div class="article-meta">
          <?php the_date( 'j F Y', '<span class="article-date">', '</span>' ); ?>
          <span class="article-meta-separator">|</span>
          <?php the_time('H:i A', '<span class="article-time">', '</span>'); ?>
          <span class="article-meta-separator">|</span>
          <?php the_author('', '<span class="article-author">', '</span>'); ?>
        </div>
        <a href="<?php echo esc_url( get_category_link( $post->ID ) ); ?>" class="article-tags <?php echo get_the_category()[0]->slug; ?>"><?php echo get_the_category()[0]->name; ?></a>
      </div>
    </div>

    <div class="article-body">
      <?php the_content(); ?>
    </div>

    <div class="article-footer">
      <!-- TODO: look for social media plugin -->
      <div class="social-media-horizontal">
        <span>Share:</span>
        <a href="#"><i class="fa fa-facebook-square"></i></a>
        <a href="#"><i class="fa fa-twitter-square"></i></a>
        <a href="#"><i class="fa fa-envelope-square"></i></a>
      </div>

      <!-- TODO: look for way to integrate comments -->
      <!-- <a href="#" class="comments">
        <i class="fa fa-comments"></i><span class="article-comment-count">12</span> comments
      </a> -->
      <?php if ( comments_open() || get_comments_number() ) {
          comments_template();
        } ?>
    </div>
  </article>

  <!-- Related Articles -->
  <div class="stages related-articles">
    <section class="stage">
      <div class="stage-details">
        <h1 class="stage-name">Related Articles</h1>
      </div>
      <div class="article-cards">
        <?php $original_post = $post;
        global $post;
        $article_categories = get_the_category( $post->ID ); ?>

        <?php if ( $article_categories ) : ?>
          <?php
            $category_ids = array();
            foreach( $article_categories as $article_category ) $category_ids[] = $article_category->term_id;

            $related_args = array(
              'category__in'      => $category_ids,
              'post__not_in'      => array( $post->ID ),
              'posts_per_page'    => 2,
              'caller_get_posts'  => 1,
            );

            $related_query = new WP_Query( $related_args );
          ?>
          <?php if( $related_query->have_posts() ) : ?>
            <?php while( $related_query->have_posts() ) : $related_query->the_post(); ?>
              <div class="article-card <?php echo get_the_category()[0]->slug; ?>">
                <div class="article-card-heading">
                  <?php the_title( '<h3 class="article-title">', '</h3>' ); ?>
                  <p class="article-meta"><?php the_date( 'j F Y' ) ?> | <?php the_time( 'H:i A' ); ?></p>
                  <div class="article-excerpt"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></div>
                  <a href="<?php the_permalink(); ?>" class="article-read-more">Read more &raquo;</a>
                  <a href="<?php echo esc_url( get_category_link( get_the_category()[0]->cat_ID ) ); ?>" class="article-card-category"><?php echo get_the_category()[0]->name; ?></a>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        <?php endif; $post = $original_post; wp_reset_query(); ?>
      </div>
    </section>
  </div>

  <!-- Newsletter CTA -->
  <?php get_template_part( 'template-parts/section-newsletter', 'newsletter-section' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>