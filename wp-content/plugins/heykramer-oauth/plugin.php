<?php

/**
 * Plugin Name: Hey Kramer OAuth
 * Description: Hey Kramer - Slack OAuth Integration
 * Author: Andy Brudtkuhl
 * Author URI: http://youmetandy.com
 * Version: 0.1
 * Plugin URI: http://github.com/abrudtkuhl/heykramer
 * License: GPL2+
 */

add_action( 'rest_api_init', function () {
    register_rest_route( 'api', '/oauth', array(
        'methods'   =>  'GET',
        'callback'  =>  'get_oauth',
    ) );
} );

function get_oauth() {
    $code = $_GET['code'];

    if( !isset($code) ) {
        return "NO SOUP FOR YOU!";
    }

    $response = wp_remote_post( 'https://slack.com/api/oauth.access',
        array(
            'body'  =>  array( 'client_id' => SLACK_CLIENT_ID, 'client_secret' => SLACK_CLIENT_KEY, 'code' => $code ),
        )
    );
}
