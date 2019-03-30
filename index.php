<?php
/* Main template file */
get_header();
?>

<main id="home">
    <!-- HERO BANNER -->
    <ul class="hero-banner carousel">
      <?php
        # Define query to load all slides for the home page
        $args = array(
          'post_type'       => 'slides',
          'order'           => ASC,
          'site_locations'  => 'home',
        );

        # Get the Slides for the carousel in the front page
        $the_query = new WP_Query( $args );
      ?>

      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <li class="slide">
            <?php
              # getting slide background image from the featured image
              $slide_bg_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            ?>
            <div class="description" style="background-image: linear-gradient(90deg, #FFFFFF 0%, rgba(255, 255, 255, 0.8) 39.29%, rgba(255, 255, 255, 0) 101.6%), url('<?php echo $slide_bg_image[0]; ?>');">
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
              <?php if ( get_field( 'call_to_action_type' ) == 'subscribe' ) : ?>
                <?php dynamic_sidebar( 'newsletter_widget' ); ?>
              <?php else: ?>
                <a href="<?php the_field( 'call_to_action_link' ); ?>" class="blue filled button"><?php the_field( 'call_to_action_label' ); ?></a>
              <?php endif; ?>
            </div>
          </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; wp_reset_query(); ?>
    </ul>

    <!-- STAGES -->
    <div class="stages">
      <?php foreach ( get_categories( array( 'order' => ASC, ) ) as $category ) : ?>
        <?php if ( $category->count > 0 ) : ?>
          <section class="stage">
            <div class="stage-details">
              <h1 class="stage-name"><?php echo $category->cat_name; ?></h1>
              <p class="stage-description"><?php echo $category->category_description; ?> <a href="<?php echo esc_url( get_category_link( $category->cat_ID ) ); ?>"><?php echo "See all " . $category->cat_name . " articles &raquo;"; ?></a></p>
            </div>
            <div class="article-cards">
              <?php
                # Load all posts for the specific category
                $category_args = array(
                  'category_name' => $category->cat_name,
                );
              ?>

              <?php while( have_posts() ) : the_post(); ?>
                <?php
                  $article_tag = get_the_tags();
                  $tag_link = get_tag_link( $article_tag->term_id );
                ?>
                <div class="article-card <?php echo $article_tag[0]->slug; ?>">
                  <div class="article-card-heading">
                    <?php the_title( '<h3 class="article-title">', '</h3>' ); ?>
                    <div class="article-meta">
                      <?php the_date( 'j F Y', '<span class="article-date">', '</span>' ); ?>
                      <span class="article-meta-separator">|</span>
                      <?php the_time('H:i A', '<span class="article-time">', '</span>'); ?>
                    </div>
                    <div class="article-excerpt">
                      <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="article-read-more">Read more &raquo;</a>
                    <?php the_tags(''); ?>
                  </div>
                </div>
              <?php endwhile; wp_reset_query(); ?>
            </div>
          </section>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <!-- About RCPH -->
    <section class="about">
      <?php dynamic_sidebar( 'about_us_preview' ); ?>
      <div class="about-information">
        <h2 class="about-heading">About Rare Cancers Philippines</h2>
        <?php dynamic_sidebar( 'about_us_excerpt' ); ?>
        <a href="about.html" class="blue filled button">Learn More</a>
      </div>
    </section>

    <!-- Newsletter CTA -->
    <?php get_template_part( 'template-parts/section-newsletter', 'newsletter-section' ); ?>

<?php get_footer(); ?>