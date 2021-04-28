@extends('layouts.main')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
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
        <h3>No Photos found</h3>
		<!-- <div class="row clearfix">

			<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="image">
						<img src="{{ asset('/public/assets/images/resource/news-7.jpg') }}" alt="" />
					</div>
					<div class="lower-content">
						<h4><a href="#">Photo Caption</a></h4>
					</div>
				</div>
			</div>

		</div> -->

	</div>
</section>
<!-- End Blog Grid Section -->

<section class="blog-grid-section">
	<div class="auto-container">

		<div class="sec-title centered">
			<h2>Videos</h2>
		</div>
        <h3>No Videos found</h3>
		<!-- <div class="row clearfix">

			<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="image">
						<img src="{{ asset('/public/assets/images/resource/news-7.jpg') }}" alt="" />
						<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-button"></span></a>
					</div>
					<div class="lower-content">
						<h4><a href="#">Video Caption</a></h4>
					</div>
				</div>
			</div>

		</div> -->


	</div>
</section>
<!-- End Blog Grid Section -->


@endsection
