<?php

namespace Soderlind\Customizer\DynamicStyle;

\add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\theme_enqueue_styles' );

// add_filter( 'use_block_editor_for_post', '__return_true' );

/**
 * Load parent and child styles
 *
 * @return void
 */
function theme_enqueue_styles() : void {

	$parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ $parent_style ],
		wp_get_theme()->get( 'Version' )
	);
}


require_once 'customizer/customizer-controls.php';
