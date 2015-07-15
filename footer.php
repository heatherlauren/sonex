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
			<li><a href="http://sonexeuro.com/forums">Forums</a></li>
			</ul>
		
			<div id="footer-disclaimer">
				<p>Sonex in Europe is an unofficial site for owners and builders of the Sonex family of homebuilt aircraft in Europe.</p>
				<p>It is not run or moderated by Sonex Aircraft, LLC.</p>
			</div>

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
