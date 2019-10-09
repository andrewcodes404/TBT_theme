<?php

// remove the default wp-blocks and add our own custom ones
function my_plugin_block_categories($categories, $post)
{
    return array(
        array(
            'slug' => 'tbt',
            'title' => __('TBT Blocks', 'tbt'),
            // 'icon'  => 'edit',
        ),
    );
}
add_filter('block_categories', 'my_plugin_block_categories', 10, 2);



// This way you only allow certain blocks through... 
// use this method to edit down the default block
// https://rudrastyh.com/gutenberg/remove-default-blocks.html

// add_filter('allowed_block_types', 'integral_allowed_block_types');
// function integral_allowed_block_types($allowed_blocks)
// {
//     return array(
//         'acf/hero',
//         'acf/find-out-more',
//         'acf/order-online',
//     );
// }

add_action('acf/init', 'my_register_blocks');



function my_register_blocks()
{
    // check function exists
    if (function_exists('acf_register_block')) {

        //  Find icons here
        // https://developer.wordpress.org/resource/dashicons

        acf_register_block(array(
            'name' => 'text-container',
            'title' => __('Text Container'),
            'render_template' => 'blocks/text-container.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));


        acf_register_block(array(
            'name' => 'home-page-black-banner',
            'title' => __('Home Page Black Banner'),
            'render_template' => 'blocks/home-page-black-banner.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'home-page-hero',
            'title' => __('Home Page Hero'),
            'render_template' => 'blocks/home-page-hero.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'text-image',
            'title' => __('Text & Image'),
            'render_template' => 'blocks/text-image.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'quote-banner',
            'title' => __('Quote Banner'),
            'render_template' => 'blocks/quote-banner.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'clients',
            'title' => __('Clients'),
            'render_template' => 'blocks/clients.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'whitepaper',
            'title' => __('Whitepaper'),
            'render_template' => 'blocks/whitepaper.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));



        acf_register_block(array(
            'name' => 'page-hero',
            'title' => __('Page Hero'),
            'render_template' => 'blocks/page-hero.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'team',
            'title' => __('Our Team'),
            'render_template' => 'blocks/team.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'connected-pictures',
            'title' => __('Connected Pictures'),
            'render_template' => 'blocks/connected-pictures.php',
            'category' => 'tbt',
            'icon' => 'format-video',
            'mode' => 'edit',
        ));


        acf_register_block(array(
            'name' => 'rss-feed',
            'title' => __('RSS Feed'),
            'render_template' => 'blocks/rss-feed.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));


        acf_register_block(array(
            'name' => 'line-break',
            'title' => __('Line Break'),
            'render_template' => 'blocks/line-break.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'why-purpose',
            'title' => __('Why Purpose'),
            'render_template' => 'blocks/why-purpose.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'who-we-help',
            'title' => __('Who We Help'),
            'render_template' => 'blocks/who-we-help.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'what-we-do',
            'title' => __('What we do'),
            'render_template' => 'blocks/what-we-do.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'map',
            'title' => __('Map'),
            'render_template' => 'blocks/map.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        acf_register_block(array(
            'name' => 'contact-info',
            'title' => __('Contact Info'),
            'render_template' => 'blocks/contact-info.php',
            'category' => 'tbt',
            'icon' => 'format-image',
            'mode' => 'edit',
        ));

        // acf_register_block(array(
        //     'name' => '',
        //     'title' => __('Custom Title'),
        //     'render_template' => 'blocks/###.php',
        //     'category' => 'tbt',
        //     'icon' => 'format-image',
        //     'mode' => 'edit',
        // ));



        // acf_register_block(array(
        //     'name' => '',
        //     'title' => __('Custom Title'),
        //     'render_template' => 'blocks/###.php',
        //     'category' => 'tbt',
        //     'icon' => 'format-image',
        //     'mode' => 'edit',
        // ));



    }
}
