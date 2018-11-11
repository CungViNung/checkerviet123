<div class="sidebars-area">
	<div class="single-sidebar-widget editors-pick-widget">
		<h6 class="title">Mới Nhất</h6>
		@php
			$post1 = $newPost->shift();
		@endphp
		<div class="editors-pick-post">
			<div class="feature-img-wrap relative">
				<div class="feature-img relative">
					<div class="overlay overlay-bg"></div>
					<a href="{{route('detail', ['id'=>$post1->id])}}"><img class="img-fluid" src="{{asset('storage/'.$post1->image)}}" alt=""></a>
				</div>
				<ul class="tags">
					<li><a href="{{route('category', ['id'=>$post1->category->id])}}">{{$post1->category->name}}</a></li>
				</ul>
			</div>
			<div class="details">
				<a href="image-post.html">
					<a href="{{route('detail', ['id'=>$post1->id])}}"><h4 class="mt-20">{{$post1->title}}</h4></a>
				</a>
				<ul class="meta">
					<li><span class="lnr lnr-user"></span>{{$post1->user->name}}</li>
					<li><span class="lnr lnr-calendar-full"></span>{{date('F j, Y', strtotime($post1['created_at'])) }}
					</li>
					<li><span class="lnr lnr-eye"></span>{{$post1->view}} lượt xem</li>
				</ul>
				<p class="excert">
					{{$post1->description}}
				</p>
			</div>
			<div class="post-lists">
				@foreach($newPost as $ps)
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<a href="{{route('detail', ['id'=>$ps->id])}}"><img style="width: 100px; height: 80px;" src="{{asset('storage/'.$ps->image)}}" alt=""></a>
					</div>
					<div class="detail">
						<a href="{{route('detail', ['id'=>$ps->id])}}"><h6 style="word-wrap: break-word;">{{$ps->title}}</h6></a>
						<ul class="meta">
							<li><span class="lnr lnr-calendar-full"></span>{{date('F j, Y', strtotime($ps['created_at'])) }}</li>
							<li><span class="lnr lnr-eye"></span>{{$ps->view}} lượt xem</li>
						</ul>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<div class="single-sidebar-widget ads-widget">
		<img class="img-fluid" src="img/kda.jpg" alt="">
	</div>
	<div class="single-sidebar-widget newsletter-widget">
		<h6 class="title">Newsletter</h6>
		<p>
			Here, I focus on a range of items
			andfeatures that we use in life without
			giving them a second thought.
		</p>
		<div class="form-group d-flex flex-row">
			<div class="col-autos">
				<div class="input-group">
					<input class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="text">
				</div>
			</div>
			<a href="#" class="bbtns">Subcribe</a>
		</div>
		<p>
			You can unsubscribe us at any time
		</p>
	</div>
	<div class="single-sidebar-widget most-popular-widget">
		<h6 class="title">Được xem nhiều</h6>
		@foreach($mostView as $mv)
		<div class="single-list flex-row d-flex">
			<div class="thumb">
				<a href="{{route('detail', ['id'=>$mv->id])}}"><img style="width: 100px; height: 80px;" src="{{asset('storage/'.$mv->image)}}" alt=""></a>
			</div>
			<div class="details">
				<a href="{{route('detail', ['id'=>$mv->id])}}">
					<h6 style="word-wrap: break-word;">{{$mv->title}}</h6>
				</a>
				<ul class="meta">
					<li><span class="lnr lnr-calendar-full"></span>{{date('F j, Y', strtotime($mv['created_at'])) }}</li>
					<li><span class="lnr lnr-eye"></span>{{$mv->view}} lượt xem</li>
				</ul>
			</div>
		</div>
		@endforeach
	</div>
	<div class="single-sidebar-widget social-network-widget">
		<h6 class="title">Social Networks</h6>
		<ul class="social-list">
			<li class="d-flex justify-content-between align-items-center fb">
				<div class="icons d-flex flex-row align-items-center">
					<i class="fa fa-facebook" aria-hidden="true"></i>
					<p>983 Likes</p>
				</div>
				<a href="#">Like our page</a>
			</li>
			<li class="d-flex justify-content-between align-items-center tw">
				<div class="icons d-flex flex-row align-items-center">
					<i class="fa fa-twitter" aria-hidden="true"></i>
					<p>983 Followers</p>
				</div>
				<a href="#">Follow Us</a>
			</li>
			<li class="d-flex justify-content-between align-items-center yt">
				<div class="icons d-flex flex-row align-items-center">
					<i class="fa fa-youtube-play" aria-hidden="true"></i>
					<p>983 Subscriber</p>
				</div>
				<a href="#">Subscribe</a>
			</li>
			<li class="d-flex justify-content-between align-items-center rs">
				<div class="icons d-flex flex-row align-items-center">
					<i class="fa fa-rss" aria-hidden="true"></i>
					<p>983 Subscribe</p>
				</div>
				<a href="#">Subscribe</a>
			</li>
		</ul>
	</div>
</div>