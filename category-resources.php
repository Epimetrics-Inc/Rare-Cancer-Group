<?php
/* Resources page: Resources */

get_header(); ?>

<main class="resources" id="main-resources">
  <!-- HERO BANNER -->
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <section class="hero-banner text-only">
        <div class="hero-text">
          <h1><?php single_cat_title('', false); ?></h1>
          <div class="hero-description">
            <?php echo category_description(); ?>
          </div>
        </div>
      </section>
    <?php endwhile; wp_reset_query(); ?>
  <?php endif; ?>

  <!-- STAGES -->
  <div class="stages">
    <section class="stage">
      <div class="stage-details">
        <h1 class="stage-name">Medical Information</h1>
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
        <h1 class="stage-name">Financial Aid</h1>
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
        <h1 class="stage-name">Social Support</h1>
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
        <h1 class="stage-name">Others</h1>
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
      </div>
    </section>
  </div>

  <!-- Newsletter CTA -->
  <?php get_template_part( 'template-parts/section-newsletter', 'newsletter-section' ); ?>

<?php get_footer(); ?>