<?php

/* REGISTER POSTS                        */
add_action( 'init', 'register_cpt_social' );
add_action( 'init', 'register_cpt_ecological' );

/* REGISTER TAXONOMIES                   */
add_action( 'init', 'create_versions_taxonomy' );


/* REGISTER POSTS                        */

/**
 * Create the 'social' cpt.
 */
function register_cpt_social() {

	$labels = array(
		'name'               => _x( 'Socials', 'dtd' ),
		'singular_name'      => _x( 'Social', 'dtd' ),
		'add_new'            => _x( 'Add New', 'dtd' ),
		'add_new_item'       => _x( 'Add New Social', 'dtd' ),
		'edit_item'          => _x( 'Edit Social', 'dtd' ),
		'new_item'           => _x( 'New Social', 'dtd' ),
		'view_item'          => _x( 'View Social', 'dtd' ),
		'search_items'       => _x( 'Search Socials', 'dtd' ),
		'not_found'          => _x( 'No Socials found', 'dtd' ),
		'not_found_in_trash' => _x( 'No Socials found in Trash', 'dtd' ),
		'parent_item_colon'  => _x( 'Parent Social:', 'dtd' ),
		'menu_name'          => _x( 'Socials', 'dtd' ),
	);

	$args = array(
		'labels'          => $labels,
		'description'     => 'Social Foundations',
		'capability_type' => 'post',
		'menu_icon'       => 'dashicons-admin-users',
		'public'          => true,
		'has_archive'     => true,
		'show_in_rest'    => true,
		'supports'        => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'      => array( 'versions' ),
		'rewrite'         => array(
			'slug'       => 'social-foundations',
			'with_front' => false,
		),
	);

	register_post_type( 'social', $args );
}

/**
 * Create the 'ecological' cpt.
 */
function register_cpt_ecological() {

	$labels = array(
		'name'               => _x( 'Ecologicals', 'dtd' ),
		'singular_name'      => _x( 'Ecological', 'dtd' ),
		'add_new'            => _x( 'Add New', 'dtd' ),
		'add_new_item'       => _x( 'Add New Ecological', 'dtd' ),
		'edit_item'          => _x( 'Edit Ecological', 'dtd' ),
		'new_item'           => _x( 'New Ecological', 'dtd' ),
		'view_item'          => _x( 'View Ecological', 'dtd' ),
		'search_items'       => _x( 'Search Ecologicals', 'dtd' ),
		'not_found'          => _x( 'No Ecologicals found', 'dtd' ),
		'not_found_in_trash' => _x( 'No Ecologicals found in Trash', 'dtd' ),
		'parent_item_colon'  => _x( 'Parent Ecological:', 'dtd' ),
		'menu_name'          => _x( 'Ecologicals', 'dtd' ),
	);

	$args = array(
		'labels'          => $labels,
		'description'     => 'Ecological ceiling',
		'capability_type' => 'post',
		'menu_icon'       => 'dashicons-admin-site',
		'public'          => true,
		'has_archive'     => true,
		'show_in_rest'    => true,
		'supports'        => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'      => array( 'versions' ),
		'rewrite'         => array(
			'slug'       => 'ecological-ceilings',
			'with_front' => false,
		),
	);

	register_post_type( 'ecological', $args );
}



/* REGISTER TAXONOMIES                   */

/**
 * Create custom taxonomy for use by our Projects custom post type.
 */
function create_versions_taxonomy() {
	$labels = array(
		'name'                       => 'Versions',
		'singular_name'              => 'Version',
		'search_items'               => 'Search Versions',
		'all_items'                  => 'All Versions',
		'edit_item'                  => 'Edit Version',
		'update_item'                => 'Update Version',
		'add_new_item'               => 'Add New Version',
		'new_item_name'              => 'New Version Name',
		'menu_name'                  => 'Version categories',
		'view_item'                  => 'View Version',
		'popular_items'              => 'Popular Version',
		'separate_items_with_commas' => 'Separate Versions with commas',
		'add_or_remove_items'        => 'Add or remove Versions',
		'choose_from_most_used'      => 'Choose from the most used Versions',
		'not_found'                  => 'No Versions found',
	);

	register_taxonomy(
		'services',
		array( 'social', 'ecological' ),
		array(
			'label'        => __( 'Versions' ),
			'hierarchical' => true,
			'labels'       => $labels,
			'show_in_rest' => true,
		)
	);
}