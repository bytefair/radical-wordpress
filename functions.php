<?php
    //use local development jquery, use CDN for production
    wp_deregister_script( 'jquery' );
    wp_register_script(
        'jquery',
        get_template_directory_uri().'/js/jquery-1.8.2.js',
        array(),
        '1.8.2',
        true );
    wp_enqueue_script( 'jquery' );
?>
