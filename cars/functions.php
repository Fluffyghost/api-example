<?php
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php');

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php');

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php');

// Use this as a template for custom post types
require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php');


if( function_exists('acf_add_options_page') ) { acf_add_options_page(); }
if( function_exists('acf_add_options_page') ) {
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Post Settings',
		'menu_title'	=> 'Post Settings',
		'pmenu_slug'	=> 'post-settings',
	    'capability' => 'edit_posts',
	    'parent_slug' => 'edit.php',
	    'position' => false,
	    'icon_url' => false
	));
}

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


//Include CPT In Categories Pages
// function namespace_add_custom_types( $query ) {
//     if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
//         $post_types = get_post_types( 'destinations' );
//         $query->set( 'post_type', $post_types);
//         return $query;
//     }
// }
// add_filter( 'pre_get_posts', 'namespace_add_custom_types');
