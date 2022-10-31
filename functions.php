<?php 
function university_files() {
    wp_enqueue_script( 'my-js', get_theme_file_uri('/js/app.js'), NULL, '1.0' , true ); 
    wp_enqueue_style('university_main_styles', get_stylesheet_uri()); 
    
  }
  add_action('wp_enqueue_scripts', 'university_files'); 

 
  function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'My Custom Menu' ),
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  add_theme_support( 'responsive-embeds' );

  function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap', false );
    }
    
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
    
    /* adding logo */
    add_theme_support( 'custom-logo' );

    function themename_custom_logo_setup() {
      $defaults = array(
          'height'               => 100,
          'width'                => 400,
          'flex-height'          => true,
          'flex-width'           => true,
          'header-text'          => array( 'site-title', 'site-description' ),
          'unlink-homepage-logo' => true, 
      );
   
      add_theme_support( 'custom-logo', $defaults );
  }
   
  add_theme_support( 'wp-block-styles' );
  	
add_theme_support( 'align-wide' );

function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Remove each style one by one
// Might cause issues later
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

/* add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
 */
/* remove page title for woocommerce because it was messing up the nav bar */

add_filter('woocommerce_show_page_title', 'bbloomer_hide_shop_page_title');
 
function bbloomer_hide_shop_page_title($title) {
   if (is_shop()) $title = false;
   return $title;
}


/**
 * Register our sidebars and widgetized areas.
 *
 */

function wpb_widgets_init() {
 
  register_sidebar( array(
      'name'          => 'Custom Header Widget Area',
      'id'            => 'custom-header-widget',
      'before_widget' => '<div class="chw-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="chw-title">',
      'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );

 // Add support for editor styles.
 add_theme_support( 'widgets' );



// register sidebars
function my_sidebars() {

  register_sidebar( array(
    'name'          => __( 'Primary Sidebar', 'theme_name' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
) );

register_sidebar( array(
  'name'          => __( 'Shop Sidebar', 'theme_name' ),
  'id'            => 'sidebar-2',
  'before_title'  => '<p class="widget-title">',
  'after_title'   => '</p>'
) );

}

add_action('widgets_init', 'my_sidebars');



?>


