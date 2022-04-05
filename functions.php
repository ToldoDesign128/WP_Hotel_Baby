<?php 

    //add CSS

    function HB_styles() {  
        wp_enqueue_style( "slick-css", get_template_directory_uri() . '/css-parts/slick.css', [], true, 'all' ); 
        wp_enqueue_style( "HB-style-hamburger", get_template_directory_uri().'/css-parts/hamburgers.css');          
        wp_enqueue_style( "HB-style", get_template_directory_uri().'/style.min.css'); 
    }
    add_action("wp_enqueue_scripts", "HB_styles");

    //add JS

        //Slick carousel

    function slick_styles() {
        wp_enqueue_script( 'slick_styles', get_template_directory_uri() . '/js/slick.min.js', array("jquery"), null, false );
    }
    add_action( 'wp_enqueue_scripts', 'slick_styles' );
    
    function slick_styles_script() {
        wp_enqueue_script( 'slick_styles_script', get_template_directory_uri() . '/js/script.js', null, true );
    }
    add_action( 'wp_enqueue_scripts', 'slick_styles_script' );

        //My JS

    function HB_scripts() {
        wp_enqueue_script("HB-scriptjs", get_template_directory_uri().'/js/script.js', array("jquery"), null, true );
    }
    add_action("wp_enqueue_scripts", "HB_scripts");


  ?>