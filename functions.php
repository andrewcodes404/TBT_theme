<?php

//turn this back to true in prod
show_admin_bar(false);

//for page titles
add_theme_support('title-tag');

//turn on featured image
add_theme_support('post-thumbnails');

// remove post menu
function remove_posts_menu()
{
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');

//   Add support for editor styles.
// function add_theme_styles_to_editor()
// {
//    // 👇 turn it on
//    add_theme_support('editor-styles');

//    // Enqueue editor styles.
//    add_editor_style(get_template_directory_uri() . '/css/style.css');
//    add_editor_style(get_template_directory_uri() . '/css/wp-editor-style.css');
// }
// add_action('after_setup_theme', 'add_theme_styles_to_editor');


// Add some ACF styles for buttons
// https://dreihochzwo.de/visual-checkboxes-and-radio-buttons-with-advanced-custom-fields/


//Change team-member post title placeholder
function wpb_change_title_text($title)
{
    $screen = get_current_screen();
    if ('team_members' == $screen->post_type) {
        $title = 'Enter team member name';
    }
    return $title;
}

add_filter('enter_title_here', 'wpb_change_title_text');

function add_style_to_acf()
{
    add_theme_support('editor-styles');
    wp_enqueue_style('acf_styles', get_template_directory_uri() . '/style-admin/acf-styles.css');
}

add_action('admin_enqueue_scripts', 'add_style_to_acf');


function get_first_image_url($html)
{
    $cleaned = esc_html($html);
    var_dump($cleaned);
    if (preg_match('/<img.+?src="(.+?)"/', $cleaned, $matches)) {
        return $matches[1];
    } else return 'url_of_default_image.jpg';
}




// CSS
require_once(get_template_directory() . '/functions/fn-css.php');

// // JS
require_once(get_template_directory() . '/functions/fn-js.php');

// // MENUS
require_once(get_template_directory() . '/functions/fn-menus.php');

// //ACFs GUTENBERG BLOCKS
require_once(get_template_directory() . '/functions/fn-blocks.php');


// Order pages in the admin by date
add_filter('pre_get_posts', 'my_set_post_order_in_admin' );
function my_set_post_order_in_admin( $wp_query ) {
	global $pagenow;
	if ( is_admin() && $_GET['post_type'] == 'page' && 'edit.php' == $pagenow && !isset($_GET['orderby'])) {
		$wp_query->set( 'orderby', 'menu_order' );
		$wp_query->set( 'order', 'ASC' );
	}
}


// REMOVE COMMENTS FROM ADMIN

// Removes comments from admin menu
add_action('admin_menu', 'my_remove_admin_menus');
function my_remove_admin_menus()
{
    remove_menu_page('edit-comments.php');
}
// Removes comments from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support()
{
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
}
// Removes comments from admin bar
function mytheme_admin_bar_render()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'mytheme_admin_bar_render');
// @ini_set( 'upload_max_size' , '64M' );
// @ini_set( 'post_max_size', '64M');
// @ini_set( 'max_execution_time', '300' );