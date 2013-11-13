<?php
/*
Plugin Name: Alligator Popup
Plugin URI: http://cubecolour.co.uk/alligator-popup
Description: Shortcode to open a link in a popup window
Author: cubecolour
Version: 1.0.0
Author URI: http://cubecolour.co.uk/
License: GPLv3

  Copyright 2013 Michael Atkins

  Licenced under the GNU GPL:

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

// ==============================================
//	Add Links in Plugins Table
// ==============================================
 
add_filter( 'plugin_row_meta', 'cc_popup_meta_links', 10, 2 );
function cc_popup_meta_links( $links, $file ) {

	$plugin = plugin_basename(__FILE__);
	
// create the links
	if ( $file == $plugin ) {
		return array_merge( $links, array( '<a href="http://cubecolour.co.uk/wp">Donate</a>', '<a href="http://twitter.com/cubecolour">cubecolour on Twitter</a>' ) );
	}
	
	return $links;
}

// ==============================================
// Register and Enqueue script
// ==============================================

function cc_popup_script() {
	wp_register_script( 'popup', plugins_url() . "/" . basename(dirname(__FILE__)) . '/js/popup.js', array('jquery'), '1.0.0', false );
	wp_enqueue_script( 'popup' );
 }
 
add_action('wp_enqueue_scripts', 'cc_popup_script');

// ==============================================
// shortcode to add 'popup' class to a link & add data attributes for height & width
// ==============================================

function cc_popup_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'url' => '#',
		'width' => '400',
		'height' => '400',
	), $atts ) );
	
	return '<a href="' . esc_attr($url) . '" class="popup" data-width="' . esc_attr($width) . '" data-height="' . esc_attr($height) . '">' . $content . '</a>';
}

add_shortcode( 'popup', 'cc_popup_shortcode' );
