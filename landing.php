<?php
/*
Template Name: landing
*/


  get_header('landing');
?>

	<!-- <hr class="soften"> -->

		<div id="primary" class="site-content">
			<div id="content" role="main">
            	<i class="icon-road"></i><h1>hello world</h1>

				<?php while ( have_posts() ) : the_post(); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->
        
       <?php get_footer(landing); ?>


