<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );


add_action( 'admin_footer', 'catlist2radio' );
function catlist2radio(){
	echo '<script type="text/javascript">';
	echo 'jQuery("#categorychecklist input, #categorychecklist-pop input, .cat-checklist input")';
	echo '.each(function(){this.type="radio"});</script>';
}

function load_fonts() {
            wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700');

            wp_enqueue_style( 'googleFonts');
        }
add_action('wp_print_styles', 'load_fonts');

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
}


?>