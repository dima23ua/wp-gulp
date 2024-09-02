<?php 
if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly
}

/**
 * Functions
 */

define( 'GULPWP_VERSION', '1.0.0' );
define( 'GULPWP_SETTINGS', 'gulpwp-settings' );
define( 'GULPWP_DIR', trailingslashit( get_template_directory() ) );
define( 'GULPWP_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

if ( ! function_exists( 'gulpwp_setup' ) ) :

   function gulpwp_setup() {
      add_filter('show_admin_bar', '__return_false');
      load_theme_textdomain( 'mogotheme', get_template_directory() . '/languages' );

      require_once GULPWP_DIR . 'inc/enqueue.php';

      require_once GULPWP_DIR . 'core/acf-options.php';

      require_once GULPWP_DIR . 'core/cpt.php';

      require_once GULPWP_DIR . 'core/nav-menus.php';

      require_once GULPWP_DIR . 'core/theme-supports.php';

   }
   add_action( 'after_setup_theme', 'gulpwp_setup' );

endif;