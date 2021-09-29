
<?php


if (is_user_logged_in()) {
    show_admin_bar(true);
}


function montheme_supports() 
{
    add_theme_support('menus');
    register_nav_menu('header', 'en tête du menu');
}






function montheme_register_assets() {
    wp_register_style("custom", get_template_directory_uri() . "/src/css/style.css", '', '1.0.0');
    
    
    wp_enqueue_style('custom');
    
    
    }
add_action('after_setup_theme','montheme_supports');
add_action('wp_enqueue_scripts','montheme_register_assets');

?>