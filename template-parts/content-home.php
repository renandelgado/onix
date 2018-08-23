		<main>
			<div class="container-fluid box-content">
				<div class="row my-content">
					<?php 
			      		while ( have_posts() ){
			      			the_post();
			        		the_content();
			        	}
			     	?>
			    </div>
			</div>
		</main>