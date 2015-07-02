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
	    		active: false
	    	});
		});
	</script>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
			<div id="accordion">
			  <h3>Sonex</h3>
			  <div>
			    <p>
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam aut, quibusdam odit modi praesentium voluptatem veniam beatae perspiciatis mollitia, repellat magni fugit pariatur. Voluptate nisi, quisquam quis et natus voluptas!

			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae laudantium, dolores, voluptatibus, aperiam quia harum necessitatibus nihil ipsa ex fugiat! Quas cupiditate sed fugit ut laboriosam incidunt alias enim?
				</p>
			  </div>
			  <h3>Sonex Europe</h3>
			  <div>
			    <p>
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam aut, quibusdam odit modi praesentium voluptatem veniam beatae perspiciatis mollitia, repellat magni fugit pariatur. Voluptate nisi, quisquam quis et natus voluptas!

			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae laudantium, dolores, voluptatibus, aperiam quia harum necessitatibus nihil ipsa ex fugiat! Quas cupiditate sed fugit ut laboriosam incidunt alias enim?
			    </p>
			  </div>
			  <h3>Recent Updates</h3>
			  <div>
			    <ul>
					<?php
						$args = array( 'numberposts' => '5' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
						}
					?>
				</ul>
			  </div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
