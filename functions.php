<?php

function jumpfx_scripts() {

    //CSS
    wp_register_style('jumpfx_stylesheet', get_template_directory_uri() . '/dist/css/main.css', array(), 1, 'all');
    wp_enqueue_style('jumpfx_stylesheet');

    //JS
    wp_register_script('jumpfx-script', get_template_directory_uri() . '/dist/js/app.js', array(), 1, true);
    wp_enqueue_script('jumpfx-script');

    //FONT AWESOME
    wp_enqueue_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );

    //MONTSERRAT FONT FAMILY
    wp_enqueue_style('google_web_fonts - montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');
}

add_action('wp_enqueue_scripts', 'jumpfx_scripts');


//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


//Menus
register_nav_menus (

    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);


//Register Sidebars
function my_sidebars() {

    register_sidebar(

        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}

add_action('widgets_init', 'my_sidebars');