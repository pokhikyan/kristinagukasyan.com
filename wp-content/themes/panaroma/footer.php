<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Panaroma
 */
?>


  </div><!-- wrapper -->	

  <div class="footer-bottom">

	  <div class="foot_col_container">
        <div class="bottom-left">

                    <h2 style="color: #000; float:left; padding: 10px 10px 0 0; margin: 0">Follow Me</h2><?=do_shortcode('[social_icons_group id="29"]')?>


        	
        </div><!-- bottom-left -->

        <div class='bottom_middle'>
        <?php

		if ( is_active_sidebar( 'custom-footer-widget' ) ) : ?>
			<div id="footer-widget-area" class="chw-widget-area widget-area" role="complementary">
			<?php dynamic_sidebar( 'custom-footer-widget' ); ?>
			</div>
			
		<?php endif; ?>
        </div>

        <div class="bottom-right">
            <p style="color: #000000;">Copyright. All rights reserved.</p>
		</div><!-- bottom-right --><div class="clear"></div>
        </div><!-- footer-bottom -->
        </div>

	  </div>
</div><!-- #page -->



<?php wp_footer(); ?>
</body>
</html>