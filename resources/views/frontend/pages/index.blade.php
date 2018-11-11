@extends('frontend.layout.single')
@section('title', 'Trang Chủ')
@section('page-header')
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row small-gutters">
				<?php
					$news = $posts->sortByDesc('created_at')->take(3);
					$news1 = $news->shift();
				?> 
				<div class="col-lg-8 top-post-left">
					<div class="feature-image-thumb relative">
						<div class="overlay overlay-bg"></div>
						<a href="{{route('detail', ['id'=>$news1->id])}}"><img class="img-fluid"  src="{{asset('storage/'.$news1->image)}}" alt=""></a>
					</div>
					<div class="top-post-details">
						<ul class="tags">
							<li><a href="{{route('category', ['id'=>$news1->category->id])}}">{{$news1->category->name}}</a></li>
						</ul>
						<a href="image-post.html">
							<a href="{{route('detail', ['id'=>$news1->id])}}"><h3>{{$news1->title}}</h3></a>
						</a>
						<ul class="meta">
							<li><span class="lnr lnr-user"></span>{{$news1->user->name}}</li>
							<li><span class="lnr lnr-calendar-full"></span>{{date('F j, Y', strtotime($news1['created_at'])) }}</li>
							<li><span class="lnr lnr-eye"></span>{{$news1->view}} lượt xem</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 top-post-right">
					@foreach($news as $new)
					<div class="single-top-post">
						<div class="feature-image-thumb relative">
							<div class="overlay overlay-bg"></div>
							<a href="{{route('detail', ['id'=>$new->id])}}"><img class="img-fluid" src="{{asset('storage/'.$new->image)}}" alt=""></a>
						</div>
						<div class="top-post-details">
							<ul class="tags">
								<li><a href="{{route('category', ['id'=>$new->category->id])}}">{{$new->category->name}}</a></li>
							</ul>
							<a href="image-post.html">
								<a href="{{route('detail', ['id'=>$new->id])}}"><h4>{{$new->title}}</h4></a>
							</a>
							<ul class="meta">
								<li><span class="lnr lnr-user"></span>{{$new->user->name}}</li>
								<li><span class="lnr lnr-calendar-full"></span>{{date('F j, Y', strtotime($news1['created_at'])) }}</li>
								<li><span class="lnr lnr-eye"></span>{{$new->view}} lượt xem</li>
							</ul>
						</div>
					</div>
					@endforeach
				</div>
				<div class="col-lg-12">
					<div class="news-tracker-wrap">
						@foreach($breakingNew as $brk)
						<h6><span>Breaking News:</span>   <a href="{{route('detail', ['id'=>$brk->id])}}">{{$brk->title}}</a></h6>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('main')
	<!-- <div class="latest-post-wrap">
		<?php
			$latest = $posts->sortByDesc('created_at')->take(4); 
		?>
		<h4 class="cat-title">Latest News</h4>
		@foreach($latest as $late)
		<div class="single-latest-post row align-items-center">
			<div class="col-lg-5 post-left">
				<div class="feature-img relative">
					<div class="overlay overlay-bg"></div>
					<a href="{{route('detail', ['id'=>$late->id])}}"><img class="img-fluid" src="{{asset('storage/'.$late->image)}}" alt=""></a>
				</div>
				<ul class="tags">
					<li><a href="{{route('category', ['id'=>$late->category->id])}}">{{$late->category->name}}</a></li>
				</ul>
			</div>
			<div class="col-lg-7 post-right">
				<a href="image-post.html">
					<a href="{{route('detail', ['id'=>$late->id])}}"><h4>{{$late->title}}</h4></a>
				</a>
				<ul class="meta">
					<li><span class="lnr lnr-user"></span>{{$late->user->name}}</li>
					<li><span class="lnr lnr-calendar-full"></span>{{date('F j, Y', strtotime($late['created_at'])) }}</li>
					<li><span class="lnr lnr-eye"></span>{{$late->view}} lượt xem</li>
				</ul>
				<p class="excert">
					{{$late->description}}
				</p>
			</div>
		</div>
		@endforeach
	</div> -->
	
	<!-- End banner-ads Area -->
	<!-- Start popular-post Area -->
	<?php
		$category = $cates->whereIn('id', [2, 3])->all();
	?>
	@foreach($category as $cate)
	<div class="popular-post-wrap">
		<a href="{{route('category', ['id'=>$cate->id])}}"><h4 class="title">{{$cate->name}}</h4></a>
		<?php
			$news = $cate->posts->sortByDesc('created_at')->take(3);
			$news1 = $news->shift();
		?>
		@if($news1)
		<div class="feature-post relative">
			<div class="feature-img relative">
				<div class="overlay overlay-bg"></div>
				<a href="{{route('detail', ['id'=>$news1->id])}}"><img class="img-fluid" src="{{asset('storage/'.$news1->image)}}" alt=""></a>
			</div>
			<div class="details">
				<ul class="tags">
					<li><a href="{{route('category', ['id'=>$news1->category->id])}}">{{$news1->category->name}}</a></li>
				</ul>
				<a href="image-post.html">
					<a href="{{route('detail', ['id'=>$news1->id])}}"><h3>{{$news1->title}}</h3></a>
				</a>
				<ul class="meta">
					<li><span class="lnr lnr-user"></span>{{$news1->user->name}}</li>
					<li><span class="lnr lnr-calendar-full"></span>{{date('F j, Y', strtotime($news1['created_at'])) }}
					</li>
					<li><span class="lnr lnr-eye"></span>{{$news1->view}} lượt xem</li>
				</ul>
			</div>
		</div>
		@endif
		<div class="row mt-20 medium-gutters">
			@foreach($news as $new)
			<div class="col-lg-6 single-popular-post">
				<div class="feature-img-wrap relative">
					<div class="feature-img relative">
						<div class="overlay overlay-bg"></div>
						<a href="{{route('detail', ['id'=>$new->id])}}"><img class="img-fluid" src="{{asset('storage/'.$new->image)}}" alt=""></a>
					</div>
					<ul class="tags">
						<li><a href="{{route('category', ['id'=>$new->category->id])}}">{{$new->category->name}}</a></li>
					</ul>
				</div>
				<div class="details">
					<a href="image-post.html">
						<a href="{{route('detail', ['id'=>$new->id])}}"><h4>{{$new->title}}</h4></a>
					</a>
					<ul class="meta">
						<li><span class="lnr lnr-user"></span>{{$new->user->name}}</li>
						<li><span class="lnr lnr-calendar-full"></span>{{date('F j, Y', strtotime($new['created_at'])) }}</li>
						<li><span class="lnr lnr-eye"></span>{{$new->view}} lượt xem</li>
					</ul>
					<p class="excert">
						{{$new->description}}
					</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	@endforeach
	<!-- End popular-post Area -->
	<!-- Start banner-ads Area -->
	<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
		<img class="img-fluid" src="img/cktg.jpg" alt="">
	</div>
	<!-- End banner-ads Area -->
	<!-- Start relavent-story-post Area -->
	<?php $category = $cates->whereIn('id', [4, 5])->all(); ?>
	@foreach($category as $cate)
	<div class="relavent-story-post-wrap mt-30">
		<a href="{{route('category', ['id'=>$cate->id])}}"><h4 class="title">{{$cate->name}}</h4></a>
		<div class="relavent-story-list-wrap">
			<?php $posts = $cate->posts->sortByDesc('created_at')->take(3); ?>
			@foreach($posts as $post)
			<div class="single-relavent-post row align-items-center">
				<div class="col-lg-5 post-left">
					<div class="feature-img relative">
						<div class="overlay overlay-bg"></div>
						<a href="{{route('detail', ['id'=>$post->id])}}"><img class="img-fluid" src="{{asset('storage/'.$post->image)}}" alt=""></a>
					</div>
					<ul class="tags">
						<li><a href="{{route('category', ['id'=>$post->category->id])}}">{{$post->category->name}}</a></li>
					</ul>
				</div>
				<div class="col-lg-7 post-right">
					<a href="image-post.html">
						<a href="{{route('detail', ['id'=>$post->id])}}"><h4>{{$post->title}}</h4></a>
					</a>
					<ul class="meta">
						<li><span class="lnr lnr-user"></span>{{$post->user->name}}</li>
						<li><span class="lnr lnr-calendar-full"></span>{{date('F j, Y', strtotime($post['created_at'])) }}</li>
						<li><span class="lnr lnr-eye"></span>{{$post->view}} lượt xem</li>
					</ul>
					<p class="excert">
						{{$post->description}}
					</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	@endforeach
	<!-- End relavent-story-post Area -->
@endsection