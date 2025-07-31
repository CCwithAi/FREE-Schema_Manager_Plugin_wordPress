Central Schema Manager
🚀 CURRENT VERSION 🚀
[ V2.0.0 - Stable Release ]
A simple, reliable plugin to manage page-specific JSON-LD schema from a central settings page.

https://ccwithai.com/interactive-guide-to-implementing-schema-markup/

Central Schema Manager is a lightweight, no-nonsense tool for developers, SEOs, and hands-on site owners who need precise control over their WordPress site's structured data without the bloat of complex plugins.

Vision
The Central Schema Manager is built on three core principles:

Centralised Control: Managing schema should be simple. We provide a single, elegant settings page to control the schema for your homepage and all individual posts and pages, eliminating the need to edit each one separately.

Performance First: Your website's speed is critical. This is a single-file plugin with zero dependencies, ensuring maximum compatibility and minimal impact on your site's performance.

Truly Free & Open: Essential SEO tools should be accessible. This plugin is completely free, with no features hidden behind a paywall. It is open-source and licensed under the GPLv2.

Getting Started
Prerequisites
WordPress Version 4.6 or higher

Administrator access to your WordPress dashboard

Installation
Download the Plugin

Go to the releases page on GitHub.

Download the latest central-schema-manager.zip file.

Upload to WordPress

Log in to your WordPress admin dashboard.

Navigate to Plugins > Add New.

Click the Upload Plugin button at the top of the page.

Choose the ZIP file you downloaded and click Install Now.

Activate

Once installed, click Activate Plugin.

You will find the plugin's settings page under Settings > Page-Specific Schema.

How to Use
Once activated, navigate to the new menu item in your WordPress dashboard. You’ll find a clean interface listing your homepage, published posts, and published pages, each with a dedicated field for you to paste your manually generated JSON-LD code.

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

Changelog
2.0.0
Initial release of the Central Schema Manager.

Contributing
We welcome contributions! Whether you're fixing bugs, improving documentation, or suggesting features, please feel free to open an issue or submit a Pull Request.

License and Disclaimer
This plugin is provided "as is" without warranty of any kind, express or implied. The author, CCwithAI, is not responsible for any loss or damage of any kind, including but not limited to loss of data, loss of revenue, or any other commercial or personal damages, arising out of the use or inability to use this software.

This free plugin will not be actively maintained or updated with new features. For ongoing support, updates, and advanced automated features, please consider our Pro version.

This software is open-source and licensed under the GPLv2 or later. You are free to use, modify, and distribute it as you see fit, in accordance with the terms of the license.

You can find the plugin on our GitHub page.
