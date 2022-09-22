@extends('layouts.main')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Photos and Videos<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                <li><a href="#">Media</a></li>
                <li>Photos and Videos</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="blog-grid-section">
	<div class="auto-container">
		<!-- Sec Title -->
		<div class="sec-title centered">
			<h2>Photos</h2>
		</div>
        {{-- <h3>No Photos found</h3> --}}
		<div class="row clearfix">
            @foreach ($img as $img)
            <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="image">
						<img src="{{ asset($img->path) }}" alt="" />
					</div>
					<div class="lower-content">
						<h4><a href="#">{{$img->caption}}</a></h4>
					</div>
				</div>
			</div>
            @endforeach





		</div>

	</div>
</section>
<!-- End Blog Grid Section -->

<section class="blog-grid-section">
	<div class="auto-container">

		<div class="sec-title centered">
			<h2>Videos</h2>
		</div>
        {{-- <h3>No Videos found</h3> --}}
		<div class="row clearfix">
            @foreach ($vid as $vid)
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="image">
						{{-- <img src="{{ asset('/assets/images/resource/news-7.jpg') }}" alt="" /> --}}
                        {!! $vid->path !!}
						{{-- <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-button"></span></a> --}}
					</div>
					<div class="lower-content">
						<h4><a href="#">{{$vid->caption}}</a></h4>
					</div>
				</div>
			</div>
            @endforeach


		</div>


	</div>
</section>
<!-- End Blog Grid Section -->


@endsection
