<?php
if (!defined('ABSPATH')) exit;
add_action('after_setup_theme', function(){add_theme_support('title-tag');add_theme_support('post-thumbnails');});
add_action('wp_enqueue_scripts', function(){wp_enqueue_style('meridian-capital',get_stylesheet_uri(),array(),'1.0.0');wp_enqueue_script('meridian-capital',get_template_directory_uri().'/assets/finance.js',array(),'1.0.0',true);});
add_action('wp_head',function(){echo '<link rel="icon" type="image/svg+xml" href="'.esc_url(get_template_directory_uri().'/assets/mark.svg').'">';},100);
