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

Codeally Curated Block Editor is a zero-configuration plugin that provides a focused block set and fewer distractions when writing posts.

The curated block-type allowlist applies only to standard posts. Pages, custom post types, and the Site Editor are not restricted by that allowlist. Embed variations, remote patterns, Openverse search, and inspector UI are curated wherever the Block Editor is loaded.

Developed by [Bjarne Oldrup](https://oldrup.dk/) and sponsored by [Codeally](https://codeally.dk/).

= Features =

* Curated block set: Allows only a specifically selected set of blocks when editing standard 'post' post types.
* Block Directory: Prevents users from searching for or installing external block plugins from the inserter.
* Remote patterns: Stops WordPress.org remote block patterns from loading in the pattern inserter.
* Openverse: Removes the Openverse media search category and tab from the editor media library.
* Embed variations: Unregisters embed providers other than YouTube, Vimeo, Spotify, Pocket Casts, and VideoPress.
* Inspector UI: Hides block card descriptions, control help text, and custom CSS panels in the sidebar.
* Block-type allowlist scope: Restricts block types only in the standard Posts editor; editor-wide embed and inspector curation also applies in other Block Editor screens.

== Installation ==

1. Upload the `codeally-curated-block-editor` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the Plugins menu in WordPress.
3. No configuration needed—the curated block set and editor decluttering apply automatically when editing posts.

== Frequently Asked Questions ==

= Does this plugin have a settings page? =
No. The plugin has no settings page, creates no database options, and requires no configuration.

= What if I need filters to customize the allowed blocks? =
If your project requires customizable filters or a different curation strategy, see [MRW Simplified Editor](https://wordpress.org/plugins/mrw-web-design-simple-tinymce/).

= Which themes has the plugin been tested with? =
The plugin has been tested with Twenty Twenty-Five, Greyd, and Ollie (Full Site Editing themes), and Blocksy, Kadence, and GeneratePress (classic themes), as of September 2026.

== Credits ==

Inspired by and built upon techniques shared in:
* [15 ways to curate the WordPress editing experience](https://developer.wordpress.org/news/2024/07/15-ways-to-curate-the-wordpress-editing-experience/) by Nick Diego.
* [MRW Simplified Editor](https://wordpress.org/plugins/mrw-web-design-simple-tinymce/) by Mark Root-Wiley (MRW Web Design).

== Changelog ==

= 1.1.2 =
* Renamed the plugin to Codeally Curated Block Editor.

= 1.1.1 =
* Published at https://github.com/oldrup/codeally-curated-block-editor.

= 1.1.0 =
* Added CSS stylesheet to declutter the Block Inspector panel (hides block descriptions, help text, and custom CSS input).

= 1.0.0 =
* Initial release.