<?php
/**
 * Custom post types
 *
 * @package Deliver
 */

function team_post_type() {

    // Labels
    $labels = array(
        'name' => _x("Team", "post type general name"),
        'singular_name' => _x("Team", "post type singular name"),
        'menu_name' => 'Team Profiles',
        'add_new' => _x("Add New", "team item"),
        'add_new_item' => __("Add New Profile"),
        'edit_item' => __("Edit Profile"),
        'new_item' => __("New Profile"),
        'view_item' => __("View Profile"),
        'search_items' => __("Search Profiles"),
        'not_found' =>  __("No Profiles Found"),
        'not_found_in_trash' => __("No Profiles Found in Trash"),
        'parent_item_colon' => ''
    );

    // Register post type
    register_post_type('team' , array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'rewrite' => false,
        'supports' => array('title', 'editor', 'thumbnail')
    ) );
}
add_action( 'init', 'team_post_type', 0 );