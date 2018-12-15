<?php
/**
 * @package Rentit_Bootstrap_4_Datetime_Picker_Updater
 * @version 1.0
 */
/*
Plugin Name: Rentit Bootstrap 4 Datetime Picker Updater (bug)
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: this make renit theme js and css file up to date
Version: 1.0
Author URI: https://ma.tt/
Text Domain: Rentit_Bootstrap_4_Datetime_Picker_Updater
*/
//SOURCE://https://github.com/tempusdominus/bootstrap-4
//NOTE: syntax changed based on original theme version is 3
/* add forntend */
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_4_Datetime_Picker_Updater_dequeue_scripts', 400 );
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_4_Datetime_Picker_Updater_enqueue_scripts', 400 );
/* add backend */
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_4_Datetime_Picker_Updater_dequeue_scripts', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_4_Datetime_Picker_Updater_enqueue_scripts', 400 );
/******************************************/
//Updating scripts
/******************************************/
function Rentit_Bootstrap_4_Datetime_Picker_Updater_dequeue_scripts() {
	wp_deregister_script( 'renita_bootstrap-datetimepicker' );
}
function Rentit_Bootstrap_4_Datetime_Picker_Updater_enqueue_scripts() {
	wp_enqueue_script( 'renita_bootstrap-datetimepicker',plugins_url("bootstrap-4-datetime-picker/build/js/tempusdominus-bootstrap-4.min.js",__FILE__ ), array( 'renita_moment-with-locales' ), '5.1.2', true);//throw erorr
}
/*************************************
*************************************/
/* add backend */
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_4_Datetime_Picker_Updater_dequeue_styles', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_4_Datetime_Picker_Updater_enqueue_styles', 400 );
/* add forntend */
/******************************************/
//Updating styles
/******************************************/
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_4_Datetime_Picker_Updater_dequeue_styles', 400 );
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_4_Datetime_Picker_Updater_enqueue_styles', 400 );
function Rentit_Bootstrap_4_Datetime_Picker_Updater_dequeue_styles() {
	wp_deregister_style( 'renita_bootstrap-datetimepicker');	
}
function Rentit_Bootstrap_4_Datetime_Picker_Updater_enqueue_styles() {
	wp_enqueue_style( 'renita_bootstrap-datetimepicker',plugins_url("bootstrap-4-datetime-picker/build/css/tempusdominus-bootstrap-4.min.css",__FILE__ ), array(), '5.1.2', true);
}


