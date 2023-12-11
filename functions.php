<?php
/*
*Mytheme Function
*/


// This is Title
 add_theme_support('title-tag');

// Theme css and jQuery File calling

function maynul_css_js_file_calling(){
    wp_enqueue_style( 'maynul-style', get_stylesheet_uri()./css/bootstrap.css, array(),'5.3.2');
}

add_action('wp_enqueue_scripts','maynul_css_js_file_calling');