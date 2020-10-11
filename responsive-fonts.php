<?php
/*
Plugin Name: Responsive Fonts
Description: This is a plugin that will give the average wordpress user the ability to customize the size of their font responsively, changing the size on mobile, tablet and desktop in one simple place.
Version: 1.0.0
Author: Donte Henley
Author URI: https://www.dontehenley.com
License: GPLv2 or later
Text Domain: responsive-fonts
*/

if (!defined('ABSPATH')) die ('No direct access allowed');

// We need some CSS to position the paragraph.
function responsive_font_css() {
	echo "
	<style type='text/css'>
	#site-header{
        background: #000!important;
    }
	@media screen and (max-width: 782px) {
		#site-header{
            background: red!important;
        }
	}
	</style>
	";
}

add_action( 'init', 'responsive_font_css' );