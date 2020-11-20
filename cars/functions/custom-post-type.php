<?php

// let's create the function for the custom type
function destinations_cpt() {
	// creating (registering) the custom type
	register_post_type( 'destinations', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Destinations', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Destination', 'jointswp'), /* This is the individual type */
			'all_items' => __('Destinations', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Destination', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Destination', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Destination', 'jointswp'), /* New Display Title */
			'view_item' => __('View Destination', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Destinations', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'CPT for Destinations', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-admin-site', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'destinations', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'destinations', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	// register_taxonomy_for_object_type('category', 'destinations');
	/* this adds your post tags to your custom post type */
	// register_taxonomy_for_object_type('post_tag', 'sectors');

}

	// adding the function to the Wordpress init
	add_action( 'init', 'destinations_cpt');

	// now let's add custom categories (these act like categories)
  register_taxonomy( 'destinations_cat',
    	array('destinations'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */
    		'labels' => array(
    			'name' => __( 'Destination Categories', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Destination Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Destination Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Destination Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Destination Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Destination Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Destination Category', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Destination Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Destination Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Destination Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'destination-cats' ),
    	)
    );


function testimonials_cpt() {
	// creating (registering) the custom type
	register_post_type( 'testimonials', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Testimonials', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Testimonial', 'jointswp'), /* This is the individual type */
			'all_items' => __('Testimonials', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Testimonial', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Testimonial', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Testimonial', 'jointswp'), /* New Display Title */
			'view_item' => __('View Testimonial', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Testimonials', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'CPT for Testimonials', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-format-chat', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'testimonials', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'testimonials', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

}

// adding the function to the Wordpress init
add_action( 'init', 'testimonials_cpt');
