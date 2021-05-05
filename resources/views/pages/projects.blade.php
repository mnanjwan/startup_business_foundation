@extends('layouts.main')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Projects<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Projects</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Blog List Section -->
	<section class="blog-list-section">
		<div class="auto-container">
            <div class="text">
                <p>In line with the Foundation effort to the attainment of its objectives, we currently
                    in talks on strategic partnership with some stakeholders on how revolutionalize
                    industrialization in Nigeria. These include: The Bank of Industry and other development
                    banks as well as Deposit Money Banks in Nigeria, State Governments and State SME
                    Development Agencies, the National Youth Service Corp (NYSC), National Directorate
                    of Employment (NDE), Universities and other Higher Institutions. In fact all segment
                    of the society especially private sector associates such as The Chamber of Commerce,
                    National Association of Small and Medium Enterprise (NASME), The Manufacturers
                    Association of Nigeria (MAN) and other bilateral chambers and other business
                    associations as well as the general public. </p>
                <p>The following are some of the projects that we have developed and currently developing:</p>
                <ul class="list-style-four">
                    <li  style="color: #777777 !important;">Completed two hundred (200) prefeasibility studies in different sectors of socioeconomic
                        activities in the country, exposing investor(s) on investment opportunities in the emerging Nigeria market.</li>
	                <li style="color: #777777 !important;">Developed but to be completed feasibility study on the setting up of $1.2 Billion Dollar Industrial Parks Facility in Nigeria.</li>
                    <li style="color: #777777 !important;">Currently developing a strategy and business development plan for attracting highly specialized energy-intensive yet
                        environmentally friendly industrial operations for West African countries.</li>
                    <li style="color: #777777 !important;">Currently assessing the potential for attracting investment from Europe by exploring potentials of African Continental Free Trade Agreement (AfCFTA).</li>

                </ul>
            </div>
			<!-- Sec Title -->
			<!-- <div class="row clearfix">


				<div class="news-block-four col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('/public/assets/images/news/news-temp.jpg') }}" alt="" />
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar" style="color: #EC0203 !important;"></span>April 12, 2021</li>
								<li><span class="fa fa-user" style="color: #EC0203 !important;"></span>Admin</li>
							</ul>
							<h5><a href="#">Project Title 1</a></h5>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-twelve">View More <span class="fa fa-angle-right"></span></a>
                            </div>
						</div>
					</div>
				</div>

			</div> -->

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
