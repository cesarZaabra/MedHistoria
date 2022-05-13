<?php

function med_historia_theme()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders'));

    load_theme_textdomain('MedHistoria', get_template_directory_uri() . "/languages");

    //Menu
    register_nav_menus([
        'primary-menu' => __('Menu principal', 'MedHistoria')
    ]);
}

add_action('after_setup_theme', 'med_historia_theme');

function med_historia_assets()
{
    // Estilos
    wp_enqueue_style('google_points', "https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&display=swap");
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '1.0');
    wp_enqueue_style('nice-select', get_template_directory_uri() . "/assets/css/nice-select.css", array(), '1.0');
    wp_enqueue_style('nice-select', get_template_directory_uri() . "/assets/css/nice-select.css", array(), '1.0');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . "/assets/css/font-awesome.min.css", array(), '1.0');
    wp_enqueue_style('icofont', get_template_directory_uri() . "/assets/css/icofont.css", array(), '1.0');
    wp_enqueue_style('slicknav', get_template_directory_uri() . "/assets/css/slicknav.min.css", array(), '1.0');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . "/assets/css/owl-carousel.css", array(), '1.0');
    wp_enqueue_style('datepicker', get_template_directory_uri() . "/assets/css/datepicker.css", array(), '1.0');
    wp_enqueue_style('animate', get_template_directory_uri() . "/assets/css/animate.min.css", array(), '1.0');

    //Estilos del sistema
    wp_enqueue_style('normalize', get_template_directory_uri() . "/assets/css/normalize.css");
    //wp_enqueue_style('style', get_template_directory_uri() . "/assets/style.css");
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
    wp_enqueue_style('responsive', get_template_directory_uri() . "/assets/css/responsive.css");

    wp_enqueue_style('color', get_template_directory_uri() . "/assets/css/color/color1.css");

    //Scripts
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/jquery.min.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/jquery-migrate-3.0.0.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/jquery-ui.min.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/easing.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/colors.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/popper.min.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/bootstrap-datepicker.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/jquery.nav.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/slicknav.min.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/jquery.scrollUp.min.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/niceselect.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/tilt.jquery.min.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/owl-carousel.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/jquery.counterup.min.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/steller.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/wow.min.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/jquery.magnific-popup.min.js");
    wp_enqueue_script('', "http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/bootstrap.min.js");
    wp_enqueue_script('', get_template_directory_uri() . "/assets/js/main.js");
}

add_action('wp_enqueue_scripts', 'med_historia_assets');


function med_historia_custom_posts()
{
    register_post_type('sliders', [
        'labels'    => [
            'name'          => __('Sliders', 'MedHistoria'),
            'singular_name' => __('Slider', 'MedHistoria')
        ],
        'public'    => true,
        'show_ui'   => true,
        'supports'  => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'show_in_rest' => true,

    ]);
}

add_action('init', 'med_historia_custom_posts');