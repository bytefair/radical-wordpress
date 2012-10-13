<?php

function script_loader() {
    //use Modernizr, remember this needs to be loaded in head
    wp_enqueue_script(
        'modernizr',
        get_template_directory_uri().'/js/modernizr-2.6.2.js',
        array(),
        '2.6.2' );

    //use local development jquery, use CDN for production
    wp_deregister_script( 'jquery' );
    wp_register_script(
        'jquery',
        get_template_directory_uri().'/js/jquery-1.8.2.js',
        array(),
        '1.8.2',
        true );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'script_loader' );

function style_loader() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

?>
