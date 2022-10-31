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
  <div class="spacer-for-nav-bar">


</div>

<div class="shop-items">

<div class="slider">
<?php $post_id = 178;
$post = get_page_by_title('post 2', OBJECT, 'post');;
$blocks = parse_blocks($post->post_content);
foreach ($blocks as $block) {
	if ($block['blockName'] != 'core/shortcode') {
		echo render_block($block);
	}
} ?>

</div>
	

<div class="widgets">
<?php if (is_active_sidebar('sidebar-1')) : ?>
      <div class="container py-4">
          <aside class="widget-area row gy-3 justify-content-between">
              <?php   dynamic_sidebar('sidebar-1');  ?>
          </aside><!-- .widget-area -->
      </div>
  <?php endif; ?>
</div>
</div>


  <?php woocommerce_content(); ?>
  </div>
<?php
   get_footer();
?>
</div>
  </body>
</html>