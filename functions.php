<?php

// ENREGISTRE LE MENU
register_nav_menus( array(
    'menu' => 'Menu principal',
));
// --------------------

// AJOUT STYLE ET JQUERY
function ajout_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'slider', get_template_directory_uri() . './JS/slider.js');
    wp_enqueue_script('app', get_template_directory_uri() . './JS/app.js');
}
    add_action('wp_enqueue_scripts', 'ajout_scripts');
// --------------------

// THUMBNAIL
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

// TAILLE DU THUMBNAIL
add_image_size( 'profile-thumbnail', 50, 50 );
add_image_size( 'post-thumbnail', 150, 150 );
add_image_size( 'medium-thumbnail', 300, 300 );
add_image_size( 'large-thumbnail', 1024, 1024 );
add_image_size( 'fullpage-thumbnail', 1920 , 1080 );
// --------------------

//  Add google fonts

function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-fonts-Benne',
    "https://fonts.googleapis.com/css2?family=Benne", false );
    wp_enqueue_style( 'wpb-google-fonts-Poppins',
    "https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap", false );
    wp_enqueue_script('jquery', get_template_directory_uri() . './js/script.js', array('jquery'));

}    
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

  // Modifier le nombre de mots des extraits
function wpm_post_excerpt($length) {
    return 10;
}
add_filter('excerpt_length', 'wpm_post_excerpt');





