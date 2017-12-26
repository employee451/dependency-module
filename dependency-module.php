<?php
/*
Plugin Name: Dependency Module
Plugin URI: http://github.com/employee451/dependency-module
Description: This plugin delivers the essential dependencies for Employee 451 Pixelarity themes.
Author: Employee 451
Author URI: http://employee451.com/
Version: 0.0.1
GitHub Plugin URI: employee451/dependency-module
*/

$dependency_module_enabled = true;

/**
 * Enqueue scripts and styles.
 */
function dependency_module_scripts() {
  // Font Awesome
	wp_enqueue_style( 'dependency-module-font-awesome', plugins_url( 'assets/css/font-awesome.min.css' ) );

  // HTML5 shiv

  // Skel
	wp_enqueue_script( 'dependency-module-skel', plugins_url( 'assets/js/skel.min.js' ), array( 'jquery' ), null, true );

  // Util
	wp_enqueue_script( 'dependency-module-util', plugins_url( 'assets/js/util.js' ), array( 'jquery' ), null, true );

  // Respond

  // wp_enqueue_script( 'dependency-module-', plugins_url( 'assets/' ), array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'dependency_module_scripts' );
