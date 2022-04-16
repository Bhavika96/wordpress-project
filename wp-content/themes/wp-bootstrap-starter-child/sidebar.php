<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-sm-12 col-lg-4 form-section" role="complementary">
    <div class="sidebar">
	   <?php echo do_shortcode('[contact-form-7 id="25" title="Contact Form"]'); ?>
    </div>
</aside><!-- #secondary -->
