<?php 
/* 
    Plugin Name: Gym Fitness - Post Types
    Plugin URI:
    Description: Adds a new Post Type into WordPress
    Version: 1.0
    Author: Mariana Caldas
    Author URI: https://www.marianacaldas.com/
    Text Domain: gymfitness-post-types
    License: GPL2
    License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/
 if(!defined('ABSPATH')) die();
 
// Register new Custom Post Type
function gymfitness_class_post_type(){
	$labels = array(
		'name'                  => _x( 'Classes', 'Post Type General Name', 'gymfitness-post-types' ),
		'singular_name'         => _x( 'Class', 'Post Type Singular Name', 'gymfitness-post-types' ),
		'menu_name'             => __( 'Classes', 'gymfitness-post-types' ),
		'name_admin_bar'        => __( 'Classes', 'gymfitness-post-types' ),
		'archives'              => __( 'Archive', 'gymfitness-post-types' ),
		'attributes'            => __( 'Attributes', 'gymfitness-post-types' ),
		'parent_item_colon'     => __( 'Parent Class', 'gymfitness-post-types' ),
		'all_items'             => __( 'All Classes', 'gymfitness-post-types' ),
		'add_new_item'          => __( 'Add Class', 'gymfitness-post-types' ),
		'add_new'               => __( 'Add Class', 'gymfitness-post-types' ),
		'new_item'              => __( 'New Class', 'gymfitness-post-types' ),
		'edit_item'             => __( 'Edit Class', 'gymfitness-post-types' ),
		'update_item'           => __( 'Update Class', 'gymfitness-post-types' ),
		'view_item'             => __( 'View Class', 'gymfitness-post-types' ),
		'view_items'            => __( 'View Class', 'gymfitness-post-types' ),
		'search_items'          => __( 'Search Class', 'gymfitness-post-types' ),
		'not_found'             => __( 'Not found', 'gymfitness-post-types' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'gymfitness-post-types' ),
		'featured_image'        => __( 'Featured Image', 'gymfitness-post-types' ),
		'set_featured_image'    => __( 'Save Featured Image', 'gymfitness-post-types' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'gymfitness-post-types' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'gymfitness-post-types' ),
		'insert_into_item'      => __( 'Insert in Class', 'gymfitness-post-types' ),
		'uploaded_to_this_item' => __( 'Add in Class', 'gymfitness-post-types' ),
		'items_list'            => __( 'Classes List', 'gymfitness-post-types' ),
		'items_list_navigation' => __( 'Navigate to Classes', 'gymfitness-post-types' ),
		'filter_items_list'     => __( 'Filter Classes', 'gymfitness-post-types' ),
	);
	$args = array(
		'label'                 => __( 'Class', 'gymfitness-post-types' ),
		'description'           => __( 'Classes for a Gym Fitness Website', 'gymfitness-post-types' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'page',
	);
	register_post_type( 'gymfitness-classes', $args );

}
add_action( 'init', 'gymfitness_class_post_type', 0 );


// Register post type for instructors
function gymfitness_instructors() {

	$labels = array(
		'name'                  => _x( 'Instructors', 'Post Type General Name', 'gymfitness-post-types' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'gymfitness-post-types' ),
		'menu_name'             => __( 'Instructors', 'gymfitness-post-types' ),
		'name_admin_bar'        => __( 'Instructor', 'gymfitness-post-types' ),
		'archives'              => __( 'Archive', 'gymfitness-post-types' ),
		'attributes'            => __( 'Attributes', 'gymfitness-post-types' ),
		'parent_item_colon'     => __( 'Parent Instructor', 'gymgymfitness-post-types' ),
		'all_items'             => __( 'All Instructors', 'gymfitness-post-types' ),
		'add_new_item'          => __( 'Add Instructor', 'gymfitness-post-types' ),
		'add_new'               => __( 'Add Instructor', 'gymfitness-post-types' ),
		'new_item'              => __( 'New Instructor', 'gymfitness-post-types' ),
		'edit_item'             => __( 'Edit Instructor', 'gymfitness-post-types' ),
		'update_item'           => __( 'Update Instructor', 'gymfitness-post-types' ),
		'view_item'             => __( 'View Instructor', 'gymfitness-post-types' ),
		'view_items'            => __( 'View Instructors', 'gymfitness-post-types' ),
		'search_items'          => __( 'Search Instructor', 'gymfitness-post-types' ),
		'not_found'             => __( 'Not Found', 'gymfitness-post-types' ),
		'not_found_in_trash'    => __( 'Not Found in Trash', 'gymfitness-post-types' ),
		'featured_image'        => __( 'Featured Image', 'gymfitness-post-types' ),
		'set_featured_image'    => __( 'Save Featured Image', 'gymfitness-post-types' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'gymfitness-post-types' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'gymfitness-post-types' ),
		'insert_into_item'      => __( 'Insert in Instructor', 'gymfitness-post-types' ),
		'uploaded_to_this_item' => __( 'Add in Instructor', 'gymfitness-post-types' ),
		'items_list'            => __( 'List Instructors', 'gymfitness-post-types' ),
		'items_list_navigation' => __( 'Navigate to Instructors', 'gymfitness-post-types' ),
		'filter_items_list'     => __( 'Filter Instructors', 'gymfitness-post-types' ),
	);
	$args = array(
		'label'                 => __( 'Instructors', 'gymfitness-post-types' ),
		'description'           => __( 'Instructors for website', 'gymfitness-post-types' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instructors', $args );

}
add_action( 'init', 'gymfitness_instructors', 0 );

// Register post type for testimonials
function gymfitness_testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'gymfitness-post-types' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'gymfitness-post-types' ),
		'menu_name'             => __( 'Testimonials', 'gymfitness-post-types' ),
		'name_admin_bar'        => __( 'Testimonial', 'gymfitness-post-types' ),
		'archives'              => __( 'Archive', 'gymfitness-post-types' ),
		'attributes'            => __( 'Attributes', 'gymfitness-post-types' ),
		'parent_item_colon'     => __( 'Parent Testimonial ', 'gymfitness-post-types' ),
		'all_items'             => __( 'All Testimonials', 'gymfitness-post-types' ),
		'add_new_item'          => __( 'Add Testimonial', 'gymfitness-post-types' ),
		'add_new'               => __( 'Add Testimonial', 'gymfitness-post-types' ),
		'new_item'              => __( 'New Testimonial', 'gymfitness-post-types' ),
		'edit_item'             => __( 'Edit Testimonial', 'gymfitness-post-types' ),
		'update_item'           => __( 'Update Testimonial', 'gymfitness-post-types' ),
		'view_item'             => __( 'View Testimonial', 'gymfitness-post-types' ),
		'view_items'            => __( 'View Testimonials', 'gymfitness-post-types' ),
		'search_items'          => __( 'Search Testimonial', 'gymfitness-post-types' ),
		'not_found'             => __( 'Not found in Trash', 'gymfitness-post-types' ),
		'featured_image'        => __( 'Featured Image', 'gymfitness-post-types' ),
		'set_featured_image'    => __( 'Save Featured Image', 'gymfitness-post-types' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'gymfitness-post-types' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'gymfitness-post-types' ),
		'insert_into_item'      => __( 'Insert Into Testimonial', 'gymfitness-post-types' ),
		'uploaded_to_this_item' => __( 'Add At Testimonial', 'gymfitness-post-types' ),
		'items_list'            => __( 'Testimonial List', 'gymfitness-post-types' ),
		'items_list_navigation' => __( 'Navigate toTestimonials', 'gymfitness-post-types' ),
		'filter_items_list'     => __( 'Filter Testimonials', 'gymfitness-post-types' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'gymfitness-post-types' ),
		'description'           => __( 'Testimonials para el Sitio Web', 'gymfitness-post-types' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'gymfitness_testimonials', 0 );
?>