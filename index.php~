<?php get_header(); ?>
		<!--Content-->

		<div id="content">

			<div id="showcase">
				<?php query_posts('&showposts=1&orderby=post_date&order=desc&cat=3'); ?>
		
				<?php if(have_posts()) : ?>

				<?php while(have_posts()) : the_post(); ?>							   
					
						<h2><?php the_title(); ?></h2>	
						<?php the_content(); ?>		
			
					<?php endwhile; ?>			
		
					<?php else: ?>			
			
						<?php _e('Er is nog geen bericht in deze categorie'); ?>	
					
				<?php endif; ?>		
			</div>
		</div>
		<div class="clear-both"></div>

<?php get_footer(); ?>

