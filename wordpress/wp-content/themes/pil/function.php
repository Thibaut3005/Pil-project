<?php 


function montheme_register_assets() {
	wp_register_style("custom", get_template_directory_uri() . "/src/css/style.css", '', '1.0.0');
	
	
	wp_enqueue_style('custom');
	
	
	}

	add_action('wp_enqueue_scripts','montheme_register_assets');