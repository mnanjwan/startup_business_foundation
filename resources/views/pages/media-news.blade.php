@extends('layouts.main')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>News<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                <li><a href="#">Media</a></li>
                <li>News</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Blog List Section -->
	<section class="blog-list-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="row clearfix">

            <h3>No News Found</h3>

				<!-- News Block Four -->
				<!-- <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('/public/assets/images/news/news-temp.jpg') }}" alt="" />
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar" style="color: #EC0203 !important;"></span>April 12, 2021</li>
								<li><span class="fa fa-user" style="color: #EC0203 !important;"></span>Admin</li>
							</ul>
							<h5><a href="blog-single.html">News Title</a></h5>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-twelve">View More <span class="fa fa-angle-right"></span></a>
                            </div>
						</div>
					</div>
				</div> -->


			</div>

			<!--Styled Pagination-->
            <!-- <ul class="styled-pagination text-center">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
                <li class="next"><a href="#"><span class="fa fa-angle-double-right"></span></a></li>
            </ul> -->
            <!--End Styled Pagination-->

		</div>
	</section>
	<!-- End Blog List Section -->


@endsection
