<?php

	/**
	 * Plugin Name: GMT Scripts to Footer
	 * Plugin URI: https://github.com/cferdinandi/gmt-scripts-to-footer
	 * GitHub Plugin URI: https://github.com/cferdinandi/gmt-scripts-to-footer
	 * Description: Automatically move all JavaScript files to the footer for better performance. Adapted from <a href="http://www.kevinleary.net/move-javascript-bottom-wordpress/#comment-56740">code by Joshua David Nelson</a>.
	 * Author: Chris Ferdinandi
	 * Author URI: http://gomakethings.com
	 * Version: 1.0.0
	 * License: MIT
	 */


	function gmt_scripts_to_footer() {
		remove_action('wp_head', 'wp_print_scripts');
		remove_action('wp_head', 'wp_print_head_scripts', 9);
		remove_action('wp_head', 'wp_enqueue_scripts', 1);
	}
	add_action( 'wp_enqueue_scripts', 'gmt_scripts_to_footer' );