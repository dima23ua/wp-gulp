<?php 
   if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly
   }
get_header(); ?>
<section>
   <div class="container">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <?php the_content();?>
            </article>
         <?php endwhile; endif; ?>
         <?php comments_template('', true); ?>
    </div>
</section>
<?php get_footer(); ?>