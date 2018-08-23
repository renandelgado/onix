		<main class="container-single">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<?php 
		      				while ( have_posts() ) : the_post();
		        				the_content();
		      				endwhile;
		     			?>
					</div>
					<div class="col-md-4">
						
					</div>
				</div>
			</div>
		</main>