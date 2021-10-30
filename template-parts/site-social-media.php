<?php
$fb = get_theme_mod( 'facebook_url' );
$tw = get_theme_mod( 'twitter_url' );
$ig = get_theme_mod( 'instagram_url' );
$yt = get_theme_mod( 'youtube_url' );
?>
<li><a href="<?php echo esc_url( $fb ); ?>"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="<?php echo esc_url( $tw ); ?>"><i class="fab fa-twitter"></i></a></li>
<li><a href="<?php echo esc_url( $ig ); ?>"><i class="fab fa-instagram"></i></a></li>
<li><a href="<?php echo esc_url( $yt ); ?>"><i class="fab fa-youtube"></i></a></li>