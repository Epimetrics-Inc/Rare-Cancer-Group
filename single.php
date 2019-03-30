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
        <?php 
        $tags = get_tags();
        foreach ( $tags as $tag ) {
          $tag_link = get_tag_link( $tag->term_id );
              
          $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='article-tags {$tag->slug}'>";
          $html .= "{$tag->name}</a>";
        }
        echo $html;
        ?>
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
    <!-- TODO: setup loop for related articles -->
    <section class="stage">
      <div class="stage-details">
        <h1 class="stage-name">Related Articles</h1>
      </div>
      <div class="article-cards">
        <div class="article-card medical-information">
          <div class="article-card-heading">
            <h3 class="article-title">Sample article title that is long</h3>
            <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
          </div>
          <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
          <a href="article.html" class="article-read-more">Read more &raquo;</a>
          <a href="#" class="article-card-category">Medical Information</a>
        </div>
        <div class="article-card financial-aid">
          <div class="article-card-heading">
            <h3 class="article-title">Sample article title that is long</h3>
            <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
          </div>
          <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
          <a href="article.html" class="article-read-more">Read more &raquo;</a>
          <a href="#" class="article-card-category">Financial Aid</a>
        </div>
      </div>
    </section>
  </div>

  <!-- Newsletter CTA -->
  <?php get_template_part( 'template-parts/section-newsletter', 'newsletter-section' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>