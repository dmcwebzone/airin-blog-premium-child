<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog Premium Child
* Description: Functions
* ------------------------------------------------------------------------------ */

if (!function_exists('airinblog_child_fun_scripts')) {
	function airinblog_child_fun_scripts() {
		wp_enqueue_style('airinblog-style-child', get_template_directory_uri() . '/style.css');
	}
	add_action('wp_enqueue_scripts', 'airinblog_child_fun_scripts', 1);
}

/* ------------------------------------------------------------------------------
* Below you can add your functions
* ------------------------------------------------------------------------------ */


