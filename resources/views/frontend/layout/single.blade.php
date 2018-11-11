<!DOCTYPE html>
<html lang="zxx" class="no-js">
	@include('frontend.part.head')
	<body>
		@include('frontend.part.header')
		
		<div class="site-main-container">
			<!-- Start top-post Area -->
			@yield('page-header')
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							@yield('main')
							<!-- End latest-post Area -->
						</div>
						<div class="col-lg-4">
							@include('frontend.part.aside')
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>
		
		<!-- start footer Area -->
		@include('frontend.part.footer')
		<!-- End footer Area -->
		@include('frontend.part.script')
	</body>
</html>