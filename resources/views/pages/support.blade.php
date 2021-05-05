@extends('layouts.main')

@section('more_styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .social-link{
            color: #fff !important;
            direction: none;
        }
    </style>
@endsection

@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    	<div class="auto-container">
			<div class="content">
				<h1>Contact Us<span></span></h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>contact</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<!-- <div class="map-section">
			<div class="map-outer">
				<div class="map-canvas"
					data-zoom="12"
					data-lat="-37.817085"
					data-lng="144.955631"
					data-type="roadmap"
					data-hue="#ffc400"
					data-title="Envato"
					data-icon-path="images/icons/map-marker.png"
					data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
				</div>
			</div>
		</div> -->
		<div class="auto-container">
			<div class="inner-container">
				<h2>Are you in need of Project Assistance?</h2>
				<div class="row clearfix">

					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">

                            @component('components.flash')@endcomponent

							<!--Contact Form-->
							<div class="contact-form">
								<form method="post" action="{{ route('support.post') }}">
                                    @csrf

									<div class="form-group">
										<input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required>
									</div>

                                    <div class="form-group">
										<input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required>
									</div>

									<div class="form-group">
										<input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
									</div>

                                    <div class="form-group">
										<input type="text" name="phone" value="{{ old('phone')}}" placeholder="Phone Number" required>
									</div>

									<!-- <div class="form-group">
										<select class="custom-select-box">
											<option>Select topic</option>
											<option>Topic One</option>
											<option>Topic Two</option>
										</select>
									</div> -->

									<div class="form-group">
										<textarea name="description" placeholder="Project Description" required>{{ old('description') }}</textarea>
									</div>

                                    <div class="link-box">
                                        <button type="submit" class="theme-btn btn-style-twelve" style="background:#EC0203;">Request for Project Assistance </button>
                                    </div>

								</form>
							</div>

						</div>
					</div>

				</div>

                <!-- <div class="row clearfix" style="margin-top:50px;">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        right
                    </div>

                </div> -->

			</div>
		</div>
	</section>
	<!-- End Team Page Section -->

    <section class="contact-info-section" style="background-image:url({{ asset('/public/assets/images/background/10.jpg') }})">
		<div class="auto-container">
			<div class="row clearfix">

				<div class="column col-lg-6 col-md-6 col-sm-12">
					<!-- <h4>United Kingdom</h4> -->
					<ul class="list-style-six">
						<li><span class="icon fa fa-facebook"></span> Facebook <br> <a href="https://web.facebook.com/StartupBizfoundation" class="social-link" target="_blank">https://web.facebook.com/StartupBizfoundation</a></li>
						<li><span class="icon fa fa-twitter"></span>Twitter <br> <a href="https://twitter.com/SBizfoundation" class="social-link" target="_blank">https://twitter.com/SBizfoundation</a></li>
						<li><span class="icon fa fa-linkedin"></span>Linkedin <br> <a href="#" class="social-link" target="_blank">https://www.linkedin.com</a></li>
					</ul>
				</div>
				<div class="column col-lg-6 col-md-6 col-sm-12">
					<!-- <h4>Australia</h4> -->
					<ul class="list-style-six">
                        <li><span class="icon flaticon-phone-receiver"></span>Contact No. <br> +234 803 268 6671</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>Email <br>info@startupbizfoundation.org</li>
						<li><span class="icon flaticon-map"></span>Address <br>#10 Nwaturuocha Ikenegbu Owerri, <br>Imo State, <br>Nigeria</li>
					</ul>
				</div>

				<!-- <div class="column col-lg-6 col-md-6 col-sm-12">
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> Nieuwe Leliestraat 27-HS <br> 101J Amsterdam</li>
						<li><span class="icon flaticon-phone-receiver"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>support@finance.com.uk</li>
					</ul>
				</div> -->

			</div>
		</div>
	</section>

    <div style="margin-bottom:20px;">
        &nbsp;
    </div>


    <!-- Contact Page Section -->


	<!-- Contact Info Section -->
	<!-- <section class="contact-info-section" style="background-image:url(images/background/10.jpg)">
		<div class="auto-container">
			<div class="row clearfix">

				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>United Kingdom</h4>
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> 49488 Avenida Obregon, <br> La Quinta, CA 92253</li>
						<li><span class="icon flaticon-phone-receiver"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>support@finance.com.uk</li>
					</ul>
				</div>
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Australia</h4>
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> 13/1 Dixon Street, Sydney <br> NSW 2000</li>
						<li><span class="icon flaticon-phone-receiver"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>support@finance.com.uk</li>
					</ul>
				</div>
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Netherlands</h4>
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> Nieuwe Leliestraat 27-HS <br> 101J Amsterdam</li>
						<li><span class="icon flaticon-phone-receiver"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>support@finance.com.uk</li>
					</ul>
				</div>

			</div>
		</div>
	</section> -->
	<!-- End Contact Info Section -->


<script src="{{ asset('/public/assets/js/jquery.js') }}"></script>
<script src="{{ asset('/public/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('/public/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/public/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('/public/assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('/public/assets/js/appear.js') }}"></script>
<script src="{{ asset('/public/assets/js/owl.js') }}"></script>
<script src="{{ asset('/public/assets/js/wow.js') }}"></script>
<script src="{{ asset('/public/assets/js/validate.js') }}"></script>
<script src="{{ asset('/public/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('/public/assets/js/main.js') }}"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="{{ asset('/public/assets/js/map-script.js') }}"></script>
<!--End Google Map APi-->


@endsection
