<?php

/**
 * Plugin Name: Hey Kramer
 * Description: Hey Kramer - REST API for Seinfeld junkies. Powers Hey Kramer Slack Bot and associated slack commands
 * Author: Andy Brudtkuhl
 * Author URI: http://youmetandy.com
 * Version: 0.1
 * Plugin URI: http://github.com/abrudtkuhl/heykramer
 * License: GPL2+
 */


add_action( 'rest_api_init', function () {
    register_rest_route( 'api', '/any', array(
        'methods'   =>  'GET',
        'callback'  =>  'get_random',
    ) );

    register_rest_route( 'api', '/quotes', array(
        'methods'   => 'GET',
        'callback'  => 'get_quotes',
    ) );

    register_rest_route( 'api', '/quotes/any', array(
        'methods'   => 'GET',
        'callback'  => 'get_random_quote',
    ) );

    register_rest_route( 'api', '/gifs', array(
        'methods'  =>  'GET',
        'callback' =>  'get_gifs',
    ) );

    register_rest_route( 'api', '/gifs/any', array(
        'methods'  =>  'GET',
        'callback' =>  'get_random_gif',
    ) );

    register_rest_route( 'api', 'slash', array(
        'methods'   =>  'GET',
        'callback'  =>  'get_slash_command',
    ) );
} );

function get_random() {
    return get_posts( array( 'orderby' => 'rand', 'posts_per_page' => 1) );
}

function get_quotes() {
    return get_posts( array( 'category_name' => 'quotes' ) );
}

function get_random_quote() {
    return get_posts( array(
        'category_name'     =>  'quotes',
        'orderby'           =>  'rand',
        'posts_per_page'    =>  1,
    ) )[0]->post_content;
}

function get_gifs() {
    return get_posts( array( 'category_name' => 'gifs' ) );
}

function get_random_gif() {
    $post = get_posts( array(
        'category_name'     =>  'gifs',
        'orderby'           =>  'rand',
        'posts_per_page'    =>  1,
    ) )[0];
    return get_post_meta( $post->ID, 'gif_url', true );
}

function get_slash_command() {
    if( isset( $_GET['token'] ) ) {
        if( isset( $_GET['text'] ) && $_GET['text'] == 'gif' ) {
            $response = get_random_gif();
        }

        if( isset( $_GET['text'] ) && $_GET['text'] == 'quote' ) {
            $response = get_random_quote();
        }

        return array('response_type' => 'in_channel', 'text' => $response);
    }

    return "giddyyyyyup";
}
