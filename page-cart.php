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
  <div class="page-container">
  <div class="spacer-for-nav-bar"></div>
 <?php the_content(); ?>
  </div>

<?php
   get_footer();
?>
</div>
  </body>
</html>