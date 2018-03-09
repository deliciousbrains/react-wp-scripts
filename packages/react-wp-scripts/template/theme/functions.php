<?php
/**
 * %%APP_NAME%%
 *
 * Project generated by react-wp-scripts.
 */

namespace %%NAMESPACE%%;

require __DIR__ . '/loader.php';

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets' );

function enqueue_assets() {
	// https://github.com/humanmade/react-wp-scripts#enqueue_assets
	// Add additional options here:
	$options = [];

	enqueue_assets( get_stylesheet_directory(), $options );
}