<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Fired during plugin activation
 *
 * @link       https://pixelgrade.com
 *
 * @package    PixelgradeAssistant
 * @subpackage PixelgradeAssistant/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @package    PixelgradeAssistant
 * @subpackage PixelgradeAssistant/includes
 * @author     Pixelgrade <help@pixelgrade.com>
 */
class PixelgradeAssistantActivator {

	/**
	 * Run on plugin activation.
	 */
	public static function activate() {

		if ( defined( 'PIXELGRADE_CARE__PLUGIN_FILE' ) && class_exists( 'PixelgradeAssistant' ) ) {
			// Can't activate when Pixelgrade Care is also active.
			wp_die( sprintf( esc_html__( 'Error: plugin "%1$s" can\'t be activated when "%2$s" is active.', 'pixelgrade-assistant' ), 'Pixelgrade Assistant', 'Pixelgrade Care' ) .
			        '<br/>' . sprintf( esc_html__( 'Please go back and first deactivate "%s" if you wish to activate this plugin.', 'pixelgrade-assistant' ), 'Pixelgrade Care' ), esc_html__( 'Error Activating Plugin', 'pixelgrade-assistant' ) );
		}

		// Also reset theme updates transients to be sure that any logic introduced by the plugin can kick in.
		delete_site_transient( 'update_themes' );
	}
}
