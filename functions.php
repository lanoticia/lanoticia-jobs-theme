<?php
    function laNoticiaJobs_styles(){

        wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
        wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" );
        wp_enqueue_style('style', get_stylesheet_uri() );
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrapjs', "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js", array('jquery'), '4.3.1', true );

    }

    add_action('wp_enqueue_scripts', 'laNoticiaJobs_styles');

    add_theme_support('post-thumbnails');

    register_nav_menus( array(
        'menu_principal' => __('Menu Principal', 'lanoticiajobs')
    ));

    function lanoticiajobs_widgets(){
        register_sidebar( array(
            'name' => __('Footer Widget'),
            'id' => 'footer_widget',
            'description' => 'Widget para el footer de La Noticia Jobs',
            'before_widget' => '<div id="%1$s" class="widget col-sm-6 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class"widget-title">',
            'after-title' => '</h4>'
        ) );
    }

    add_action('widgets_init', 'lanoticiajobs_widgets');

    add_image_size('entradas', 750, 490, true);