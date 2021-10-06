<?php 
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );




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
    

    wp_enqueue_script( 'custom', get_theme_file_uri("./src/js/accordion_entreprises.js"), null,microtime(),true);
}
add_action('after_setup_theme','montheme_supports');
add_action('wp_enqueue_scripts','montheme_register_assets');

?>
