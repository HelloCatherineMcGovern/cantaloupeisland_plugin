<?php
/**
 * @package imbibe_responsibly_psa
 * @version 1.0.0
 */
/*
Plugin Name: Imbibe Responsibly
Plugin URI: none yet!
Description: This plugin is meant to inject a PSA on all pages that talk about wine and imbibing adult beverages.
Author: Catherine McGovern with a little help from Alecadd, www.wpbeaverbuilder.com
Version: 1.6
License: GPLv2 or Later  load-page-php
*/

if ( ! defined( 'ABSPATH')) {
	die;
}


add_action( 'the_content', 'imbibe_responsibly' );

function imbibe_responsibly ( $content ) {
    return $content .= '<p>Please remember to always drink responsibly. Thanks!</p>';
}


/* Trying to add the widget stuff */
add_action( 'widgets_init', 'imbibe_responsibly_create_widgets' );

function imbibe_responsibly_create_widgets() {
	register_widget( 'Imbibe_Responsibly' );
}

class Imbibe_Responsibly extends WP_Widget {
	// Construction function
	function __construct () {
		parent::__construct( 'Imbibe_Responsibly', 'Imbibe Responsibly',
			array( 'description' =>
				       'Encourages the audience to imbibe responsibly on every page' ) );
	}
	
		public function widget( $args, $instance ) {}

	// output the option form field in admin Widgets screen
	public function form( $instance ) {}

	// save options
	public function update( $new_instance, $old_instance ) {}
}
	
?>