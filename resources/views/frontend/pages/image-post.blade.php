@extends('frontend.layout.single')
@section('title', 'Bài viết')
@section('page-header')
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-nav-area">
						<h1 class="text-white">{{$posts->title}}</h1>
						<p class="text-white link-nav"><a href="{{route('index')}}">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('category', ['id'=>$posts->category->id])}}">{{$posts->category->name}} </a><span class="lnr lnr-arrow-right"></span><a href="{{route('detail', ['id'=>$posts->id])}}">{{$posts->title}} </a></p>
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
@endsection
@section('main')
	<!-- Start single-post Area -->
	<div class="single-post-wrap">
		<div class="feature-img-thumb relative">
			<div class="overlay overlay-bg"></div>
			<img class="img-fluid" src="{{asset('storage/'.$posts->image)}}" alt="">
		</div>
		<div class="content-wrap">
			<ul class="tags mt-10">
				<li><a href="#">{{$posts->category->name}}</a></li>
			</ul>
			<a href="{{route('detail', ['id'=>$posts->id])}}">
				<h3>{{$posts->title}}</h3>
			</a>
			<ul class="meta pb-20">
				<li><span class="lnr lnr-user"></span>{{$posts->user->name}}</li>
				<li><span class="lnr lnr-calendar-full"></span>{{date('F j, Y', strtotime($posts['created_at'])) }}</li>
				<li><span class="lnr lnr-bubble"></span><span class="fb-comments-count" data-href="http://ldh.biz/post/{{$posts->id}}"></span> bình luận</li>
				<li><span class="lnr lnr-eye"></span>{{$posts->view}} lượt xem</li>
			</ul>
			<p>
				{!! $posts->content !!}
			</p>

			<!-- post tags -->
			
			<div class="post-tags">
				<ul>
					<li>TAGS:</li>
					@foreach($posts->tag as $tag)
					<li><a href="{{route('tag', ['id'=>$tag->id])}}">{{$tag->name}}</a></li>
					@endforeach
				</ul>
			</div>
			

			<div class="navigation-wrap justify-content-between d-flex">
				@if($previous)
				<a class="prev" href="{{route('detail', ['id'=>$previous->id])}}"><span class="lnr lnr-arrow-left"></span>Prev Post</a>
				@endif
				@if($next)
				<a class="next" href="{{route('detail', ['id'=>$next->id])}}">Next Post<span class="lnr lnr-arrow-right"></span></a>
				@endif
			</div>
		</div>
		<div class="comment-form">
			<h4>Post Comment</h4>
			<div class="col-md-12 fb-comments" data-href="http://ldh.biz/post/{{$posts->id}}" data-numposts="10" 
				data-width="100%"></div>
		</div>
	</div>
@endsection