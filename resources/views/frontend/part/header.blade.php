<header>	
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-behance"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
					<ul>
						<li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>0976 420 055</span></a></li>
						<li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>support@ldh.biz</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="logo-wrap">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
					<a href="{{route('index')}}">
						<img class="img-fluid logo" src="img/ml.png" alt="">
					</a>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
					<img class="img-fluid" src="img/cktg.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="container main-menu" id="main-menu">
		<div class="row align-items-center justify-content-between">
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					@foreach($menuCate as $menu)
					@if($menu->childs->count() > 0)
					<li class="menu-has-children"><a href="{{route('category', ['id'=>$menu->id, 'slug'=>$menu->slug])}}">{{$menu->name}}</a>
						<ul>
							@foreach($menu->childs as $sub)
							<li><a href="{{route('category', ['id'=>$sub->id, 'slug'=>$sub->slug])}}">{{$sub->name}}</a></li>
							@endforeach
						</ul>
					</li>
					@else
					<li><a href="{{route('category', ['id'=>$menu->id, 'slug'=>$menu->slug])}}">{{$menu->name}}</a></li>
					@endif
					@endforeach
				</ul>
			</nav><!-- #nav-menu-container -->
			<div class="navbar-right">
				<form class="Search" method="GET" action="{{route('search')}}">
					<input type="text" class="form-control Search-box" name="result" id="Search-box" placeholder="Search">
					<label for="Search-box" class="Search-box-label">
						<span class="lnr lnr-magnifier"></span>
					</label>
					<span class="Search-close">
						<span class="lnr lnr-cross"></span>
					</span>
				</form>
			</div>
		</div>
	</div>
</header>