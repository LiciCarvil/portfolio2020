<?php
    // It actives thumbnails
    add_theme_support ( 'post-thumbnails' );

    // Register a new menu
    register_nav_menu ( 'main', 'Menú superior' );

    // It actives svg  
    add_filter('upload_mimes', 'my_upload_mimes');
    function my_upload_mimes($mimes = array()) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

    // Scripts and Styles
    // True = Footer, False = Header
    function my_scripts() {
        wp_enqueue_style('main_style', get_template_directory_uri().'/style.css', false);
        wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', false);
        wp_enqueue_style('swiper_style', get_template_directory_uri().'/css/swiper.min.css', false);

        wp_enqueue_script('swiper', get_template_directory_uri().'/js/swiper.min.js', array('jquery'), false, true);
        wp_enqueue_script('tweenMax', get_template_directory_uri().'/js/TweenMax.min.js', array('jquery'), false, true);
        wp_enqueue_script('scrollMagic', get_template_directory_uri().'/js/ScrollMagic.min.js', array('jquery'), false, true);
        wp_enqueue_script('scrollMagicIndicators', get_template_directory_uri().'/js/debug.addIndicators.min.js', array('jquery'), false, true);
        
        wp_enqueue_script('imagesloaded.pkgd.min', get_template_directory_uri().'/js/imagesloaded.pkgd.min.js', array('jquery'), false, true);
        wp_enqueue_script('demo', get_template_directory_uri().'/js/demo.js', array('jquery'), false, true);
        
        wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), false, true);
    }
    
    add_action( 'wp_enqueue_scripts', 'my_scripts' );
       
?>