<?php
/**
 * Plugin Name:       Api Block
 * Description:       Example block scaffolded with Create Block tool.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       api-block
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_api_block_block_init() {
	register_block_type( __DIR__ . '/build/api-block' );
}
add_action( 'init', 'create_block_api_block_block_init' );

function enqueue_cat_fact_script(){
	wp_enqueue_script(
		'cat-fact-script',
		plugin_dir_url(__FILE__) . 'random-cat-fact.js',
		array(),
		null,
		true
	);
}

add_action('wp_enqueue_scripts', 'enqueue_cat_fact_script');

