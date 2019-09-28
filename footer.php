<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage News_Paper
 * @since News Paper 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'newspaper_credits' ); ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'newspaper' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'newspaper' ); ?>"><?php printf( __( 'Proudly powered by %s', 'newspaper' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>