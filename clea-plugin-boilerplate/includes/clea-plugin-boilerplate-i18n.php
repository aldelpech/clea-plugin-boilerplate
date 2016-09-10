<?php
/**
 *
 * charger le bon text domain (internationalisation)
 *
 *
 * @link       	https://github.com/aldelpech/clea-plugin-boilerplate
 * @since      	0.1.0
 *
 * @package    clea-plugin-boilerplate
 * @subpackage clea-plugin-boilerplate/includes
 * Text Domain: clea-plugin-boilerplate
 */

add_action( 'plugins_loaded', 'clea_plugin_boilerplate_load_plugin_textdomain' );
 
function clea_plugin_boilerplate_load_plugin_textdomain() {
	
    load_plugin_textdomain( 'clea-plugin-boilerplate', FALSE, CLEA_PLUGIN_BOILERPLATE_BASENAME . '/languages/' );
	
}
