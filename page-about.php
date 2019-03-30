<?php 
/* Single Page template */
get_header(); ?>

<main id="about">
    <!-- HERO BANNER -->
    <section class="hero-banner text-only">
      <div class="hero-text">
        <h1>About Rare Cancers Philippines</h1>
        <div class="hero-description">Starting description, maybe? I’m not sure what can be put here, but if for example you want to start with a summary of what RCPH is, it can be placed here. Then the rest of the content about the organization, how it started, who are its members, etc... follows underneath this starting section.</div>
      </div>
    </section>

    <section class="big-parallax-image" style="background-image: url('images/big-image-01.jpeg'); background-position: top center;"></section>

    <section class="vision-mission">
      <div class="vision">
        <h2>Our Vision</h2>
        <div class="description">
          <p>Write about the organization’s vision here. It’s usually shorter, with just one paragraph. It also doesn’t usually span a lot of sentences, but has a lot of meaning to it already packed within.</p>
          <p>This is also an example of how we could layout two related sections that are just text.</p>
        </div>
      </div>
      <div class="mission">
        <h2>Our Mission</h2>
        <div class="description">
          <p>Write about the organization’s mission here? This is more likely to be lengthier than the organization’s vision, since it can be around one or two paragraphs long.</p>
          <p>Write about the organization’s mission here? This is more likely to be lengthier than the organization’s vision, since it can be around one or two paragraphs long. Adding another sentence to further show the example.</p>
        </div>
      </div>
    </section>

    <section class="big-parallax-image" style="background-image: url('images/big-image-02.jpeg');"></section>

    <section class="about">
      <div class="about-preview"><img src="images/left-image-01.JPG" alt=""></div>
      <div class="about-information">
        <h2 class="about-heading">New Section</h2>
        <div class="about-excerpt">
          <p>This section can include a 2 column carousel with description on the side. The carousel can be standalone.</p>
          <p>More information can be included below. Please provide information so we can fastrack the design of the layout for this particular page.</p>
        </div>
      </div>
    </section>


    <!-- Newsletter CTA -->
    <?php get_template_part( 'template-parts/section-newsletter', 'newsletter-section' ); ?>

<?php get_footer(); ?>