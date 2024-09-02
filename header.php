<?php
   if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly
   }
/**
 * The header for MOGOTHEME.
 * 
 * @package MOGOTHEME
 */
?>

<!DOCTYPE html>
   <html <?php language_attributes(); ?>>

   <head>
      <meta charset="<?php bloginfo('charset');?>">
      <title><?php bloginfo('name'); ?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/style.css'); ?>">

      <?php wp_head(); ?>
   </head>

   <body <?php body_class(); ?>>
   <?php wp_body_open(); ?>
      <div class="wrapper">

         <div class="header" id="header">
            <div class="container"></div>
         </div>

         <main class="main">