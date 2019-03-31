<?php
/* Stages template */

get_header(); ?>

<?php
  // Template for showing the Category in a templated way.
  $current_stage = get_queried_object();
?>

<main class="resources" id="<?php echo $current_stage->slug; ?>">
  <!-- HERO BANNER -->
  <section class="hero-banner text-only">
    <div class="hero-text">
      <h1><?php echo $current_stage->name; ?></h1>
      <div class="hero-description"><?php echo $current_stage->description; ?></div>
    </div>
  </section>

  <!-- STAGES -->
  <div class="stages">
    <?php if ( $current_stage->count > 0 ) : ?>
      <!-- Check if there are any articles in the currently viewed stage -->
      <?php foreach( get_categories() as $category ) : ?>
        <section class="stage">
          <div class="stage-details">
            <h1 class="stage-name"><?php echo $category->name; ?></h1>
          </div>
          <div class="article-cards">
            <?php while( have_posts() ) : the_post(); ?>
              <div class="article-card <?php echo $category->slug; ?>">
                <div class="article-card-heading">
                  <?php the_title( '<h3 class="article-title">', '</h3>' ) ?>
                  <p class="article-meta"><?php the_date( 'j F Y' ); ?> | <?php the_time( 'H:i A' ); ?></p>
                </div>
                <div class="article-excerpt"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></div>
                <a href="<?php the_permalink(); ?>" class="article-read-more">Read more &raquo;</a>
                <a href="<?php echo esc_url( get_category_link( $category->cat_ID ) ); ?>" class="article-card-category"><?php echo $category->name; ?></a>
              </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
        </section>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Newsletter CTA -->
  <?php get_template_part( 'template-parts/section-newsletter', 'newsletter-section' ); ?>

<?php get_footer(); ?>