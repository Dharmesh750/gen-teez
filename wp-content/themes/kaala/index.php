<?php
/**
 * The main template file.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php do_action( 'kaala_content_class_init' ); ?>>
		<main id="main" <?php do_action( 'kaala_main_class_init' ); ?>>
			<?php
			// kaala_before_main_content hook.
			do_action( 'kaala_before_main_content' );

			block_template_part( 'index' );

			// kaala_after_main_content hook.
			do_action( 'kaala_after_main_content' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	// kaala_after_primary_content_area hook.
	 do_action( 'kaala_after_primary_content_area' );

get_footer();
