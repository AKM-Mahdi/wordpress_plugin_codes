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
 * Text Domain:       wp-books
 */

if(!defined('ABSPATH')) exit;

class Wp_Books {
    function __construct(){
        add_action("init", [$this, "init"]);

        // Activation / Deactivation hooks must be registered here
        register_activation_hook(__FILE__, [$this, 'activate']);
        register_deactivation_hook(__FILE__, [$this, 'deactivate']);
    }

     public static function activate(){
        // require_once plugin_dir_path(__FILE__) . 'includes/db/wp-book-db.php';
        // Wp_Books_DB::create_db();
    }

     function deactivate(){
        
    }

    public function init(){
       
    }


   
}


new Wp_Books();
