<?php

function enqueueScripts() {

    wp_enqueue_style( 'customstyle', get_stylesheet_uri(), null, microtime(), 'all' );
    wp_enqueue_style( 'bootstrapStyle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', null, microtime(), 'all' );
    wp_enqueue_script( 'online1', '//code.jquery.com/jquery-3.5.1.slim.min.js', NULL, microtime(), true );
    wp_enqueue_script( 'online2', '//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', NULL, microtime(), true );
    wp_enqueue_script( 'online3', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', NULL, microtime(), true );
    wp_enqueue_script( 'online4', '//use.fontawesome.com/a23cc38971.js', NULL, microtime(), true );
    wp_enqueue_script( 'customJS', get_theme_file_uri('/js/main.js'), NULL, microtime(), true );
    
}

add_action( 'wp_enqueue_scripts', 'enqueueScripts' );


function themeSupports(){
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'themeSupports' );

?>

 