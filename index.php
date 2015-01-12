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
			
			<!-- Laadt de berichten in -->
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="block">
			
			<!-- Geeft de titel van een bericht weer -->
            <h2><?php the_title(); ?></h2>

			<!-- Geeft de content van een bericht weer -->
            <?php the_content(); ?>
			</div>
		</div>

<?php endwhile; ?>
			<!--
			<p class="paragraph">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sollicitudin dolor mauris, in tincidunt leo ultrices sit amet. Donec eu cursus ante, et aliquet elit. Maecenas dignissim convallis vestibulum. Fusce porta in dui in auctor. Suspendisse potenti. Nulla purus tellus, hendrerit id nisl sed, egestas condimentum urna. Praesent vel aliquam justo. Donec iaculis, mauris ac sollicitudin bibendum, nunc arcu tincidunt erat, et pretium arcu arcu interdum nibh.
			</p>
			<p class="paragraph">
				Phasellus augue augue, vehicula a leo sit amet, semper dictum neque. Cras faucibus, augue ut ultricies rutrum, lectus nibh dictum augue, et imperdiet nisl turpis non libero. Mauris gravida ante vel ligula tincidunt elementum ac ac purus. Etiam rutrum porta lacinia. Suspendisse rutrum, odio quis accumsan pharetra, magna nulla blandit nulla, nec lacinia leo urna nec metus. In aliquet elit pharetra lorem volutpat, quis lobortis felis feugiat. Nulla sit amet molestie ante.

			</p>
			<p>
				Nam porta pulvinar nisi, nec vulputate ligula. Duis pharetra purus vitae arcu tincidunt aliquam quis quis mi. Praesent quis justo quam. Sed condimentum, odio et semper accumsan, eros nunc tincidunt est, blandit luctus nibh urna at lectus. Maecenas nisl est, bibendum a hendrerit vel, euismod vitae urna. Praesent rhoncus risus quis nibh pulvinar, nec tincidunt mauris accumsan. Proin at tortor purus. Etiam scelerisque lorem tellus, ut consectetur urna suscipit sit amet. Ut non adipiscing dui, quis lacinia mi. Curabitur vitae ligula non enim accumsan luctus in id erat. Cras volutpat vestibulum pretium. Vestibulum facilisis est sit amet semper vulputate.
			</p>
			<p>
				Cras eget magna lacus. Nulla tellus nisl, fringilla quis urna ac, consequat fermentum risus. Nulla id nisl sit amet tortor pretium dignissim vitae accumsan quam. Nam vitae egestas nunc. Aenean lectus nunc, aliquam quis posuere varius, suscipit et leo. Curabitur imperdiet luctus ipsum euismod euismod. Nulla dapibus lacus a placerat luctus. Maecenas at ante leo. Cras orci sapien, adipiscing a ultrices dapibus, pellentesque at nibh. Curabitur metus mi, laoreet at sagittis eu, pretium quis odio. Morbi ac quam et nulla bibendum fringilla.
			</p>
			<p>
				Nulla eleifend libero at gravida laoreet. Curabitur consequat, sem vel lacinia fringilla, ipsum risus volutpat velit, nec ornare elit dolor ac velit. Pellentesque at luctus neque. Nulla accumsan laoreet leo a tincidunt. Curabitur scelerisque magna consectetur felis tempor, vel congue massa congue. Integer tincidunt, erat eget laoreet pretium, arcu erat venenatis leo, sit amet laoreet mi turpis sit amet odio. Cras pellentesque blandit volutpat. Fusce velit odio, ornare vel aliquet in, commodo in odio. Praesent pulvinar, lectus at dapibus tempor.
			</p>
			-->
		<?php the_post_thumbnail(); ?>

		<?php the_date() ?>

		<?php the_author() ?>

		<?php the_category() ?>

		<?php endwhile; ?>
		<div class="nav-previous alignleft"><?php next_posts_link( 'Oudere berichten' ); ?></div> 
		<div class="nav-next alignright"><?php previous_posts_link( 'Nieuwere berichten' ); ?></div>
		</div>
		<div class="clear-both"></div>

<?php get_footer(); ?>

