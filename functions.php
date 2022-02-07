<?php

if ( ! defined( 'ANACOURS_DIR_PATH' ) ) {
	define( 'ANACOURS_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'ANACOURS_DIR_URI' ) ) {
	define( 'ANACOURS_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'ANACOURS_BUILD_URI' ) ) {
	define( 'ANACOURS_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'ANACOURS_BUILD_PATH' ) ) {
	define( 'ANACOURS_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'ANACOURS_BUILD_JS_URI' ) ) {
	define( 'ANACOURS_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'ANACOURS_BUILD_JS_DIR_PATH' ) ) {
	define( 'ANACOURS_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'ANACOURS_BUILD_IMG_URI' ) ) {
	define( 'ANACOURS_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'ANACOURS_BUILD_CSS_URI' ) ) {
	define( 'ANACOURS_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/src/css' );//a corriger
}

if ( ! defined( 'ANACOURS_BUILD_CSS_DIR_PATH' ) ) {
	define( 'ANACOURS_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/src/css' );//a corriger
}

if ( ! defined( 'ANACOURS_BUILD_LIB_URI' ) ) {
	define( 'ANACOURS_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

require_once ANACOURS_DIR_PATH . '/inc/helpers/autoloader.php';
require_once ANACOURS_DIR_PATH . '/inc/helpers/template-tags.php';

function anacours_get_theme_instance() {
	\ANACOURS_THEME\Inc\ANACOURS_THEME::get_instance();
}

anacours_get_theme_instance();

// Hooks
add_filter( 'upload_mimes', 'anacours_mime_types' );
add_filter( 'wp_check_filetype_and_ext', 'anacours_file_types', 10, 4 );

// Autoriser l'import des fichiers SVG et WEBP
function anacours_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
// Contrôle de l'import d'un WEBP
function anacours_file_types( $types, $file, $filename, $mimes ) {
	if ( false !== strpos( $filename, '.webp' ) ) {
    	$types['ext'] = 'webp';
   		$types['type'] = 'image/webp';
	}
	return $types;
}

/*------OPTIMISATION------*/
function my_deregister_scripts(){
	wp_dequeue_script( 'wp-embed' );
   }
add_action( 'wp_footer', 'my_deregister_scripts' );

add_action( 'init', 'remove_dns_prefetch' );
function  remove_dns_prefetch () {
   remove_action( 'wp_head', 'wp_resource_hints', 2, 99 );
}

remove_action( 'wp_head', 'feed_links_extra', 3 ); 
remove_action( 'wp_head', 'feed_links', 2 ); 
remove_action( 'wp_head', 'rsd_link' ); 
remove_action( 'wp_head', 'wlwmanifest_link' ); 
remove_action( 'wp_head', 'index_rel_link' ); 
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'wp_generator' );

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

remove_action('wp_head', 'wp_generator');

remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}