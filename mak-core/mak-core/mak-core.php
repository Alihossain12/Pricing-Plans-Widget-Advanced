<?php 
/*
 * Plugin Name: MAK Core
 * Plugin URI: https://wordpress.org/plugins
 * Description: Core plugin for MAK theme.
 * Version: 1.0.0
 * Author: MTS
 * Author URI: https://maktechsolution.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
*/

function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/heading_widget.php' );
    $widgets_manager->register( new \MAK_CORE_Heading_Widget() );


}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );



?>