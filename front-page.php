<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php get_header(); ?> 
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
  </head>
  <body>
  <!-- this is the top level nav bar -->

<div class="home-page-content">
  <?php the_content(); ?>
  <div id="contact-form">
    <h1>Join our list</h1>
    <p>Signup to be the first to hear about exclusive deals, special offers and upcoming collections</p>
   
   <div class="name-input-container"> <input type="text" placeholder="Name"> </div>
       <div class="email-input-container">  <input type="text" placeholder="Email"> </div>
       <div class="submit-input-container">  <input type="submit" placeholder="Subscribe!" value="Subscribe!"> </div>  

  </div>
  <div id="mobile-contact-form">
  <h1>Join our list</h1>
    <p>Signup to be the first to hear about exclusive deals, special offers and upcoming collections</p>
      <div class="your-name-mobile"> 
      <input type="text" placeholder="Name"> 
      </div>
      <div class="your-email-mobile">  <input type="text" placeholder="Email"> </div>
        <div class="submit-mobile">   <input type="submit" value="Subscribe!"> </div>
   </div>

</div>

<div class="spacer-for-nav-bar"> </div>

<?php

?>
<?php
   get_footer();
?>
  </body>
</html>