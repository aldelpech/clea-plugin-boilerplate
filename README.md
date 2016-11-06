=== Clea Plugin Boilerplate ===
Contributors: Anne-Laure
Tags: button, post
Requires at least: 4.0.1
Tested up to: 4.6
Stable tag: 1.0 
License: GNUv3 or later
License URI: https://www.gnu.org/licenses/gpl.html

A base plugin with a settings page. 

== Description ==

This is a *base* plugin, used to learn about plugin settings and plugin best practices. 
It doesn't do anything except add a "Clea plugin boilerplate" settings page in the WordPress settings menu. 

Note that this plugin's README.md base comes from [WordPress](https://wordpress.org/plugins/about/readme.txt "WordPress.org : readme.txt") 

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/clea-plugin-boilerplate` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Add button screen to configure the plugin
1. Go to the front end of the website : each post will now have a clickable button at the end of it


== Frequently Asked Questions ==

= How to use this boilerplate for another plugin ? =

* Change the 'clea-plugin-boilerplate' plugin directory name to 'your-plugin-name'
* Change the name of each file from 'clea-plugin-boilerplate-xxx' to 'your-plugin-name-xxx'
* In each file replace (in this order) : 
** CLEA_PLUGIN_BOILERPLATE_  	--> YOUR-PLUGIN-NAME
** clea-plugin-boilerplate		--> your-plugin-name
** clea-plugin-boilerplate-  	--> your-plugin-name-
** clea_plugin_boilerplate_ 	--> your_plugin_name_
* In the /admin/your-plugin-name-settings-page.php change the menu name from 'Clea plugin boilerplate' to 'Your Plugin Name'. 
That's all. 


== Screenshots ==


![The settings page for this plugin](/images/plugin-new-settings-menu.jpg?raw=true "The settings page for this plugin")


== Changelog ==

=1.0 =
* plugin created from clea-add-button test plugin
* a pot file was created in the languages directory

= 0.3 =
* the definition of sections and fields to display on the settings page is now in /admin/clea-add-button-admin-settings.php
* 3 new types of fields may be processed : date-picker, email and url
* validation and sanitation of user inputs is done and the user gets a notice in case of a bad email

= 0.2 =
* Added a settings page able to display all types of field

= 0.1 =
* Setup the base plugin

== Upgrade Notice ==

= 0.2 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`