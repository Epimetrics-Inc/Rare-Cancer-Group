<?php
/*  Contact Us page */

get_header(); ?>

<main id="contact">
  <!-- Contact Us Form -->
  <div class="contact-us">
    <h2>Get in touch</h2>
    <form action="" class="contact-form">
      <label for="contact-name">Name <input type="text" name="contact-name" placeholder="example: Juan Dela Cruz"></label>
      <label for="contact-email">Email Address <input type="email" name="contact-email" placeholder="example: juan.dlc@email.com"></label>
      <label for="contact-message">Message <textarea name="contact-message" id="" cols="30" rows="5" placeholder="Type your message here..."></textarea></label>
      <input type="Submit" class="blue filled button" value="Send message">
    </form>
  </div>

  <!-- Organization Info -->
  <div class="contact-info">
    <a href="tel:029122345" class="link"><i class="fa fa-phone"></i><span class="info">(02) 912 2345</span></a>
    <a href="tel:+639123456789" class="link"><i class="fa fa-mobile"></i><span class="info">+63 912 345 6789</span></a>
    <a href="#" class="link"><i class="fa fa-map-marker"></i><span class="info">10 Garcia St. South Admiral Village, Paranaque City</span></a>
  </div>

<?php get_footer(); ?>