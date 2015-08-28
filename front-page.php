<?php
/**
 * The template for displaying the front page.
 *
 * @package sonex
 */

get_header(); ?>

	<script>
		jQuery(function() {
	    	jQuery("#accordion").accordion({
	    		icons: {
	    			"header": "ui-icon-carat-1-s",
	    			"activeHeader": "ui-icon-carat-1-e"
	    		},
	    		collapsible: true,
	    		heightStyle: "content"
	    	});
		});
	</script>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
			<div id="accordion">
			  <h3>Sonex in Europe</h3>
			  <div id="front-page-info">
			    <p>
			    	<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content-front-page' ); ?>

					<?php endwhile; // End of the loop. ?>
			    </p>
			  </div>
			  <h3>Recent Updates</h3>
			  <div id="front-page-updates">
			    <ul>
					<?php
						$args = array( 'numberposts' => '5' );

						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></li> ';
						}
					?>
				</ul>
			  </div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
