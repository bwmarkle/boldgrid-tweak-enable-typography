<?php
/*
Plugin Name: BoldGrid Tweak - Enable Typography
Description: Enable Typography settings within the BoldGrid Theme Framework.
Version: 1.0
*/

/**
 * Enable Typography settings within the BoldGrid Theme Framework.
 *
 * @param  array $configs An array of BoldGrid Theme Framework configs.
 * @return array
 */
function boldgrid_tweak_enable_typography( $configs ) {
	$configs['customizer-options']['typography']['enabled'] = true;

	return $configs;
}

add_action( 'boldgrid_theme_framework_config', 'boldgrid_tweak_enable_typography' );
