<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Custom Taxonomy
function rcforward_charity_taxonomy() {

	$labels = array(
		'name'                       => 'Charity Taxonomies',
		'singular_name'              => 'Charity Taxonomy',
		'menu_name'                  => 'Charity Taxonomy',
		'all_items'                  => 'All Charities',
		'parent_item'                => 'Parent Charity',
		'parent_item_colon'          => 'Parent Charity:',
		'new_item_name'              => 'New Charity Name',
		'add_new_item'               => 'Add New Charity',
		'edit_item'                  => 'Edit Charity',
		'update_item'                => 'Update Charity',
		'view_item'                  => 'View Charity',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove Charities',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Charities',
		'search_items'               => 'Search Charities',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Charities',
		'items_list'                 => 'Charities list',
		'items_list_navigation'      => 'Charities list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'charity_tax', array( 'charity' ), $args );

}
add_action( 'init', 'rcforward_charity_taxonomy', 0 );