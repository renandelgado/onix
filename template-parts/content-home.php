		<main class="conatiner-fluid">
			<div class="row my-content">
				<?php 
		      		while ( have_posts() ) : the_post();
		        		the_content();
		      		endwhile;
		     	?>
		    </div>
		</main>