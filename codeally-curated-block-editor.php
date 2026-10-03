<?php
/**
 * Plugin Name:       Codeally Curated Block Editor
 * Plugin URI:        https://github.com/oldrup/codeally-curated-block-editor
 * Description:       A focused block set and fewer distractions when writing posts.
 * Version:           1.1.2
 * Requires at least: 6.9
 * Requires PHP:      8.2
 * Author:            Codeally
 * Author URI:        https://codeally.dk
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       codeally-curated-block-editor
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Prevent direct execution.
}

/**
 * Disable Block Directory suggestions in the block inserter.
 */
add_filter( 'block_directory_enabled', '__return_false' );

/**
 * Disable remote block patterns fetched from WordPress.org.
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/**
 * Disable Openverse search in the editor's media inserter.
 */
add_filter( 'block_editor_settings_all', 'cdly_disable_openverse_media', 10, 1 );
function cdly_disable_openverse_media( array $settings ): array {
	$settings['enableOpenverseMediaCategory'] = false;
	$settings['enableOpenverseMediaTab']      = false;
	return $settings;
}

/**
 * Restrict block types in the standard Posts editor.
 *
 * @param array|bool               $allowed_block_types   Block type slugs, or a boolean.
 * @param \WP_Block_Editor_Context $block_editor_context The current block editor context.
 * @return array|bool The allowed block types, or true to allow all block types.
 */
add_filter( 'allowed_block_types_all', 'cdly_allowed_block_types_for_posts', 10, 2 );
function cdly_allowed_block_types_for_posts( array|bool $allowed_block_types, \WP_Block_Editor_Context $block_editor_context ): array|bool {

	// Apply the curated block list only to standard posts in the post editor.
	if (
		isset( $block_editor_context->name, $block_editor_context->post ) &&
		'core/edit-post' === $block_editor_context->name &&
		'post' === $block_editor_context->post->post_type
	) {
		return array(
			'core/accordion',
			'core/accordion-item',
			'core/accordion-header',
			'core/accordion-panel',
			'core/audio',
			'core/block',
			'core/button',
			'core/buttons',
			'core/code',
			'core/column',
			'core/columns',
			'core/cover',
			'core/details',
			'core/embed',
			'core/gallery',
			'core/group',
			'core/heading',
			'core/image',
			'core/icon',
			'core/list',
			'core/list-item',
			'core/media-text',
			'core/paragraph',
			'core/preformatted',
			'core/pullquote',
			'core/quote',
			'core/separator',
			'core/table',
			'core/tabs',
			'core/tab-list',
			'core/tab-panels',
			'core/tab-panel',
			'core/video',
			'core/missing',
			'cdly/pdf-link',
			'include-mastodon-feed/gutenberg-block',
			'outermost/icon-block',
			'simpletoc/toc',
		);
	}

	// Do not apply the block-type allowlist to pages, custom post types, or the Site Editor.
	return true;
}

/**
 * Enqueue styles and scripts for the curated Block Editor experience.
 */
add_action( 'enqueue_block_editor_assets', 'cdly_enqueue_block_editor_restrictions' );
function cdly_enqueue_block_editor_restrictions(): void {
	$plugin_path = plugin_dir_path( __FILE__ );
	$plugin_url  = plugin_dir_url( __FILE__ );

	// Enqueue CSS UI decluttering stylesheet.
	$css_file = $plugin_path . 'assets/css/curated-block-editor.css';
	if ( file_exists( $css_file ) ) {
		wp_enqueue_style(
			'cdly-restrict-blocks-style',
			$plugin_url . 'assets/css/curated-block-editor.css',
			array(),
			(string) filemtime( $css_file )
		);
	}

	// Enqueue JS variation unregistration script.
	$js_file = $plugin_path . 'assets/js/curated-block-editor.js';
	if ( file_exists( $js_file ) ) {
		wp_enqueue_script(
			'cdly-restrict-blocks-script',
			$plugin_url . 'assets/js/curated-block-editor.js',
			array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
			(string) filemtime( $js_file ),
			true
		);
	}
}