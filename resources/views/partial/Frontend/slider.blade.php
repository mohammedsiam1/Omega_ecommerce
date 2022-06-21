<div class="swiper-slider">
	<!-- Slider main container -->
	<div class="swiper-container" dir="ltr">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper text-center">
			<!-- Slides -->
			<div class="swiper-slide">
				<div class="d-flex align-items-center">
					<img src="{{asset('assets/slides/01.jpg' )}}" class="img-fluid" alt="">
				</div>
			</div>
			<div class="swiper-slide">
				<div class="d-flex align-items-center">
					<img src="{{asset('assets/slides/02.jpg' )}}" class="img-fluid" alt="">
				</div>
			</div>
			<div class="swiper-slide">
				<div class="d-flex align-items-center">
					<img src="{{asset('assets/slides/03.jpg' )}}" class="img-fluid" alt="">
				</div>
			</div>
		</div>

		<!-- If we need pagination -->
		<div class="swiper-pagination swiper-pagination-white"></div>
		<!-- If we need navigation buttons -->
		<div class="d-none d-md-block"><!-- Remove this "div" to show the navigation on mobile -->
			<div class="swiper-button-prev swiper-button-white"><i class="bx bx-chevron-left"></i></div>
			<div class="swiper-button-next swiper-button-white"><i class="bx bx-chevron-right"></i></div>
		</div>
	</div>
</div><!-- /.swiper-slider -->
