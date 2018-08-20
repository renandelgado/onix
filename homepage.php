<?php
/*
 * Template Name: Front Page Template
 */
 get_header('home'); 
 ?>
		<main>
			<div class="container-fluid">
				<?php 
		      		while ( have_posts() ) : the_post();
		        		the_content();
		      		endwhile;
		     	?>
			</div>
		</main>

<?php get_footer(); ?>