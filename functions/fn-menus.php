<?php
add_theme_support('menus');
function register_theme_menus()
{
    register_nav_menus(
        array(
            'mobile' => _('Mobile Menu'),
            'desktop' => _('Desktop Menu'),
            
        )
    );
}
add_action('init', 'register_theme_menus');
