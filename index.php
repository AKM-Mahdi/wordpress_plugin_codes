<?php 
/*
 * Plugin Name:       WP BOOKS
 * Plugin URI:        https://example.com/plugins/wp-books/
 * Description:       Books Crud Operation (Create / Update / Delete)
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            A K M Mahdi
 * Author URI:        https://www.akmmahdi.com
 * License:           GPL v2 or later
 * Text Domain:       wp-books
 */

// security checks 
if(!defined(ABSPATH)) exit();

class Wp_Books {
    function __construct(){
        add_action("init", [$this, "init_all"]);

        // Activation / Deactivation hooks must be registered here
        register_activation_hook(__FILE__, [$this, 'activate']);   
        register_deactivation_hook(__FILE__, [$this, 'deactivate']); 
        
    }    

    public function init_all(){
       echo "<p>The plugin is running</p>";
    }

}

new Wp_Books();




