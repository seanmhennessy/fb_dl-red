<?php
add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' );
function my_enqueue_assets() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
		wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() .'/js/scripts.js' );
}

function vc_remove_wp_ver_css_js( $src ) {
	 if ( strpos( $src, 'ver=' ) )
			 $src = remove_query_arg( 'ver', $src );
	 return $src;
}

// Allow SVG Upload

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// ACF Options Page

if( function_exists('acf_add_options_page') ) {
	 
	acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
	
	acf_add_options_sub_page(array(
		'page_title'    => 'Theme Header Settings',
		'menu_title'    => 'Header',
		'parent_slug'   => 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title'    => 'Theme Footer Settings',
		'menu_title'    => 'Footer',
		'parent_slug'   => 'theme-general-settings',
	));   
}
add_filter('style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter('script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'gform_confirmation_anchor', '__return_false' );

// GRAVITY FORMS
//define('GF_LICENSE_KEY', 'a79cb9ad0ca4c3d51b48120fa080151b');

//Rewrite Project Post Slug

// function custom_post_name () {
// 	return array(
// 		'feeds' => true,
// 		'slug' => 'project',
// 		'with_front' => false,
// 	);
// }
// add_filter( 'et_project_posttype_rewrite_args', 'custom_post_name' );

//End Rewrite Project Post Slug