<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sonex
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<ul>
			<?php wp_list_pages('title_li='); ?>
			<li><a href="http://cordelia.local:5757/forums">Forums</a></li>
			</ul>

			Copyright &copy; 
				<script type="text/javascript">
				var d = new Date()
				document.write(d.getFullYear())
				</script>

			<?php printf( esc_html__( '| Design %1$s by %2$s', '' ), '', '<a href="http://heatherlauren.me/" rel="designer">heatherlauren</a>' ); ?>
		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
