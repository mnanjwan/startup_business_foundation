@extends('layouts.main')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Annual Reports<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                <li><a href="#">Media</a></li>
                <li>Annual Reports</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="blog-list-section">
    <div class="auto-container">
        <div class="row clearfix">
        <h3>No Reports found</h3>

    </div>
</section>



<section class="pricing-section alternate">
		<div class="auto-container">

			<!--Pricing Info Tabs-->
			<div class="pricing-info-tabs">
				<!--Pricing Tabs-->
				<div class="pricing-tabs tabs-box">


					<!--Tabs Container-->
					<div class="tabs-content">

						<!--Tab / Active Tab-->
						<!-- <div class="tab active-tab" id="package-monthly">
							<div class="content">
								<div class="row clearfix">

									<div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">

											<div class="title-box">
												<h5>Basic Plan</h5>
												<div class="text">The argument in favor of using to <br> filler text goes something.</div>
											</div>
											<div class="lower-box">
												<a href="#" class="theme-btn btn-style-eight">Get a free trial</a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div> -->



					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Pricing Section -->




@endsection
