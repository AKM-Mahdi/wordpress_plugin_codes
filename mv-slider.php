<?php

/**
 * Plugin Name: MV Silder
 * Plugin URI: https://www.wordpress.org/mv-slider
 * Description: Plugin Description
 * Version: 1.0.0
 * Requires at least: 5.8
 * Requires PHP: 5.6.20
 * Author: We Misc
 * Author URI: https://www.wemisc.com
 * License: GPLv2 or later
 * Text Domain: mv-slider
 * Domain Path: /language
 */

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2023 mv-slider, Inc.
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}



if(!class_exists("MV_Slider")){
    class MV_Slider {
        function __construct() {
            $this->define_constants();

            require_once(MV_SLIDER_PATH . "post-types/mv-slider-cpt.php");
            $MV_Slider_Post_Type = new MV_Slider_Post_Type();
        }
        public function define_constants(){
            define( "MV_SLIDER_PATH", plugin_dir_path( __FILE__ ) );
            define( "MV_SLIDER_URL", plugin_dir_url( __FILE__ ) );
            define("MV_SLIDER_VERSION", "1.0.0");
        }

        public static function  activate(){

            update_option("rewrite_rules", "");
        }

        public static function deactivate(){
            flush_rewrite_rules();
            unregister_post_type( 'mv-slider' );
        }

        public static function uninstall(){

        }


    }
}

if(class_exists("MV_Slider")){
    register_activation_hook(__FILE__, array("MV_Slider", 'activate'));
    register_deactivation_hook(__FILE__, array("MV_Slider", 'deactivate'));
    register_uninstall_hook(__FILE__, array("MV_Slider", 'uninstall'));
    $mv_slider = new MV_Slider();
}