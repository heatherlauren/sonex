<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sonex
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main resources-main" role="main">

			<script>
			jQuery(function() {
				jQuery('#responsiveTabsDemo').responsiveTabs({
				    startCollapsed: 'accordion',
				});
			});
			</script>

			<h1 class="title">Resources</h1>

			<div id="responsiveTabsDemo">
			  <ul>
			    <li><a href="#tab-1">Video</a></li>
			    <li><a href="#tab-2">Links</a></li>
			    <li><a href="#tab-3">Other</a></li>
			  </ul>
			  <div id="tab-1">
			    <p>
			    	<?php
						$args = array( 'numberposts' => '5' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
						}
					?>
			    </p>
			  </div>
			  <div id="tab-2">
			    <p>
			    	<?php
						$args = array( 'numberposts' => '5' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
						}
					?>
			    </p>
			  </div>
			  <div id="tab-3">
			    <p>
			    	<?php
						$args = array( 'numberposts' => '5' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
						}
					?>
			    </p>
			  </div>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>