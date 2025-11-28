<?php
/**
 * Plugin Name: Pricing Plans Widget Advanced
 * Description: Elementor widget that preserves the original pricing HTML/CSS/JS but adds improved responsiveness and extra functionality.
 * Version: 1.1
 * Author: ALI HOSSAIN
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Register widget
function ppwa_register_widget( $widgets_manager ) {
    require_once( __DIR__ . '/widget-pricing-plans-advanced.php' );
    $widgets_manager->register( new \Pricing_Plans_Widget_Advanced() );
}
add_action( 'elementor/widgets/register', 'ppwa_register_widget' );

// Enqueue frontend libs (Bootstrap + jQuery from WP)
function ppwa_enqueue_assets() {
    wp_enqueue_style( 'ppwa-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'ppwa-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'ppwa_enqueue_assets' );
