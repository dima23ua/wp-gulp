<?php
   if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly
   }

   /* scripts and styles */
   function gulpwp_assets() {
      // Style
      wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/main.min.css');
      
      // Scripts
      wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/app.min.js', '20240812', true);
  }
  
  add_action('wp_enqueue_scripts', 'gulpwp_assets');

