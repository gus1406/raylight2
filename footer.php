<footer class="footer" id="footer">
	<div class="container">
		
		<div class="footer-flex">
			<div class="footer-column">
				<div class="footer-site-branding">
					<a href="#">
						<img src="image/logo_raylight.png" alt="logo">
					</a>
				</div>
				div.footer-copy
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
		</div><!-- .footer-flex -->

	</div><!-- .container -->
</footer><!-- .footer -->



<section class="go-top" id="go_top">
	<span><?php echo file_get_contents("image/arrow-up-icon.svg"); ?></span>
</section><!-- .go-top -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/js-jquery.js" type="text/javascript"></script>
<script src="js/js.js" type="text/javascript"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

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