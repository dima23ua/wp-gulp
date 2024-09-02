<?php
   if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly
   }
   $logo = get_field( 'logo', 'options' );
?>

<!-- popup -->
<div class="popup-wrapper menu-mobile" id="mobile-menu">
   <div class="popup-wrapper__container menu-mobile__container">

      <div class="popup popup-container">
         <!-- popup content -->
         <div class="mobile-menu">
            <div class="mobile-menu__header">
               <?php if ( $logo ) : ?>
               <!-- logo -->
               <a href="<?php echo get_home_url('/'); ?>" aria-label="<?php esc_attr_e('Homepage', 'vetclinic'); ?>" role="link" class="mobile-menu__logo">
                  <?php echo wp_get_attachment_image( $logo, 'thumbnail' ) ?>
               </a>
               <?php endif; ?>
               <!-- close popup -->
               <div class="popup__close">
                  <a href="#header" class="popup__close-link close-popup"></a>
               </div>
            </div>
            <div class="mobile-menu__body">

            </div>
         </div>
      </div>

   </div>
</div>