@extends('frontend.layout.single')
@section('title', 'Category')
@section('page-header')
	<!-- Start top-post Area -->
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-nav-area">
						<h1 class="text-white">{{$cates->name}}</h1>
						<p class="text-white link-nav"><a href="{{Route('index')}}">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('category', ['id'=>$cates->id])}}">{{$cates->name}}</a></p>
					</div>
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
	<!-- End top-post Area -->
@endsection
@section('main')
		<!-- Start latest-post Area -->
		<div class="latest-post-wrap">
			<h4 class="cat-title">Latest News</h4>
			@foreach($posts as $post)
			<div class="single-latest-post row align-items-center">
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
			<div class="load-more">
				<a href="#" class="primary-btn">{{$posts->links()}}</a>
			</div>
			
		</div>
		<!-- End latest-post Area -->
@endsection