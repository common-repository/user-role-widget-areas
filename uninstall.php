<?php
/**
 * Uninstall User Role Widget Areas Plugin
 *
 * Used to uninstall this plugin and remove any options
 * and transients from the database. Fired when the plugin
 * is uninstalled. 
 *
 * @package     user_role_widget_areas
 * @author      Rob Smelik
 * @version     1.1
 * 
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
