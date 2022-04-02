<?php
/**
 * MTM6303-assg2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage MT6303_Assignment
 * @since MT6303 Assignment 1.0
 */


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mtm6303assg2_setup() {

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );


	// This theme uses wp_nav_menu() in two locations.
	
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'twentyseventeen' ),
		'social' => __( 'Social Links Menu', 'twentyseventeen' ),
	) );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );

	add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );


}

add_action( 'after_setup_theme', 'mtm6303assg2_setup' );
// add_action( 'init', 'mtm6303_assg2_setup' );

