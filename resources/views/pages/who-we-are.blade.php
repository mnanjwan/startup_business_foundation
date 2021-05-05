@extends('layouts.main')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>About Us<span> - Who We Are</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                <li>Who We Are</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Sidebar Side-->
            @component('components.about-sidebar', compact('aboutSidebar'))
            @endcomponent

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="services-single">
                    <h4>Who We Are</h4>
                    <div class="text">
                        <p>Startup Business Foundation is initiated as a unique tool for startups entrepreneurs and many,
                            who want to startup, build or establish their businesses or industries. We have developed
                            excellence industrial and business startup programmes as well as investment opportunities
                            expository profiles that suit the aspiration, interest, passion of existing and potential
                            entrepreneurs. We provide snapshot information and platform for startups entrepreneurs to
                            acquire the needed prowess to find dreams fulfilling businesses and investors. You could be the next!  </p>
                        <p>Basically, the objective of this Foundation is to revolutionalize industrialization in different part of
                            Nigeria which will have replicate effects on the socio-economic development, job creation and poverty
                            reduction in the country. Researches and statistics have showed that there are arrays of both raw materials
                            and mineral resources deposits in different communities and regions in Nigeria. Consequently, our focus is
                            therefore to continuously explore and identify ways on how we can locally transform the raw material and
                            mineral resources into finished products. Evidently, this initiative could be said to be timely especially
                            now that there is need for paradigm shift from exporter of commodity products to value addition through processing.
                            Similarly, the shift by industrial giants in the world from heavy industrial manufacturing to service oriented
                            industries has consolidated the need as well as opportunity to be tapped. </p>
                        <p>In furtherance, the mission and mandate of the Foundation includes but not limited to the following;</p>
                        <p>In furtherance, the objectives and mandate of the Foundation includes the following:</p>
                    </div>
                    <ul class="list-style-four">
                        <li>Facilitate Business Development Services to Micro Small and medium scale Enterprises (MSMEs).</li>
                        <li>Conducting sector studies and analysis for private sector strategic development.</li>
                        <li>Strengthening of MSMEs by conducting and facilitating seminars, workshops and training programs.</li>
                        <li>Facilitation of MSMEs in securing financing.</li>
                        <li>To become a reliable registered export house primarily motivated with a sense of service to develop
                            orientation for exports in small scale industries sector especially for non – traditional items.</li>
                    </ul>
                    <!-- <div class="text">
                        <p>Since inception, the Foundation has expended her publication list of its prefeasibility study to over 300 studies and
                        we are launching a number of programme such as Rural Micro–Enterprise Initiatives, Enterprise /Industrial Development
                        Centre, Metrocract Startups Master-class, among other programmes. </p>
                    </div> -->
                    <!-- Services Gallery -->
                    <!-- <div class="services-gallery">
                        <div class="services-carousel owl-carousel owl-theme">
                            <div class="slide">
                                <div class="image">
                                    <img src="{{ asset('/public/assets/images/resource/service-16.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="image">
                                    <img src="{{ asset('/public/assets/images/resource/service-17.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="image">
                                    <img src="{{ asset('/public/assets/images/resource/service-16.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="image">
                                    <img src="{{ asset('/public/assets/images/resource/service-17.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="image">
                                    <img src="{{ asset('/public/assets/images/resource/service-16.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="image">
                                    <img src="{{ asset('/public/assets/images/resource/service-17.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!--Services Info Tabs-->
                    <!-- <div class="Services-info-tabs">

                        <div class="service-tabs tabs-box">


                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#prod-audit" class="tab-btn active-btn">Audit</li>
                                <li data-tab="#prod-strategy" class="tab-btn">Strategy</li>
                                <li data-tab="#prod-sustainability" class="tab-btn">Sustainability</li>
                            </ul>


                            <div class="tabs-content">


                                <div class="tab active-tab" id="prod-audit">
                                    <div class="content">
                                        <div class="text">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab" id="prod-strategy">
                                    <div class="content">
                                        <div class="text">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab" id="prod-sustainability">
                                    <div class="content">
                                        <div class="text">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> -->

                    <div class="row clearfix">

                        <!-- Services Block Two -->
                        <!-- <div class="services-block-two col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('/public/assets/images/resource/service-1.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="icon-box">
                                                <span class="icon flaticon-analytics"></span>
                                            </div>
                                            <h5><a href="#">Financial Management <br> and Consulting</a></h5>
                                        </div>
                                    </div>
                                    <div class="overlay-box-two">
                                        <div class="overlay-inner-two">
                                            <div class="content">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-target"></span>
                                                </div>
                                                <div class="text">The argument in favor of using filler text goes something like this</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Services Block Two -->
                        <!-- <div class="services-block-two col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('/public/assets/images/resource/service-2.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="icon-box">
                                                <span class="icon flaticon-statistics"></span>
                                            </div>
                                            <h5><a href="#">Market Research <br> and Analysis</a></h5>
                                        </div>
                                    </div>
                                    <div class="overlay-box-two">
                                        <div class="overlay-inner-two">
                                            <div class="content">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-statistics"></span>
                                                </div>
                                                <div class="text">The argument in favor of using filler text goes something like this</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>

                    <!-- More Services -->
                    <!-- <div class="more-services">
                        <div class="clearfix">
                            <div class="pull-left">
                                <a href="#"><span class="fa fa-angle-double-left"></span> Previous Service</a>
                            </div>
                            <div class="pull-right">
                                <a href="#">Newer Service <span class="fa fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>

        </div>
    </div>
</div>
<!--End Sidebar Page Container-->

<!--Sponsors Section-->
	<!-- <section class="sponsors-section">
		<div class="auto-container">

			<div class="carousel-outer">

                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/1.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/2.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/3.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/4.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/5.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/6.png') }}" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/1.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/2.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/3.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/4.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/5.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('/public/assets/images/clients/6.png') }}" alt=""></a></div></li>
                </ul>
            </div>

		</div>
	</section> -->
	<!--End Sponsors Section-->


    <!-- Testimonial Section Three -->
	<!-- <section class="testimonial-section-three">
		<div class="auto-container">


			<div class="three-item-carousel owl-carousel owl-theme">


				<div class="testimonial-block-four">
					<div class="inner-box">
						<div class="image-outer">
							<div class="image">
								<img src="{{ asset('/public/assets/images/resource/author-6.jpg') }}" alt="" />
							</div>
						</div>
						<div class="text"></div>
						<h5>Amber Lee</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>


				<div class="testimonial-block-four">
					<div class="inner-box">
						<div class="quote-icon flaticon-double-quotes"></div>
						<div class="image-outer">
							<div class="image">
								<img src="{{ asset('/public/assets/images/resource/author-7.jpg') }}" alt="" />
							</div>
						</div>
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime  reach a review point you’ll end up reviewing and negotiating.</div>
						<h5>Watson Fitter</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>


				<div class="testimonial-block-four">
					<div class="inner-box">
						<div class="quote-icon flaticon-double-quotes"></div>
						<div class="image-outer">
							<div class="image">
								<img src="{{ asset('/public/assets/images/resource/author-6.jpg') }}" alt="" />
							</div>
						</div>
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime  reach a review point you’ll end up reviewing and negotiating.</div>
						<h5>Micheal Bush</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>


				<div class="testimonial-block-four">
					<div class="inner-box">
						<div class="quote-icon flaticon-double-quotes"></div>
						<div class="image-outer">
							<div class="image">
								<img src="{{ asset('/public/assets/images/resource/author-7.jpg') }}" alt="" />
							</div>
						</div>
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime  reach a review point you’ll end up reviewing and negotiating.</div>
						<h5>Erbil Hook</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>


				<div class="testimonial-block-four">
					<div class="inner-box">
						<div class="quote-icon flaticon-double-quotes"></div>
						<div class="image-outer">
							<div class="image">
								<img src="{{ asset('/public/assets/images/resource/author-6.jpg') }}" alt="" />
							</div>
						</div>
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime  reach a review point you’ll end up reviewing and negotiating.</div>
						<h5>Alex Anderson</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>


				<div class="testimonial-block-four">
					<div class="inner-box">
						<div class="quote-icon flaticon-double-quotes"></div>
						<div class="image-outer">
							<div class="image">
								<img src="{{ asset('/public/assets/images/resource/author-7.jpg') }}" alt="" />
							</div>
						</div>
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime  reach a review point you’ll end up reviewing and negotiating.</div>
						<h5>Micheal George</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>

			</div>

		</div>
	</section> -->
	<!-- End Testimonial Section Three -->


@endsection
