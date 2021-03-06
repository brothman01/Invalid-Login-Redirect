<?php
/**
 * Register the ilr_log custom post type
 *
 * @since 1.0.0
 */

$labels = array(
	'name'                  => _x( 'Logs', 'Post Type General Name', 'invalid-login-redirect' ),
	'singular_name'         => _x( 'Log', 'Post Type Singular Name', 'invalid-login-redirect' ),
	'menu_name'             => __( 'Logs', 'invalid-login-redirect' ),
	'name_admin_bar'        => __( 'Log', 'invalid-login-redirect' ),
	'archives'              => __( 'Log Archives', 'invalid-login-redirect' ),
	'attributes'            => __( 'Log Attributes', 'invalid-login-redirect' ),
	'parent_item_colon'     => __( 'Parent Log:', 'invalid-login-redirect' ),
	'all_items'             => __( 'All Logs', 'invalid-login-redirect' ),
	'add_new_item'          => __( 'Add New Log', 'invalid-login-redirect' ),
	'add_new'               => __( 'Add New', 'invalid-login-redirect' ),
	'new_item'              => __( 'New Log', 'invalid-login-redirect' ),
	'edit_item'             => __( 'Edit Log', 'invalid-login-redirect' ),
	'update_item'           => __( 'Update Log', 'invalid-login-redirect' ),
	'view_item'             => __( 'View Log', 'invalid-login-redirect' ),
	'view_items'            => __( 'View Logs', 'invalid-login-redirect' ),
	'search_items'          => __( 'Search Log', 'invalid-login-redirect' ),
	'not_found'             => __( 'Nothing Logged Yet.', 'invalid-login-redirect' ),
	'not_found_in_trash'    => __( 'Not found in Trash', 'invalid-login-redirect' ),
	'featured_image'        => __( 'Featured Image', 'invalid-login-redirect' ),
	'set_featured_image'    => __( 'Set featured image', 'invalid-login-redirect' ),
	'remove_featured_image' => __( 'Remove featured image', 'invalid-login-redirect' ),
	'use_featured_image'    => __( 'Use as featured image', 'invalid-login-redirect' ),
	'insert_into_item'      => __( 'Insert into log', 'invalid-login-redirect' ),
	'uploaded_to_this_item' => __( 'Uploaded to this log', 'invalid-login-redirect' ),
	'items_list'            => __( 'Logs list', 'invalid-login-redirect' ),
	'items_list_navigation' => __( 'Logs list navigation', 'invalid-login-redirect' ),
	'filter_items_list'     => __( 'Filter logs list', 'invalid-login-redirect' ),
);

$args = array(
	'label'                 => __( 'Log', 'invalid-login-redirect' ),
	'description'           => __( 'Invalid Login Redirect logs', 'invalid-login-redirect' ),
	'labels'                => $labels,
	'supports'              => array( 'title' ),
	'hierarchical'          => true,
	'public'                => false,
	'show_ui'               => false,
	'show_in_menu'          => false,
	'show_in_admin_bar'     => false,
	'show_in_nav_menus'     => false,
	'can_export'            => false,
	'has_archive'           => false,
	'exclude_from_search'   => true,
	'publicly_queryable'    => false,
	'rewrite'               => false,
	'capability_type'       => 'page',
	'show_in_rest'          => true,
	'rest_base'             => 'ilr_logs',
);

register_post_type( 'ilr_log', $args );
