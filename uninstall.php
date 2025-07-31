<?php
/**
 * Uninstall plugin
 *
 * @package Central_Schema_Manager
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Delete plugin options.
delete_option( 'csm_schema_options' );