<?php

/**
 * Plugin Name: Hey Kramer
 * Description: Hey Kramer WordPress Plugin
 * Author: Andy Brudtkuhl
 * Author URI: http://youmetandy.com
 * Version: 0.1
 * Plugin URI: http://github.com/abrudtkuhl/heykramer
 * License: GPL2+
 */


 add_action( 'rest_api_init', function () {
     register_rest_route( 'api', '/quotes', array(
         'methods' => 'GET',
         'callback' => 'get_quotes',
     ) );
 } );

 function get_quotes() {
     return get_posts( array( 'category' => 'quotes' ) );
 }
