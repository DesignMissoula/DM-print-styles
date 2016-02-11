<?php
/*
Plugin Name: DM Print Style
Description: Printer Friendly Style Sheets
Plugin URI: http://designmissoula.com
Author: Bradford Knowlton
Author URI: http://bradknowlton.com
Version: 1.0.3
License: GPL2
Text Domain: dm

GitHub Plugin URI: https://github.com/DesignMissoula/DM-print-styles

*/

/*

    Copyright (C) 2016  Bradford Knowlton  brad@ucanbonline.net

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'DM_PRINT_STYLE_VERSION', '1.0.3' );    

function dm_print_style() {
  wp_enqueue_style( 'dm-print-style', plugins_url( '/css/print.css', __FILE__ ), null, DM_PRINT_STYLE_VERSION, 'print' );
}
add_action( 'wp_enqueue_scripts', 'dm_print_style', 999 );

