<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SKT Panaroma
 */

get_header(); ?>

<?php if( (get_option('page_for_posts')) ) { ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content container">
            <main id="main" class="site-main" role="main">
                <header class="page"><h1 class="entry-title"><?php _e('Blog','panaroma'); ?></h1></header>
                <div class="blog-post">
                    <?php if( have_posts() ) : ?>
                        <?php while( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', get_post_format() ); ?>
                        <?php endwhile; ?>
                        <?php panaroma_pagination(); ?>
                    <?php else : ?>
                        <?php get_template_part( 'no-results', 'index' ); ?>
                    <?php endif; ?>
                </div><!-- blog-post -->
                <div class="clear"></div>
           </main><!-- main -->
        	</div><!-- #content -->
        </div><!-- #primary -->
        <div id="secondary" class="widget-area" role="complementary">
        <?php get_sidebar(); ?>
       </div><!-- secondary --><div class="clear"></div>
    <?php get_footer(); ?>

<?php } else { ?>
		
	<div class="footer-bottom" style="position:absolute;bottom:0;">
	  <div class="foot_col_container">
        <?php get_footer(); ?>
      </div><!-- footer-bottom -->
   </div>
	
</body>
</html>

<?php } ?>