<?php
/* Article page template */
get_header(); ?>

<main id="article">
<?php while( have_posts() ): the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
  <?php if( $image ) : ?>
    <div class="hero-banner article-feature-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.75)), url('<?php echo $image[0]; ?>');">
  <?php else: ?>
    <div class="hero-banner text-only">
  <?php endif; ?>
      <div class="article-header">
        <?php the_title( '<h1 class="article-title">', '</h1>' ); ?>
      </div>
    </div>
    

    <div class="article-body">
      <?php the_content(); ?>
    </div>

  </article>

  <!-- Newsletter CTA -->
  <?php get_template_part( 'template-parts/section-newsletter', 'newsletter-section' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>