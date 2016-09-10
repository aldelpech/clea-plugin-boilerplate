<?php
/**
 *
 * Enqueue styles and scripts for the admin settings page

 *
 * @link       	
 * @since      	0.2.0
 *
 * @package    clea-plugin-boilerplate
 * @subpackage clea-plugin-boilerplate/admin
 * Text Domain: clea-plugin-boilerplate
 */
 
add_action( 'admin_enqueue_scripts',  'clea_plugin_boilerplate_admin_enqueue_scripts' );

function clea_plugin_boilerplate_admin_enqueue_scripts( $hook ) {
	

	// to find the right name, go to the settings page and inspect it
	// the name is somewhere in the <body class="">
	// it will always begin with settings_page_
	if( 'settings_page_clea-plugin-boilerplate' != $hook ) { 
        echo "not the right page, this is : " ;
		echo $hook ;
		return;
		
    }

	// for the alpha color picker
	// source : https://github.com/BraadMartin/components/tree/master/alpha-color-picker
    wp_enqueue_style(
        'alpha-color-picker',
        CLEA_PLUGIN_BOILERPLATE_DIR_URL . 'admin/css/alpha-color-picker.css', 
        array( 'wp-color-picker' ) // You must include these here.
    );

	wp_enqueue_script(
        'alpha-color-picker',
        CLEA_PLUGIN_BOILERPLATE_DIR_URL . 'admin/js/alpha-color-picker.js', 
        array( 'jquery', 'wp-color-picker' ), // You must include these here.
        null,
        true
    );
	
    // This is the JS file that will contain the trigger script.
    // Set alpha-color-picker as a dependency here.
    wp_enqueue_script(
        'clea-add-button-admin-color-js',
        CLEA_PLUGIN_BOILERPLATE_DIR_URL . 'admin/js/clea-plugin-boilerplate-color-trigger.js', 
        array( 'alpha-color-picker' ),
        null,
        true
    );

	// options page style
    wp_enqueue_style(
        'clea-plugin-boilerplate-admin-style',
        CLEA_PLUGIN_BOILERPLATE_DIR_URL . 'admin/css/clea-plugin-boilerplate-admin.css'
    );

	
} 



