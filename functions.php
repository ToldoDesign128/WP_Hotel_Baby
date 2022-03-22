<?php 

    //add CSS
    function DA_styles() { 
        wp_enqueue_style("DA-style-hamburger", get_template_directory_uri().'/css-parts/hamburgers.css');          
        wp_enqueue_style("DA-style", get_template_directory_uri().'/style.min.css');       
    }
    add_action("wp_enqueue_scripts", "DA_styles");

    //add JS
    function DA_scripts() {
        wp_enqueue_script("DA-scriptjs", get_template_directory_uri().'/js/script.js', array("jquery"), null, false);
    }
    add_action("wp_enqueue_scripts", "DA_scripts");

    add_action( 'wp_enqueue_scripts', 'slick_register_styles' );

    function slick_register_styles() {
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css-parts/slick.css', [], false, 'all' );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/css-parts/slick-theme.css', ['slick-css'], false, 'all' );
    wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/js/script.js', ['jquery', 'slick-js'], filemtime( get_template_directory() . '/js/script.js' ), true );
    }

  ?>