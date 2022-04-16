<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">

            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="white-box"></div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="site-info text-center">
                        <span>All rights reserved <span class="sep"> | </span> &copy;Copyright Glomar Eiendom <?php echo date('Y'); ?></span>

                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="white-box float-right"></div>
                </div>
            </div>


            <!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://localhost/kilowott/wp-includes/js/custom.js"></script>
</body>
</html>