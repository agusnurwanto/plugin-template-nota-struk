<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       maremjaya.com
 * @since      1.0.0
 *
 * @package    Template_Nota_Struk
 * @subpackage Template_Nota_Struk/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Template_Nota_Struk
 * @subpackage Template_Nota_Struk/includes
 * @author     Agus Nurwanto <agusnurwantomuslim@gmail.com>
 */
class Template_Nota_Struk_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'template-nota-struk',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
