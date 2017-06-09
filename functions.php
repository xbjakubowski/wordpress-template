<?php
function register_my_menus() {
	register_nav_menus(
   array(
     'main-menu' => __( 'Main Menu' ),
     'bottom-menu' => __( 'Bottom Menu' )
     )
   );
}
add_action( 'init', 'register_my_menus' );

if ( function_exists('register_sidebar') ) {

 register_sidebar(array(
   'name' => 'main',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));

 register_sidebar(array(
   'name' => 'secondary',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));

 register_sidebar(array(
   'name' => 'slider',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));

}
function load_js() {
  wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), NULL, true );
  wp_register_script( 'anime', get_template_directory_uri() . '/js/anime.min.js', array( 'jquery' ), NULL, true );
  wp_enqueue_script('anime');
  wp_enqueue_script( 'main' );

}

function wpb_add_google_fonts() {
  wp_enqueue_style('wpb-google-fonts', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic', false);
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
add_action( 'wp_enqueue_scripts', 'load_js' );
?>