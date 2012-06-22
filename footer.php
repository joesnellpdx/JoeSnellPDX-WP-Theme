<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( '_s_credits' ); ?>
			<a href="http://www.joesnellpdx.com" title="<?php esc_attr_e( 'My Base Dev Theme', 'joesnellpdx' ); ?>" rel="generator"><?php printf( __( 'Developed by Joe Snell', 'Joe Snell' ), 'JoeSnellPDX' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'My Base Theme.', 'joesnellpdx' ), 'joesnellpdx', '<a href="http://joesnellpdx.com/" rel="designer">Joe Snell</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

	</div><!-- /container -->

</body>
</html>