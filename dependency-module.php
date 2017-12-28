<?php
/*
Plugin Name: Dependency Module
Plugin URI: http://github.com/employee451/dependency-module
Description: This plugin delivers the essential dependencies for Employee 451 Pixelarity themes.
Author: Employee 451
Author URI: http://employee451.com/
Version: 1.0
GitHub Plugin URI: employee451/dependency-module
*/

/**
 * Enqueue scripts and styles.
 */
function dependency_module_scripts() {
  // Font Awesome
	wp_enqueue_style( 'dependency-module-font-awesome', plugins_url( 'assets/css/font-awesome.min.css', __FILE__ ), array(), '4.6.3' );

	// HTML5 Shiv
	wp_enqueue_script( 'dependency-module-html5-shiv', plugins_url( 'assets/js/ie/html5shiv.js', __FILE__ ), array(), '3.6.2' );
	wp_script_add_data( 'dependency-module-html5-shiv', 'conditional', 'lte IE 8' );

  // Skel
	wp_enqueue_script( 'dependency-module-skel', plugins_url( 'assets/js/skel.min.js', __FILE__ ), array( 'jquery' ), '3.0.1', true );

  // Util
	wp_enqueue_script( 'dependency-module-util', plugins_url( 'assets/js/util.js', __FILE__ ), array( 'jquery' ), null, true );

	// Respond
	wp_enqueue_script( 'dependency-module-respond', plugins_url( 'assets/js/ie/respond.min.js', __FILE__ ), array(), '1.4.2', true );
	wp_script_add_data( 'dependency-module-respond', 'conditional', 'lte IE 8' );
}
add_action( 'wp_enqueue_scripts', 'dependency_module_scripts' );
