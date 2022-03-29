<?php 

    //add CSS
    function HB_styles() { 
        wp_enqueue_style("HB-style-hamburger", get_template_directory_uri().'/css-parts/hamburgers.css');          
        wp_enqueue_style("HB-style", get_template_directory_uri().'/style.min.css');       
    }
    add_action("wp_enqueue_scripts", "HB_styles");

    //add JS
    function HB_scripts() {
        wp_enqueue_script("HB-scriptjs", get_template_directory_uri().'/js/script.js', array("jquery"), null, true);
    }
    add_action("wp_enqueue_scripts", "HB_scripts");

    add_action( 'wp_enqueue_scripts', 'slick_register_styles' );

    function slick_register_styles() {
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css-parts/slick.css', [], true, 'all' );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/css-parts/slick-theme.css', ['slick-css'], true, 'all' );
    wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/js/script.js', ['jquery', 'slick-js'], filemtime( get_template_directory() . '/js/script.js' ), true );
    }

  ?>