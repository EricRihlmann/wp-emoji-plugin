<?php
/*
Plugin Name:       WP Emoji Plugin
Plugin URI:        https://github.com/EricRihlmann/wp-emoji-plugin
Version:           0.0.1
Description:       Silly plugin
Author:            Eric Rihlmann
GitHub Plugin URI: https://github.com/EricRihlmann/wp-emoji-plugin
GitHub Branch:     master
*/


function wrap_with_apple( $title, $id = null ) {

    $title = "👍 $title";

    return $title;
}
add_filter( 'the_title', 'wrap_with_apple', 10, 2 );