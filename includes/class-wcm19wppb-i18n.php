<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.data-lord.se
 * @since      1.0.0
 *
 * @package    Wcm19wppb
 * @subpackage Wcm19wppb/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wcm19wppb
 * @subpackage Wcm19wppb/includes
 * @author     Fredrik Larsson <fl@thehiveresistance.com>
 */
class Wcm19wppb_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wcm19wppb',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
