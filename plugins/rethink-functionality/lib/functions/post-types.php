<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function rcforward_post_type() {

	$charity_labels = array(
		'name'                  => 'Charities',
		'singular_name'         => 'Charity',
		'menu_name'             => 'Charities',
		'name_admin_bar'        => 'Charity',
		'archives'              => 'Charity Archives',
		'attributes'            => 'Charity Attributes',
		'parent_item_colon'     => 'Parent Charity:',
		'all_items'             => 'All Charities',
		'add_new_item'          => 'Add New Charity',
		'add_new'               => 'Add New',
		'new_item'              => 'New Charity',
		'edit_item'             => 'Edit Charity',
		'update_item'           => 'Update Charity',
		'view_item'             => 'View Charity',
		'view_items'            => 'View Charities',
		'search_items'          => 'Search Charity',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Charity Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Charity',
		'uploaded_to_this_item' => 'Uploaded to this Charity',
		'items_list'            => 'Charities list',
		'items_list_navigation' => 'Charities list navigation',
		'filter_items_list'     => 'Filter Charities list',
	);
	$charity_args = array(
		'label'                 => 'Charity',
		'description'           => 'Charity post type for RC Forward',
		'labels'                => $charity_labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-heart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);

    $fund_labels = array(
        'name'                  => 'Funds',
        'singular_name'         => 'Fund',
        'menu_name'             => 'Funds',
        'name_admin_bar'        => 'Fund',
        'archives'              => 'Fund Archives',
        'attributes'            => 'Fund Attributes',
        'parent_item_colon'     => 'Parent Fund:',
        'all_items'             => 'All Funds',
        'add_new_item'          => 'Add New Fund',
        'add_new'               => 'Add New',
        'new_item'              => 'New Fund',
        'edit_item'             => 'Edit Fund',
        'update_item'           => 'Update Fund',
        'view_item'             => 'View Fund',
        'view_items'            => 'View Funds',
        'search_items'          => 'Search Fund',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Fund Image',
        'set_featured_image'    => 'Set featured fund image',
        'remove_featured_image' => 'Remove featured fund image',
        'use_featured_image'    => 'Use as featured fund image',
        'insert_into_item'      => 'Insert into fund',
        'uploaded_to_this_item' => 'Uploaded to this fund',
        'items_list'            => 'Funds list',
        'items_list_navigation' => 'Funds list navigation',
        'filter_items_list'     => 'Filter funds list',
    );
    $fund_args = array(
        'label'                 => 'Fund',
        'description'           => 'Fund post type for RC Forward',
        'labels'                => $fund_labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type( 'charity', $charity_args );
    register_post_type( 'fund', $fund_args );

}
add_action( 'init', 'rcforward_post_type', 0 );