=== User Role Widget Areas ===

Plugin Name: User Role Widget Areas
Plugin URI: 
Version: 1.4
Author: Rob Smelik
Contributors: Rob Smelik
Author URI: http://www.robsmelik.com
Tags: sidebar, widget area, widget, user, role, logged in, logged out, admin, administrator, editor, author, contributor, subscriber, shortcode, post, page
Requires at least: 3.9
Tested up to: 4.3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

### Description

This plugin allows you to selectively display content in your themes active widget areas based on the user roles (Administrator, Editor, Author, Contributor or Subscriber) of logged in users. It also comes with two user status based widget areas for displaying content to all logged in users or all logged out users. All user role and status based widget areas can be displayed in any existing sidebar or widget area within your theme.


### Plugin Features

* 5 User role based widget areas, one for each of the standard WordPress user roles.
* 2 User status based widget areas, one for logged in users and one for logged out users.
* 2 Widgets for displaying your new widget areas on the front end (public site).
* Additional shortcodes for displaying your user role and user status based widget areas.
* The ability to hard code the script into your theme that displays the widget areas on the front end.
* Uses standard WordPress [Roles and Capabilities](https://codex.wordpress.org/Roles_and_Capabilities) functions.
* Well documented, lightweight code that is built for speed (the plugin itself is only 11kb).


### Rate The Plugin

If you like this plugin and find it useful please take a moment to [rate it](https://wordpress.org/support/view/plugin-reviews/user-role-widget-areas#postform). Thanks!


== Installation ==

### Installation

1. In WordPress go to Plugins > Add New and search for “User Role Widget Areas”. 
2. Install and activate the plugin using the built in WordPress plugin installer. 
3. Go to Appearance > Widgets. You will notice a new set of user role and status based widget areas. Drag any widget into those areas that you desire.
4. Drag the installed URWA display widgets to the sidebar or widget area where you want your user role based widgets to appear.
5. Refresh your public site to see role based widgets and log out or log in as a different user role to see the widgets change. 


### Additional Usage - Shortcodes

Two shortcodes come installed with this plugin.

The following shortcode will display the role based widgets that you have defined on the Appearance > Widgets page in WordPress:

[user-role-widget-areas] 

The following shortcode will display the User - Logged In widget area:

[user-status-widget-areas] 

### Additional Usage - Hardcoding

You can also hardcode the dynamic widget areas into your theme using the following PHP code.

The following code will display the role based widgets that you have defined on the Appearance > Widgets page in WordPress when placed in your theme:

`<?php echo do_shortcode('[user-role-widget-areas]'); ?>` 


The following code will display the status based widgets that you have defined on the Appearance > Widgets page in WordPress when placed in your theme:

`<?php echo do_shortcode('[user-status-widget-areas]'); ?>` 

### Advanced Styling

Each role based widget area gets wrapped in a unique ID allowing advanced users to individually style the widget areas. For more information on styling please reference the plugin documentation link which appears in the Settings menu after activation.


== Frequently Asked Questions ==

### FAQ

Q: I dragged widgets into the User Role Widget Areas but they are not showing up on the front end. Why?

A: You must make sure that you have placed the “URWA - Users By Role” widget into any existing NON-USER widget area where you want to display specific widgets based on user roles.

Q: I did the step above but the User Role widgets are still not showing up.

A: Make sure you have at least one widget in the widget area for the role you are logged in as. For example: If you are logged in as an administrator drag a text widget into the Users - Administrators widget area and give it a title and some placeholder content. Go back to your browser and refresh. 


== Screenshots ==

1. screenshot-1.jpg
2. screenshot-2.jpg
3. screenshot-3.jpg
4. screenshot-4.jpg
5. screenshot-5.jpg

== CHANGELOG ==

= 1.4 =

* Minor updates to documentation
* Minor updates to screenshots

= 1.3 =

* Update to the conditional statements to detect if a widget area is active which fixes a small error code that appeared when any user widget areas were left empty
* Changed label of status based display widget to 'URWA - Users by Status' to better clarify the widgets functionality to users
* Minor updates to documentation including the WordPress stable tag
* Minor updates to screenshots
* Tested functionality on a variety of themes and browsers

= 1.2 =

* Minor updates to documentation

= 1.1 =

* Initial release
* Added registration for 5 user role based widget areas
* Added registration for 2 user status based widget areas
* Added registration for 2 widgets that display user role and status based widget areas on the front end
* Added shortcode support for displaying user role and status based widget areas on the front end
* Created a documentation page under the Settings menu which includes tutorial, additional usage, advanced styling, changelog and support content
* Tested functionality on a variety of themes