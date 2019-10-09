<?php

function apd_custom_theme_js()
{



    wp_enqueue_script('aos_animation_js', get_template_directory_uri() . '/js/aos_animation.js', '', '', true);
    wp_enqueue_script('aos_init_js', get_template_directory_uri() . '/js/aos_init.js', '', '', true);



    wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js', '', '1.0', true);

    wp_enqueue_script('google_maps', "https://maps.googleapis.com/maps/api/js?key=AIzaSyCNqdw00hJDnGf9C-DsRPP7wwxDlis5NBo", '', '', false);
    wp_enqueue_script('app_js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true);


    // wp_enqueue_script( 'my-map-script', get_template_directory_uri() . '/js/ma-map-script.js', '', '', true );

    // wp_enqueue_script('map_init', get_template_directory_uri() . '/js/map_init.js', '', '', true);
}

///AND DON’T FORGET TO CALL IT
add_action('wp_enqueue_scripts', 'apd_custom_theme_js');



///only run google map on 'contact-us' page
function map()
{
    if (is_page('contact')) {
        wp_enqueue_script('g-map', get_template_directory_uri() . '/js/google-map.js', '', '', true);
    }
}
add_action('wp_enqueue_scripts', 'map');
