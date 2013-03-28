<?php
/*
Plugin Name: Werkrpress Customization Request Widget
Plugin URI:
Description: Request a Wordpress Theme Customization from Werkpress
Version: 0.1
Author: Werkpress
Author URI:
License: GPL2
*/

require_once( plugin_dir_path( __FILE__ ) . 'custom_widget.php' );

class WerkpressDashboardWidget {
 
    function __construct() {
        add_action( 'wp_dashboard_setup', array( $this, 'remove_dashboard_widgets' ) );
        add_action( 'wp_dashboard_setup', array( $this, 'add_dashboard_widgets' ) );
    }
 
    function remove_dashboard_widgets() {
		global $remove_defaults_widgets;
		
		foreach ( $remove_defaults_widgets as $widget_id => $options ) {
			remove_meta_box( $widget_id, $options['page'], $options['context'] );
		}
    }
 
	function add_dashboard_widgets() {
	    global $custom_dashboard_widgets;
 
	    foreach ( $custom_dashboard_widgets as $widget_id => $options ) {
	        wp_add_dashboard_widget(
	            $widget_id,
	            $options['title'],
	            $options['callback']
	        );
	    }
	}
 
}
 
$wdw = new WerkpressDashboardWidget();