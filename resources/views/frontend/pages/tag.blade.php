@extends('frontend.layout.single')
@section('title', 'Tag')
@section('page-header')
<!-- Start top-post Area -->
<section class="top-post-area pt-10">
	<div class="container no-padding">
		<div class="row">
			<div class="col-lg-12">
				<div class="hero-nav-area">
					<h1 class="text-white">{{$tags->name}}</h1>
					<p class="text-white link-nav"><a href="{{route('index')}}">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('tag', ['id'=>$tags->id])}}">{{$tags->name}}</a></p>
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
	<h4 class="cat-title">Bài viết có tag: {{$tags->name}}</h4>
	@foreach($tags->post as $post)
	<div class="single-latest-post row align-items-center">
		<div class="col-lg-5 post-left">
			<div class="feature-img relative">
				<div class="overlay overlay-bg"></div>
				<img class="img-fluid" src="{{asset('storage'.$post->image)}}" alt="">
			</div>
			<ul class="tags">
				<li><a href="#">{{$post->category->name}}</a></li>
			</ul>
		</div>
		<div class="col-lg-7 post-right">
			<a href="image-post.html">
				<h4>{{$post->title}}</h4>
			</a>
			<ul class="meta">
				<li><a href="#"><span class="lnr lnr-user"></span>{{$post->user->name}}</a></li>
				<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
				<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
			</ul>
			<p class="excert">
				{{$post->description}}
			</p>
		</div>
	</div>
	@endforeach
	<div class="load-more">
		<a href="#" class="primary-btn">Load More Posts</a>
	</div>
	
</div>
<!-- End latest-post Area -->
@endsection