<?php
/* Main template file */
get_header();
?>

<main id="home">
    <!-- HERO BANNER -->
    <ul class="hero-banner carousel">
      <li class="slide">
        <div class="description" style="background-image: linear-gradient(90deg, #FFFFFF 0%, rgba(255, 255, 255, 0.8) 39.29%, rgba(255, 255, 255, 0) 101.6%), url(<?php get_theme_file_uri('images/hero-1.jpg'); ?>);">
          <h1>Learn all about what you're going through.</h1>
          <p>Text description to further encourage people to subscribe to the website’s newsletter if there is any</p>
          <div class="subscribe-to-newsletter"><input type="email" placeholder="Enter email address..." name="newsletter_email"><a href="#" class="blue filled button">Subscribe</a></div>
        </div>
      </li>
      <li class="slide">
        <div class="description" style="background-image: linear-gradient(90deg, #FFFFFF 0%, rgba(255, 255, 255, 0.8) 39.29%, rgba(255, 255, 255, 0) 101.6%), url(<?php get_theme_file_uri('images/hero-2.jpg'); ?>);">
          <h1>Another header message</h1>
          <p>This is to demonstrate the carousel on the hero banner of the website.</p>
          <a href="#" class="blue filled button">Sample CTA</a>
        </div>
      </li>
      <li class="slide">
        <div class="description" style="background-image: linear-gradient(90deg, #FFFFFF 0%, rgba(255, 255, 255, 0.8) 39.29%, rgba(255, 255, 255, 0) 101.6%), url(<?php get_theme_file_uri('images/hero-3.jpg'); ?>);">
          <h1>Yet another example</h1>
          <p>It's important to note that when setting up slides for the carousel, there always has to be a call-to-action within it.</p>
          <a href="#" class="blue filled button">Like This</a>
        </div>
      </li>
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
      <div class="about-preview"><img src="<?php get_theme_file_uri('images/hero-1.jpg'); ?>" alt=""></div>
      <div class="about-information">
        <h2 class="about-heading">About Rare Cancers Philippines</h2>
        <div class="about-excerpt">
          <p>Excerpt of what Rare Cancers Philippines, maybe in around 3 lines minimum. More words here to fill up the remaining space. The excerpt can be three to five lines so that this looks filled up.</p>
        </div>
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