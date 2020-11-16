<?php
/**
* Plugin Name: Bootstrap Snippets
* Plugin URI: http://
* Description: Import bootstrap snippets
* Version: 1.2
* Author: Kayla Wiest
* Author URI: 
* License: 
*/

/*--------------------------------------------------------------
# IMPORT CSS + JS
--------------------------------------------------------------*/
function my_enqueued_assets() {
/*    wp_enqueue_script('my-js-file', plugin_dir_url(__FILE__) . '/js/script.js', '', time());*/
    wp_enqueue_style('my-css-file', plugin_dir_url(__FILE__) . 'style.min.css', '', time());
}
add_action('wp_enqueue_scripts', 'my_enqueued_assets');
