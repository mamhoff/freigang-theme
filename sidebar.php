	
					<?php if ( is_active_sidebar( 'sidebar1' ) ) :
							wp_nav_menu( array(
							    'level' => 3,
							    'depth' => 1
							));

						  dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. 
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>
						-->
					<?php endif; ?>