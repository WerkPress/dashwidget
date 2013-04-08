<?php
/*
Plugin Name: Werkpress Customization Request Widget
Plugin URI:
Description: Request a Wordpress Theme Customization from Werkpress
Version: 0.1
Author: Werkpress
Author URI:
License: GPL2
*/

/**
 * Register with hook 'wp_enqueue_scripts', which can be used for front end CSS and JavaScript
 */
function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', plugins_url('assets/ww_style.css', __FILE__));
	wp_enqueue_script('my-admin-js', plugins_url('assets/ww.js', __FILE__));
	wp_localize_script( 'my-admin-js', 'ajaxcontactajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	
}

add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');
// creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_ajaxcontact_send_mail', 'wwSendMail' );
add_action( 'wp_ajax_ajaxcontact_send_mail', 'wwSendMail' );


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

function wwSendMail(){

	$name = esc_html($_POST['name']);
	$company = esc_html($_POST['company']);
	$email = esc_html($_POST['email']);
	$website = esc_html($_POST['website']);
	$theme = esc_html($_POST['theme']);
	$hosting = esc_html($_POST['hosting']);
	$changes = esc_html($_POST['changes']);
	$budget = esc_html($_POST['budget']);

	// Build email

	$to = 'eric@westwerkdesign.com';
	$subject = "Theme Customization Request from $name";
	$message = "Request from: $name \n";
    $message .= "---\n";
	$message .= "Company: $company \n";
    $message .= "---\n";
	$message .= "Email: $email \n";
    $message .= "---\n";
	$message .= "Website: $website \n";
    $message .= "---\n";
	$message .= "Theme: $theme \n";
    $message .= "---\n";
	$message .= "Hosting: $hosting \n";
    $message .= "---\n";
	$message .= "Changes: $changes \n";
    $message .= "---\n";
	$message .= "Budget: $budget \n";
    $message .= "---\n";

	wp_mail( $to, $subject, $message );
    
    die("It worked");

}
 
$wdw = new WerkpressDashboardWidget();