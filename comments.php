					<?php

					comment_form();

					if ( have_comments() ) :

						echo '<ul class="post-comments">';
								wp_list_comments( array(
									'style' => 'ul',
									'short_ping' => 'true',
								) );
						echo '</ul>';

					endif;

					?>