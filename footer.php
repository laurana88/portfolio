<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Laura_Portfolio
 */

?>

	<footer class="site-footer">
		<div class="site-info">
			<div class="copyright">
				<p>© <?php echo date("Y"); ?> Laura Ann Smith</p>
			</div>
			<?php
                // // Output the mobile menu
                get_template_part( 'template-parts/social-menu' );
        	?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
