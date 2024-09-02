<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Support for title-tag
add_theme_support('title-tag');

// Support for post thumbnails
add_theme_support('post-thumbnails');

// Support for custom logo
add_theme_support('custom-logo');

// Support for automatic feed links
add_theme_support('automatic-feed-links');

// Support for wide alignment
add_theme_support('align-wide');

// Support for block styles
add_theme_support('wp-block-styles');

// Support for responsive embeds
add_theme_support('responsive-embeds');

// Support for HTML5 elements
add_theme_support('html5', array(
    'search-form',  // Search form
    'comment-form', // Comment form
    'comment-list', // Comment list
    'gallery',      // Gallery
    'caption',      // Caption
    'style',        // Style
    'script',       // Script
    'navigation-widgets' // Navigation widgets
));

// Support for editor styles
add_theme_support('editor-styles');