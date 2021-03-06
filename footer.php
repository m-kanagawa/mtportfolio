<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package mtportfolio
 */
?>
	</div><!-- #content -->

	<nav class="page-top"><a href="#"></a></nav>
	<div class="footer-widget-area">
		<aside class="widget footer-widget-category">
			<h1><a href="#">Categories</a></h1>
			<ul><?php wp_list_categories('title_li=');?></ul>
		</aside>
		<aside class="widget footer-widget-tag">
			<h1><a href="#">Tags</a></h1>
			<div class="tags-links">
				<?php mtportfolio_list_tag_links(); ?>
			</div>
		</aside>
		<aside class="widget footer-widget-page">
			<ul><?php wp_list_pages('title_li='); ?></ul>
		</aside>
		<aside class="widget footer-widget-sns">
			<nav class="footer-sns">
				<?php mtportfolio_list_sns( true ); ?>
        	</nav>
		</aside>
	</div><!-- .footer-widget-area -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="site-info">
			<?php do_action( 'mtportfolio_credits' ); ?>
			Copyright(c)mtportfolio
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>