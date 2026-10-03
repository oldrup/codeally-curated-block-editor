=== Codeally Curated Block Editor ===
Contributors: oldrup
Tags: gutenberg, block-editor, restrict-blocks, allowed-blocks, editor-curation
Requires at least: 6.9
Tested up to: 7.1
Requires PHP: 8.2
Stable tag: 1.1.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A focused block set and fewer distractions when writing posts.

== Description ==

Codeally Curated Block Editor is an opinionated, zero-configuration plugin that provides a focused block set and fewer distractions when writing posts.

It allows a specifically curated set of core and custom blocks in standard posts, while turning off remote directory features, unused embed providers, and distracting inspector UI panels. Pages, custom post types, and the Site Editor retain their full block availability.

= Features =

* **Curated Block Set:** Allows only a specifically selected set of blocks when editing standard 'post' post types.
* **Disables Block Directory:** Prevents users from searching for or installing external block plugins from the inserter.
* **Disables Remote Patterns:** Stops WordPress.org remote block patterns from loading in the pattern inserter.
* **Disables Openverse:** Removes the Openverse media search category and tab from the editor media library.
* **Prunes Embed Variations:** Unregisters obscure embed providers, keeping only YouTube, Vimeo, Spotify, Pocket Casts, and VideoPress.
* **Declutters Inspector UI:** Hides block card descriptions, control help text, and advanced custom CSS panels in the sidebar.
* **Preserves Site Editor:** Full block availability remains untouched in the Site Editor, for pages, and for custom post types.

== Installation ==

1. Upload the `codeally-curated-block-editor` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the **Plugins** menu in WordPress.
3. No configuration needed—the curated block set and editor decluttering apply automatically when editing posts.

== Frequently Asked Questions ==

= Does this plugin have a settings page? =
No. This plugin is intentionally opinionated with zero options or database overhead.

= What if I need filters to customize the allowed blocks? =
If your project requires customizable filters or a different curation strategy, check out [MRW Simplified Editor](https://wordpress.org/plugins/mrw-web-design-simple-tinymce/).

== Credits ==

Inspired by and built upon techniques shared in:
* [15 ways to curate the WordPress editing experience](https://developer.wordpress.org/news/2024/07/15-ways-to-curate-the-wordpress-editing-experience/) by Nick Diego.
* [MRW Simplified Editor](https://wordpress.org/plugins/mrw-web-design-simple-tinymce/) by Mark Root-Wiley (MRW Web Design).

== Changelog ==

= 1.1.2 =
* Renamed the plugin to Codeally Curated Block Editor.

= 1.1.1 =
* Published on https://github.com/oldrup/codeally-block-restrictions

= 1.1.0 =
* Added CSS stylesheet to declutter the Block Inspector panel (hides block descriptions, help text, and custom CSS input).

= 1.0.0 =
* Initial release.