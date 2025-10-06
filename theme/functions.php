<?php
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
function vlog_enqueue(){ wp_enqueue_style('vlog-style', get_stylesheet_uri()); }
add_action('wp_enqueue_scripts','vlog_enqueue');
