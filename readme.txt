Central Schema Manager
A simple, reliable plugin to manage page-specific JSON-LD schema from a central settings page.





Contributors

CCwithAI

Tags

json-ld, schema, structured data, seo, wordpress, plugin

Requires at least

4.6

Tested up to

6.8

Stable tag

2.0.0

License

GPLv2 or later

License URI

http://www.gnu.org/licenses/gpl-2.0.html

https://ccwithai.com

Description
In the world of modern SEO, accurate structured data is non-negotiable. Central Schema Manager provides a streamlined solution to the often cumbersome task of implementing page-specific JSON-LD schema. Instead of dealing with custom fields on every post or installing bloated, complex plugins, this tool gives you a single, elegant settings page.

From this central hub, you can easily add, edit, and manage the schema for your homepage and for every individual post and page on your site. The plugin ensures your custom schema is correctly injected into the <head> section of the appropriate pages, helping you communicate effectively with search engines to improve your site's visibility and eligibility for rich results.

About The Free Central Schema Manager
This plugin was built with a clear philosophy: provide a powerful, no-nonsense tool for developers, SEOs, and hands-on site owners.

Centralised Management
A single, elegant settings page to manage schema for your homepage and all individual posts and pages. No more hunting through individual edit screens to find and update your structured data.

Reliable & Lightweight
This is a single-file plugin with zero dependencies, built for maximum compatibility and performance. It does one job and does it perfectly without adding any bloat or slowing down your site.

Truly Free, No Paywall
This is the only free plugin that provides a central interface to add custom schema to individual posts and pages. All features are available out of the box. No features are hidden behind a paywall.

Installation
Download the plugin ZIP file from the GitHub repository's releases page.

Log in to your WordPress admin dashboard.

Navigate to Plugins > Add New.

Click the Upload Plugin button at the top of the page.

Choose the ZIP file you downloaded and click Install Now.

Once installed, click Activate Plugin.

Navigate to Settings > Page-Specific Schema in your WordPress admin menu to start adding your schema.

How to Use the Free Plugin
Once activated, navigate to the new menu item in your WordPress dashboard. You’ll find a clean interface listing your homepage, published posts, and published pages, each with a dedicated field for you to paste your manually generated JSON-LD code. It’s the perfect tool for those who prefer a hands-on approach to their structured data.

Important Note: This plugin will only manage schema added through its own interface. It does not support or detect schema added by other plugins or themes. To manage existing schema from other sources, you will need the Pro version.

After pasting your code, click the Save Changes button at the bottom. Please be aware that saving a blank field for a page will remove any existing schema that was previously added for that page via this plugin.

Detailed Workflow: Manually Generating Schema with an AI
To get accurate schema, you need to give an AI model the full context of your page and your business. Here’s a step-by-step guide:

Go to Your Page: Open the specific post or page on your website for which you want to create schema.

Get the Page Code: Right-click anywhere on the page and select “View Page Source” or “Inspect”. Copy the entire HTML code of the page.

Prepare Your Prompt: Go to an AI model like Google’s Gemini. You’ll need to give it a detailed prompt. Start by pasting the full HTML you just copied.

Add Business Details: Crucially, you must also tell the AI key information it can’t guess from the code, such as:

The exact URL of the page.

Your official business name.

The URL of your company logo (https://ccwithai.com/wp-content/uploads/2024/11/Generated-Image-March-29-2025-11_51PM.jpeg).

The specific type of schema you want (e.g., “LocalBusiness”, “Product”, “Article”).

Generate & Copy: Ask the AI to generate the JSON-LD schema based on all the information provided. The output should be a code block starting with <script type="application/ld+json">. Copy the entire code block.

Paste into Plugin: Go back to the Central Schema Manager in WordPress and paste the generated code into the correct field for that page, then save.

Why Is This So Important?
Think of schema as a translator for Google. It turns your page content into a simple, structured language that search engines understand perfectly. This helps you get eye-catching ‘Rich Results’ in search – like star ratings, prices, or event dates. These enhanced listings make your website stand out from the competition and can dramatically increase clicks from qualified users.

For a deep dive into the world of Schema Markup, check out our Interactive Guide to Implementing Schema Markup.

The Pro Advantage
This manual process can be time-consuming. Schema Master Pro automates this entire workflow. Our AI does the analysis and generation for you, saving you time and ensuring accuracy. For a complete, hands-off solution, or for help implementing schema across your entire site (E-commerce products, services, etc.), consider upgrading.

Frequently Asked Questions
What is JSON Schema (JSON-LD)?
JSON-LD (JavaScript Object Notation for Linked Data) is a method of encoding Linked Data using JSON. It's commonly used to add structured data to web pages, which helps search engines understand the content of your pages better, potentially leading to rich snippets in search results.

What content types are supported?
Currently, the plugin supports adding JSON Schema to your homepage and all published 'posts' and 'pages'.

Does this plugin permanently modify my theme files?
No, this plugin does not permanently modify any theme files. All JSON Schema is added dynamically using WordPress hooks.

Changelog
2.0.0
Initial release of the Central Schema Manager.

Disclaimer and License
This plugin is provided "as is" without warranty of any kind, express or implied. The author, CCwithAI, is not responsible for any loss or damage of any kind, including but not limited to loss of data, loss of revenue, or any other commercial or personal damages, arising out of the use or inability to use this software.

This free plugin will not be actively maintained or updated with new features. For ongoing support, updates, and advanced automated features, please consider our Pro version.

This software is open-source and licensed under the GPLv2 or later. You are free to use, modify, and distribute it as you see fit, in accordance with the terms of the license.

You can find the plugin on our GitHub page.
