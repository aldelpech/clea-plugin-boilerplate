<?php
/**
* Plugin Name: Clea Plugin Boiler Plate
* Plugin URI:  http://knowledge.parcours-performance.com
* Description: A base plugin with a settings page
* Author:      Anne-Laure Delpech
* Author URI:  http://knowledge.parcours-performance.com
* License:     GPL2
* Domain Path: /languages
* Text Domain: clea-plugin-boilerplate
* 
* @package		clea-plugin-boilerplate
* @version		0.3.0
* @author 		Anne-Laure Delpech
* @copyright 	Copyright (c) 2016 Anne-Laure Delpech
* @link			https://github.com/aldelpech/CLEA-presentation
* @license 		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
* @since 		0.1.0
*/
 
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Path to files
 * @since 0.1.0
 *----------------------------------------------------------------------------*/

define( 'CLEA_PLUGIN_BOILERPLATE_FILE', __FILE__ );
define( 'CLEA_PLUGIN_BOILERPLATE_BASENAME', plugin_basename( CLEA_PLUGIN_BOILERPLATE_FILE ));
define( 'CLEA_PLUGIN_BOILERPLATE_DIR_PATH', plugin_dir_path( CLEA_PLUGIN_BOILERPLATE_FILE ));
define( 'CLEA_PLUGIN_BOILERPLATE_DIR_URL', plugin_dir_url( CLEA_PLUGIN_BOILERPLATE_FILE ));
		
/********************************************************************************
* appeler d'autres fichiers php et les exécuter
* @since 0.1
********************************************************************************/	
	
// charger des styles, fonts ou scripts correctement
require_once CLEA_PLUGIN_BOILERPLATE_DIR_PATH . 'includes/clea-plugin-boilerplate-enqueues.php'; 

// internationalisation de l'extension
require_once CLEA_PLUGIN_BOILERPLATE_DIR_PATH . 'includes/clea-plugin-boilerplate-i18n.php'; 

// Settings page for the admin
require_once CLEA_PLUGIN_BOILERPLATE_DIR_PATH . 'admin/clea-plugin-boilerplate-settings-page.php'; 

// load styles and scripts for the admin
require_once CLEA_PLUGIN_BOILERPLATE_DIR_PATH . 'admin/clea-plugin-boilerplate-admin-enqueue.php'; 

// the sections and fields data for the settings page. 
require_once CLEA_PLUGIN_BOILERPLATE_DIR_PATH . 'admin/clea-plugin-boilerplate-admin-settings.php'; 

/******************************************************************************
* Actions à réaliser à l'initialisation et l'activation du plugin
* @since 0.1 
******************************************************************************/



	
function clea_plugin_boilerplate_activation() {

}
register_activation_hook(__FILE__, 'clea_plugin_boilerplate_activation');
	
/*----------------------------------------------------------------------------*
 * deactivation and uninstall
 *----------------------------------------------------------------------------*/
/* upon deactivation, wordpress also needs to rewrite the rules */
register_deactivation_hook(__FILE__, 'clea_plugin_boilerplate_deactivation');

function clea_plugin_boilerplate_deactivation() {
	
}

// register uninstaller
register_uninstall_hook(__FILE__, 'clea_plugin_boilerplate_uninstall');

function clea_plugin_boilerplate_uninstall() {    
	// actions to perform once on plugin uninstall go here
	// remove all options and custom tables
	
	$option_name = 'clea_plugin_boilerplate';
 
	delete_option( $option_name );
	 
	// For site options in Multisite
	delete_site_option( $option_name );  
	
}