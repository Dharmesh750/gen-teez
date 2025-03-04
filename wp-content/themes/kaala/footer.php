<?php
/**
 * The template for displaying the footer.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
            </div><!-- #content -->
		</div><!-- #page -->
        
        <?php
        // kaala_before_footer hook.
        do_action( 'kaala_before_footer' );
        ?>

        <div <?php do_action( 'kaala_footer_class_init' ); ?>>
            <?php
            // kaala_before_footer_content hook.
            do_action( 'kaala_before_footer_content' );
        
			do_action( 'kaala_footer_widgets' );
		
			// kaala_after_footer_widgets hook.
			do_action( 'kaala_after_footer_widgets' );
			
			// kaala_footer hook.
            do_action( 'kaala_footer' );
        
            // kaala_after_footer_content hook.
            do_action( 'kaala_after_footer_content' );
            ?>
        </div><!-- .site-footer -->
        
        <?php
        // kaala_after_footer hook.
        do_action( 'kaala_after_footer' );
        
        wp_footer();
        ?>
	</div><!-- .kaala-body-padding-content -->
</body>
</html>
