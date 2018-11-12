<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 single-footer-widget">
				<h4>Magazine</h4>
				<ul>
					@foreach($menuFooter as $menu)
					<li><a href="{{route('category', ['id'=>$menu->id, 'slug'=>$menu->slug])}}">{{$menu->name}}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 single-footer-widget">
				<h4>Bóng đá</h4>
				<ul>
					@foreach($hedieuhanh as $hdh)
					<li><a href="{{route('category', ['id'=>$hdh->id, 'slug'=>$hdh->slug])}}">{{$hdh->name}}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 single-footer-widget">
				<h4>Myleague.vn</h4>
				<ul>
					<li><a href="https://myleague.vn/">Tạo giải đấu</a></li>
					<li><a href="https://myleague.vn/league">Tìm giải đấu</a></li>
					<li><a href="https://myleague.vn/competitor">Tìm đội</a></li>
					<li><a href="https://www.timdoinhanh.com/">Tìm đối nhanh</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 single-footer-widget">
				<h4>Instragram Feed</h4>
				<ul class="instafeed d-flex flex-wrap">
					<li><img src="img/i1.jpg" alt=""></li>
					<li><img src="img/i2.jpg" alt=""></li>
					<li><img src="img/i3.jpg" alt=""></li>
					<li><img src="img/i4.jpg" alt=""></li>
					<li><img src="img/i5.jpg" alt=""></li>
					<li><img src="img/i6.jpg" alt=""></li>
					<li><img src="img/i7.jpg" alt=""></li>
					<li><img src="img/i8.jpg" alt=""></li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom row align-items-center">
			<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | From <a href="http://ldh.biz/" target="_blank">Nitro Zeus</a> with <i class="fa fa-heart-o" aria-hidden="true"></i>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
</footer>