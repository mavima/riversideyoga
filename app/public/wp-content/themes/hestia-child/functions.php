<?php

    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    function my_theme_enqueue_styles() {
        $parent_style = 'hestia-style'; 
        $child_style = 'hestia-child-style';
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( $child_style, get_stylesheet_uri() );
    }