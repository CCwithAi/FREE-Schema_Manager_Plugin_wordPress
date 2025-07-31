=== Central Schema Manager ===
Contributors: CCwithAI
Donate Link: https://ccwithai.com
Tags: json-ld, schema, structured data, seo, wordpress, plugin, homepage, posts, pages
Requires at least: 4.6
Tested up to: 6.8
Stable tag: 2.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple, reliable plugin to manage page-specific schema from a central settings page.

== Description ==

This plugin allows you to easily manage JSON-LD (JSON Schema) for your WordPress site from a central settings page. You can define schema for your homepage and for individual posts and pages. The plugin ensures that the schema is correctly outputted to the `<head>` section of your site, helping you improve your site's SEO and structured data.

== Installation ==

1. Upload the `central-schema-manager` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Navigate to `Settings > Page-Specific Schema` in your WordPress admin area.
4. Enter your JSON-LD code for the homepage and/or individual posts/pages and save changes.

== Frequently Asked Questions ==

= What is JSON Schema (JSON-LD)? =
JSON-LD (JavaScript Object Notation for Linked Data) is a method of encoding Linked Data using JSON. It's commonly used to add structured data to web pages, which helps search engines understand the content of your pages better, potentially leading to rich snippets in search results.

= What content types are supported? =
Currently, the plugin supports adding JSON Schema to your homepage and all published 'posts' and 'pages'.

= Does this plugin permanently modify my theme files? =
No, this plugin does not permanently modify any theme files. All JSON Schema is added dynamically using WordPress hooks.

== Changelog ==

= 2.0.0 =
* Initial release of the Central Schema Manager.