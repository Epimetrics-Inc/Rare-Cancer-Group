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
                <!-- <div class="subscribe-to-newsletter">
                  <input type="email" placeholder="Enter email address..." name="newsletter_email"><a href="#" class="blue filled button"><?php the_field( 'call_to_action_label' ); ?></a>
                </div> -->
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
      <section class="stage">
        <div class="stage-details">
          <h1 class="stage-name">Community</h1>
          <p class="stage-description">Something about the community stage. This should be short to explain what kind of articles will be seen here. Will contain all articles relating to community. <a href="community.html">See all Community articles &raquo;</a></p>
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
          <div class="article-card social-support">
            <div class="article-card-heading">
              <h3 class="article-title">Sample article title that is long</h3>
              <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
            </div>
            <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
            <a href="article.html" class="article-read-more">Read more &raquo;</a>
            <a href="#" class="article-card-category">Social Support</a>
          </div>
          <div class="article-card others">
            <div class="article-card-heading">
              <h3 class="article-title">Sample article title that is long</h3>
              <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
            </div>
            <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
            <a href="article.html" class="article-read-more">Read more &raquo;</a>
            <a href="#" class="article-card-category">Others</a>
          </div>
        </div>
      </section>
      <section class="stage">
        <div class="stage-details">
          <h1 class="stage-name">Diagnostics</h1>
          <p class="stage-description">Something about the diagnostics stage. This should be short to explain what kind of articles will be seen here. Will contain all articles relating to diagnostics. <a href="diagnostics.html">See all Diagnostics articles &raquo;</a></p>
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
          <div class="article-card social-support">
            <div class="article-card-heading">
              <h3 class="article-title">Sample article title that is long</h3>
              <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
            </div>
            <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
            <a href="article.html" class="article-read-more">Read more &raquo;</a>
            <a href="#" class="article-card-category">Social Support</a>
          </div>
          <div class="article-card others">
            <div class="article-card-heading">
              <h3 class="article-title">Sample article title that is long</h3>
              <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
            </div>
            <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
            <a href="article.html" class="article-read-more">Read more &raquo;</a>
            <a href="#" class="article-card-category">Others</a>
          </div>
        </div>
      </section>
      <section class="stage">
        <div class="stage-details">
          <h1 class="stage-name">Treatment</h1>
          <p class="stage-description">Something about the treatment stage. This should be short to explain what kind of articles will be seen here. Will contain all articles relating to treatment. <a href="treatment.html">See all Treatment articles &raquo;</a></p>
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
          <div class="article-card social-support">
            <div class="article-card-heading">
              <h3 class="article-title">Sample article title that is long</h3>
              <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
            </div>
            <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
            <a href="article.html" class="article-read-more">Read more &raquo;</a>
            <a href="#" class="article-card-category">Social Support</a>
          </div>
          <div class="article-card others">
            <div class="article-card-heading">
              <h3 class="article-title">Sample article title that is long</h3>
              <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
            </div>
            <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
            <a href="article.html" class="article-read-more">Read more &raquo;</a>
            <a href="#" class="article-card-category">Others</a>
          </div>
        </div>
      </section>
      <section class="stage">
        <div class="stage-details">
          <h1 class="stage-name">Survivorship</h1>
          <p class="stage-description">Something about the survivorship stage. This should be short to explain what kind of articles will be seen here. Will contain all articles relating to survivorship. <a href="survivorship.html">See all Survivorship articles &raquo;</a></p>
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
          <div class="article-card social-support">
            <div class="article-card-heading">
              <h3 class="article-title">Sample article title that is long</h3>
              <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
            </div>
            <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
            <a href="article.html" class="article-read-more">Read more &raquo;</a>
            <a href="#" class="article-card-category">Social Support</a>
          </div>
          <div class="article-card others">
            <div class="article-card-heading">
              <h3 class="article-title">Sample article title that is long</h3>
              <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
            </div>
            <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
            <a href="article.html" class="article-read-more">Read more &raquo;</a>
            <a href="#" class="article-card-category">Others</a>
          </div>
        </div>
      </section>
      <section class="stage">
        <div class="stage-details">
          <h1 class="stage-name">Legacy</h1>
          <p class="stage-description">Something about the legacy stage. This should be short to explain what kind of articles will be seen here. Will contain all articles relating to legacy. <a href="legacy.html">See all Legacy articles &raquo;</a></p>
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
          <div class="article-card social-support">
            <div class="article-card-heading">
              <h3 class="article-title">Sample article title that is long</h3>
              <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
            </div>
            <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
            <a href="article.html" class="article-read-more">Read more &raquo;</a>
            <a href="#" class="article-card-category">Social Support</a>
          </div>
          <div class="article-card others">
            <div class="article-card-heading">
              <h3 class="article-title">Sample article title that is long</h3>
              <p class="article-meta">Nov 25 2018 | 12:34 PM</p>
            </div>
            <p class="article-excerpt">This is the article’s excerpt. Usually the first few sentences. If the paragraph is longer than expected, it will be cut off like this and trail off...</p>
            <a href="article.html" class="article-read-more">Read more &raquo;</a>
            <a href="#" class="article-card-category">Others</a>
          </div>
        </div>
      </section>
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
    <section class="newsletter-signup">
      <div class="newsletter-info">
        <h2>Subscribe to our newsletter</h2>
        <div class="description">Text description to further encourage people to subscribe to the website’s newsletter if there is any</div>
      </div>
      <div class="subscribe-to-newsletter"><input type="email" placeholder="Enter email address..." name="newsletter_email"><a href="#" class="blue filled button">Subscribe</a></div>
    </section>

<?php get_footer(); ?>