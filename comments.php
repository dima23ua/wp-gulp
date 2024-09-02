<?php
   if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly
   }

?>

<div id="comments" class="comments-body">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
			printf(
				_nx(
					'One thought on "%2$s"',
					'%1$s thoughts on "%2$s"',
					get_comments_number(),
					'comments title',
					'mogotheme'
				),
				number_format_i18n( get_comments_number() ),
				'<span>' . get_the_title() . '</span>'
			);
			?>
		</h3>

		<ol class="comments-list">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 50,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="navigation comments-body__navigation" role="navigation">

				<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'mogotheme' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'mogotheme' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'mogotheme' ) ); ?></div>
			</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.', 'mogotheme' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
