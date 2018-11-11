@extends('frontend.layout.single')
@section('title', 'Tìm kiếm')
@section('page-header')
<!-- Start top-post Area -->
<section class="top-post-area pt-10">
	<div class="container no-padding">
		<div class="row">
			<div class="col-lg-12">
				<div class="hero-nav-area">
					<h1 class="text-white">Từ khóa: {{$keyword}}</h1>
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
	<h4 class="cat-title">Tìm thấy: {{count($items)}} kết quả</h4>
	@foreach($items as $item)
	<div class="single-latest-post row align-items-center">
		<div class="col-lg-5 post-left">
			<div class="feature-img relative">
				<div class="overlay overlay-bg"></div>
				<a href="{{route('detail', ['id'=>$item->id])}}"><img class="img-fluid" src="{{asset('storage/'.$item->image)}}" alt=""></a>
			</div>
			<ul class="tags">
				<li><a href="{{route('category', ['id'=>$item->category->id])}}">{{$item->category->name}}</a></li>
			</ul>
		</div>
		<div class="col-lg-7 post-right">
			<a href="image-post.html">
				<a href="{{route('detail', ['id'=>$item->id])}}"><h4>{{$item->title}}</h4></a>
			</a>
			<ul class="meta">
				<li><span class="lnr lnr-user"></span>{{$item->user->name}}</li>
				<li><span class="lnr lnr-calendar-full"></span>{{date('F j, Y', strtotime($item['created_at'])) }}</li>
				<li><span class="lnr lnr-eye"></span>{{$item->view}} lượt xem</li>
			</ul>
			<p class="excert">
				{{$item->description}}
			</p>
		</div>
	</div>
	@endforeach
	<div class="load-more">
		{{$items->links()}}
	</div>

</div>
<!-- End latest-post Area -->
@endsection