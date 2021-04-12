<?php
function customportfolio() {

	/**
	 * Post Type: Portfolio Items.
	 */

	$labels = [
		"name" => __( "Portfolio ", "bcowry" ),
		"singular_name" => __( "Portfolio Item", "bcowry" ),
		"menu_name" => __( "My Portfolio Items", "bcowry" ),
		"all_items" => __( "All Portfolio Items", "bcowry" ),
		"add_new" => __( "Add new", "bcowry" ),
		"add_new_item" => __( "Add new Portfolio Item", "bcowry" ),
		"edit_item" => __( "Edit Portfolio Item", "bcowry" ),
		"new_item" => __( "New Portfolio Item", "bcowry" ),
		"view_item" => __( "View Portfolio Item", "bcowry" ),
		"view_items" => __( "View Portfolio Items", "bcowry" ),
		"search_items" => __( "Search Portfolio Items", "bcowry" ),
		"not_found" => __( "No Portfolio Items found", "bcowry" ),
		"not_found_in_trash" => __( "No Portfolio Items found in trash", "bcowry" ),
		"parent" => __( "Parent Portfolio Item:", "bcowry" ),
		"featured_image" => __( "Featured image for this Portfolio Item", "bcowry" ),
		"set_featured_image" => __( "Set featured image for this Portfolio Item", "bcowry" ),
		"remove_featured_image" => __( "Remove featured image for this Portfolio Item", "bcowry" ),
		"use_featured_image" => __( "Use as featured image for this Portfolio Item", "bcowry" ),
		"archives" => __( "Portfolio Item archives", "bcowry" ),
		"insert_into_item" => __( "Insert into Portfolio Item", "bcowry" ),
		"uploaded_to_this_item" => __( "Upload to this Portfolio Item", "bcowry" ),
		"filter_items_list" => __( "Filter Portfolio Items list", "bcowry" ),
		"items_list_navigation" => __( "Portfolio Items list navigation", "bcowry" ),
		"items_list" => __( "Portfolio Items list", "bcowry" ),
		"attributes" => __( "Portfolio Items attributes", "bcowry" ),
		"name_admin_bar" => __( "Portfolio Item", "bcowry" ),
		"item_published" => __( "Portfolio Item published", "bcowry" ),
		"item_published_privately" => __( "Portfolio Item published privately.", "bcowry" ),
		"item_reverted_to_draft" => __( "Portfolio Item reverted to draft.", "bcowry" ),
		"item_scheduled" => __( "Portfolio Item scheduled", "bcowry" ),
		"item_updated" => __( "Portfolio Item updated.", "bcowry" ),
		"parent_item_colon" => __( "Parent Portfolio Item:", "bcowry" ),
	];

	$args = [
		"label" => __( "Portfolio Items", "bcowry" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "work", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "portfolio", $args );
}

add_action( 'init', 'customportfolio' );
?>