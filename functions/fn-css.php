<?php
//using "apd_" to prevent clashes with other functions
function apd_custom_theme_styles()
{

    // internal style sheet
    // wp_enqueue_style('style_css', get_template_directory_uri() . '/style/style.css');


    // OWL CAROUSEL
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/style/css/owl.carousel.css');
    // OWL CAROUSEL THEME
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/style/css/owl.theme.default.css');

    //this is the compiled sass
    wp_enqueue_style('style_custom_css', get_template_directory_uri() . '/style/css/style.min.css');




    ///google fonts CDN
    wp_enqueue_style('gfonts_css', 'https://fonts.googleapis.com/css?family=Lora:400,400i|Montserrat:300,400,500,600,700&display=swap');




    //aos animation css
    wp_enqueue_style('aos_animate_css', get_template_directory_uri() . '/style/style-aos-animation.css');

}

add_action('wp_enqueue_scripts', 'apd_custom_theme_styles');
