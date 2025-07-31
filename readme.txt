Central Schema Manager
Contributors: CCwithAI

https://ccwithai.com

Tags: json-ld, schema, structured data, seo, wordpress, plugin, homepage, posts, pages

Requires at least: 4.6

Tested up to: 6.8

Stable tag: 2.0.0

License: GPLv2 or later

License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple, reliable plugin to manage page-specific schema from a central settings page.

Description
This plugin allows you to easily manage JSON-LD (JSON Schema) for your WordPress site from a central settings page. You can define schema for your homepage and for individual posts and pages. The plugin ensures that the schema is correctly outputted to the <head> section of your site, helping you improve your site's SEO and structured data.

About The Free Central Schema Manager
Centralised Management
A single, elegant settings page to manage schema for your homepage and all individual posts and pages.

Reliable & Lightweight
A single-file plugin with zero dependencies, built for maximum compatibility and performance.

Truly Free, No Paywall
The only free plugin that lets you add custom schema to individual posts and pages. No features are hidden behind a paywall.

Installation
Upload the central-schema-manager folder to the /wp-content/plugins/ directory.

Activate the plugin through the 'Plugins' menu in WordPress.

Navigate to Settings > Page-Specific Schema in your WordPress admin area.

Enter your JSON-LD code for the homepage and/or individual posts/pages and save changes.

How to Use the Free Plugin
Once activated, navigate to the new menu item in your WordPress dashboard. You’ll find a clean interface to paste your manually generated JSON-LD code. It’s the perfect tool for those who prefer a hands-on approach.

Important Note: This plugin will only manage schema added through its own interface. It does not support or detect schema added by other plugins or themes. To manage existing schema, you will need the Pro version.

After pasting your code, click the save button. Please be aware that saving a blank field for a page will remove any existing schema that was previously added for that page via this plugin.

Detailed Workflow: Manually Generating Schema with an AI
To get accurate schema, you need to give the AI model the full context of your page and your business. Here’s a step-by-step guide:

Go to Your Page: Open the specific post or page on your website for which you want to create schema.

Get the Page Code: Right-click anywhere on the page and select “View Page Source” or “Inspect”. Copy the entire HTML code of the page.

Prepare Your Prompt: Go to an AI model like Google’s Gemini. You’ll need to give it a detailed prompt. Start by pasting the full HTML you just copied.

Add Business Details: Crucially, you must also tell the AI key information it can’t guess from the code, such as:

The exact URL of the page.

Your official business name.

The URL of your company logo.

The specific type of schema you want (e.g., “LocalBusiness”, “Product”, “Article”).

Generate & Copy: Ask the AI to generate the JSON-LD schema based on all the information provided. Once it provides the code, copy it.

Paste into Plugin: Go back to the Central Schema Manager in WordPress and paste the generated code into the correct field for that page, then save.

Why Is This So Important?
Think of schema as a translator for Google. It turns your page content into a simple language Google understands perfectly. This helps you get eye-catching ‘Rich Results’ in search – like star ratings, prices, or event dates. These make your listing stand out and can dramatically increase clicks.

For a deep dive into the world of Schema Markup, check out our Interactive Guide to Implementing Schema Markup.

The Pro Advantage
This manual process can be time-consuming. Schema Master Pro automates this entire workflow. Our AI does the analysis and generation for you, saving you time and ensuring accuracy. For a complete, hands-off solution, or for help implementing schema across your entire site (E-commerce products, services, etc.), consider upgrading.

Frequently Asked Questions
What is JSON Schema (JSON-LD)? JSON-LD (JavaScript Object Notation for Linked Data) is a method of encoding Linked Data using JSON. It's commonly used to add structured data to web pages, which helps search engines understand the content of your pages better, potentially leading to rich snippets in search results.

What content types are supported? Currently, the plugin supports adding JSON Schema to your homepage and all published 'posts' and 'pages'.

Does this plugin permanently modify my theme files? No, this plugin does not permanently modify any theme files. All JSON Schema is added dynamically using WordPress hooks.

Changelog
2.0.0

Initial release of the Central Schema Manager.

Disclaimer and License
This plugin is provided "as is" without warranty of any kind, express or implied. The author, CCwithAI, is not responsible for any loss or damage of any kind, including but not limited to loss of data, loss of revenue, or any other commercial or personal damages, arising out of the use or inability to use this software.

This free plugin will not be actively maintained or updated with new features. For ongoing support, updates, and advanced automated features, please consider our Pro version.

This software is open-source and licensed under the GPLv2 or later. You are free to use, modify, and distribute it as you see fit, in accordance with the terms of the license.

You can find the plugin on our GitHub page.
