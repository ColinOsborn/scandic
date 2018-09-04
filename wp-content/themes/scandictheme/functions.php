<?php 

//including stylesheet and script files
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Main configuration
function scandic_config(){

    //Registering our menus
    register_nav_menus(
    array(
    'my_main_menu' => 'Main Menu',
    'footer_menu' => 'Footer Menu'
        )    
    );

    $args = array(
     'height' => 225,
     'width' => 1920
    );
    add_theme_support('custom-header', $args );
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'image') );
}
add_action('after_setup_theme', 'scandic_config', 0);

// Registering sidebars
add_action('widgets_init', 'scandic_sidebars' );
function scandic_sidebars(){
    register_sidebar(
        array(
            'name' => 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'This is the Home Page Sidebar. You can add your widets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widge-title">',
            'after_title' => '</h2>'
            )
        );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-2',
            'description' => 'This is the Blog Sidebar. You can add your widets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widge-title">',
            'after_title' => '</h2>'
            )
        );
    register_sidebar(
        array(
            'name' => 'Service 1',
            'id' => 'services-1',
            'description' => 'First Services Area.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widge-title">',
            'after_title' => '</h2>'
            )
        );
    register_sidebar(
        array(
            'name' => 'Service 2',
            'id' => 'services-2',
            'description' => 'Second Services Area.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widge-title">',
            'after_title' => '</h2>'
            )
        );
    register_sidebar(
        array(
            'name' => 'Service 3',
            'id' => 'services-3',
            'description' => 'Third Services Area.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widge-title">',
            'after_title' => '</h2>'
            )
        );            
}