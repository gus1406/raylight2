<footer class="footer" id="footer">
	<div class="container">
		
		<div class="footer-flex">
			<div class="footer-column">
				<div class="footer-site-branding">
					<a href="#">
						<img src="image/logo_raylight.png" alt="logo">
					</a>
				</div>
				<div class="footer-copy">
					<span><small>Copyright © 2021 - <a href="#">Raylight.</a> All Right Reserved</small></span>
				</div>
			</div><!-- .footer-column -->
			<div class="footer-column">
				<aside class="widget widget_pages">
					<h3 class="widget-title">Laman</h3>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Disclaimer</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</aside>
			</div><!-- .footer-column -->
			<div class="footer-column">
				<div class="footer-social-media">
					<h3 class="footer-social-media-title">Ikuti Kami</h3>
					<ul class="remove-list">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
			</div><!-- .footer-column -->
		</div><!-- .footer-flex -->

	</div><!-- .container -->
</footer><!-- .footer -->



<section class="go-top" id="go_top">
	<span><?php echo file_get_contents("image/arrow-up-icon.svg"); ?></span>
</section><!-- .go-top -->

<?php wp_footer(); ?>

<script>
	var swiper = new Swiper('.swiper',{
   	speed:1200,
   	slidesPerView:'auto',
   	grabCursor:true,
   	spaceBetween:0,
   	loop:true,
   	parallax:true,
  	centeredSlides:true,
  	autoplay:{delay:3500,disableOnInteraction:false,},
});
</script>

</body>
</html>