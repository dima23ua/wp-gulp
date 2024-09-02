
<?php 
   if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly
   }

get_header(); ?>

<main class="main page-error">
   <div class="container">
      <div class="error">
         <h1><?php esc_html_e( 'Error 404!', 'themename' ); ?></h1>
         <h2><?php esc_html_e("We're sorry. The page you were looking for doesn't exist anymore", "themename"); ?></h2>

         <div class="main-btn">
            <a href="<?php echo get_home_url('/'); ?>" aria-label="" class="main-btn__link">
               <div class="main-btn__text"><?php esc_html_e("Home Page", "themename"); ?></div>
            </a>
         </div>

      </div>
   </div>
</main>

<?php get_footer(); ?>