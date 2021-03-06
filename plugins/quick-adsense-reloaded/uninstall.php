<?php
/**
 * Uninstall Quick adsense reloaded
 *
 * @package     quads
 * @subpackage  Uninstall
 * @copyright   Copyright (c) 2015, René Hermenau
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) exit;


/**
 * Get an option
 *
 * Looks to see if the specified setting exists, returns default if not
 *
 * @since 1.0.0
 * @return mixed
 */
function quads_get_option_uninstall( $key = '', $default = false ) {
	$quads_options = get_option('quads_settings');
	$value = ! empty( $quads_options[ $key ] ) ? $quads_options[ $key ] : $default;
	$value = apply_filters( 'quads_get_option', $value, $key, $default );
	return apply_filters( 'quads_get_option_' . $key, $value, $key, $default );
}

if( quads_get_option_uninstall( 'uninstall_on_delete' ) ) {
	/** Delete all the Plugin Options */
	delete_option( 'quads_settings' );
        delete_option( 'quads_install_date');
        delete_option( 'quads_rating_div'); 
        delete_option( 'quads_version');
        delete_option( 'quads_version_upgraded_from');
        delete_option( 'quads_show_theme_notice');
        delete_option( 'quads_show_update_notice');
        
        /* Delete all post meta options */
        delete_post_meta_by_key( 'quads_timestamp' );
        delete_post_meta_by_key( 'quads_shares' );
        delete_post_meta_by_key( 'quads_jsonshares' );
        
        // Delete transients
        delete_transient ('quads_check_theme');
        delete_transient ('quads_activation_redirect');
        
}
