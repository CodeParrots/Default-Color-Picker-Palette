<?php
/*
 * Plugin Name: Default Color Picker Palette
 * Plugin URI: null
 * Version: 1.0.0
 * Description: Set the default color picker palette on all instances of the iris color picker.
 * Author: Code Parrots
 * Author URI: http://www.codeparrots.com
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Enqueue the script and localize the colors
 *
 * @since 1.0.0
 */
function codeparrots_default_palette() {

	$colors = (array) apply_filters( 'codeparrots_dcp_palette', [
		'#000000',
		'#FF0000',
		'#800000',
		'#FFFF00',
		'#1C566A',
		'#DAF7A6',
	] );

	wp_enqueue_script( 'codeparrots-dcp', plugin_dir_url( __FILE__ ) . '/js/codeparrots-dcp.js', array( 'wp-color-picker' ), true, '1.0.0' );

	wp_localize_script( 'codeparrots-dcp', 'dcp', [
		'colors' => $colors,
	] );

}

add_action( 'admin_enqueue_scripts', 'codeparrots_default_palette' );
