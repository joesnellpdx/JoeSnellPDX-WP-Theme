<?php
/*
Template Name: bootstrap-sidebar-right
*/

get_header(); ?>

	<hr class="soften">

		<div id="primary" class="site-content row">
            <div id="content" role="main" class="span8">

			<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		
				<div  class="span4 sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div> <!-- .row -->
            </div><!-- #primary .site-content -->
<?php get_footer(); ?>