<?php
   if (!defined('ABSPATH')) {
      exit;
   }

   // Register Nav Menus
   function gulpwp_register_menu() {
      register_nav_menus(
         array(
               'head_menu' => __('Main Menu', 'gulpwp'),
         )
      );
   }
   add_action('init', 'gulpwp_register_menu');