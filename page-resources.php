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
		<main id="main" class="site-main" role="main">

			<script>
			  jQuery(function() {
			    jQuery( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
			    jQuery( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
			  });
			  </script>


			<div id="tabs">
				<h1 id="title">Resources</h1>
			  <ul>
			    <li><a href="#tabs-1">Video</a></li>
			    <li><a href="#tabs-2">Links</a></li>
			    <li><a href="#tabs-3">Other</a></li>
			  </ul>
			  <div id="tabs-1">
			    <h2>Video</h2>
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
			  <div id="tabs-2">
			    <h2>Links</h2>
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
			  <div id="tabs-3">
			    <h2>Other</h2>
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