@extends('layouts.main')
@section('content')
<!--Main Slider-->
<section class="main-slider style-four">
    <div class="main-slider-carousel owl-carousel owl-theme">

        <div class="slide" style="background-image:url({{ asset('/public/assets/images/main-slider/newbg.png') }})">
            <div class="auto-container">
                <div class="content">
                    <div class="title"></div>
                    <h1 style="font-size:26px;">Rural Micro Enterprise Development; <br> The Pathway to Industrialization.</h1>
                    <div class="text">...bridging business and industrial development barriers.</div>
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-twelve">Let’s start now <span class="fa fa-angle-right"></span></a>
                        <a href="#" class="theme-btn btn-style-thirteen">Our Programmes <span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="slide" style="background-image:url({{ asset('/public/assets/images/main-slider/6_1.png') }})">
            <div class="auto-container">
                <div class="content">
                    <div class="title">We hope success</div>
                    <h1>We build your <br> best business</h1>
                    <div class="text">…breaking business startup barriers</div>
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-twelve">Let’s start now <span class="fa fa-angle-right"></span></a>
                        <a href="#" class="theme-btn btn-style-thirteen">Our Programmes <span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
    <!--End Slide Info Boxed-->

</section>
<!--End Main Slider-->


<!-- About Section Three -->
<section class="about-section-three">
	<div class="auto-container">
		<div class="row clearfix">

			<!-- Content Column -->
			<div class="content-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column">
					<!-- Sec Title -->
					<div class="sec-title">
						<div class="title">About us</div>
						<h2>Who We Are<br> <span></span></h2>
					</div>
					<div class="bold-text">Startup Business Foundation is initiated as a unique tool for startups entrepreneurs and many,
                         who want to startup, build or establish their businesses or industries. </div>
					<div class="text">We have developed excellence industrial and business startup programmes as well as investment
                        opportunities expository profiles that suit the aspiration, interest, passion of existing and potential entrepreneurs.</div>
                    <div class="link-box">
                        <a href="{{ route('about.who-we-are') }}" class="theme-btn btn-style-twelve">Learn More <span class="fa fa-angle-right"></span></a>
                    </div>
				</div>
			</div>

			<!-- Image Column -->
			<div class="image-column col-lg-6 col-md-12 col-sm-12">
				<div class="image">
					<img src="{{ asset('/public/assets/images/about-intro.jpg') }}" alt="" />
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End About Section Three -->



<div class="auto-container">
    <div class="sec-title-three">
        <div class="clearfix">
            <div class="pull-left">
                <h2>Our <span>Impact</span></h2>
            </div>
            <!-- <div class="pull-right">
                <div class="text">Startup Business Foundation is initiated as a unique tool for startups entrepreneurs and many, who want to
                    startup, build or establish their businesses or industries. We have developed excellence industrial and business startup
                    programmes as well as investment opportunities expository profiles that suit the aspiration, interest, passion of existing
                     and potential entrepreneurs.</div>
            </div> -->
        </div>
    </div>
</div>

<section class="counter-section" style="background-image:url({{ asset('/public/assets/images/background/happyclients.jpg') }})">

    <div class="auto-container">


        <div class="fact-counter style-three">
            <div class="row clearfix">


                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-start"></span>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000ms" data-stop="100">0</span>+
                            <div class="counter-title">Projects completed</div>
                        </div>
                    </div>
                </div>


                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-collaboration"></span>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="2000" data-stop="25">0</span>
                            <div class="counter-title">Team Members</div>
                        </div>
                    </div>
                </div>


                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-hand-shake-1"></span>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="2000" data-stop="200">0</span>+
                            <div class="counter-title">Happy Clients</div>
                        </div>
                    </div>
                </div>


                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-stopwatch"></span>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="5">0</span>+
                            <div class="counter-title">Years Experience</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Counter Section -->


<!-- About Section Four -->
<section class="about-section-four">
    <div class="auto-container">

        <!-- Sec Title Three -->
        <!-- <div class="sec-title-three">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="title">About</div>
                    <h2>Startup<br> Business<br> Foundation</h2>
                </div>
                <div class="pull-right">
                    <div class="text">Startup Business Foundation is initiated as a unique tool for startups entrepreneurs and many, who want to
                        startup, build or establish their businesses or industries. We have developed excellence industrial and business startup
                        programmes as well as investment opportunities expository profiles that suit the aspiration, interest, passion of existing
                         and potential entrepreneurs.</div>
                </div>
            </div>
        </div> -->

        <div class="row clearfix">
            <img src="{{ asset('/public/assets/images/home.png') }}" />
        </div>
    </div>
</section>
<!-- End About Section Four -->


<section class="call-to-action-two mb-4" style="background:#EC0203;">
	<div class="auto-container">
		<div class="clearfix">

			<div class="pull-left">
				<h2>Like what we do?<span> </span></h2>
			</div>
			<div class="pull-right">
				<a href="{{ route('get-Involved') }}" class="theme-btn btn-style-five">Get Involved <span class="icon fa fa-arrow-right"></span></a>
			</div>

		</div>
	</div>
</section>

<section class="mb-4">&nbsp;</section>

<!-- Services Section Ten -->
<!-- <section class="services-section-ten">
    <div class="auto-container">
        <div class="sec-title-three centered">
            <div class="title">Our dedicated services</div>
            <h2>Learn some new info from <br> our latest news</h2>
        </div>
        <div class="row clearfix">


            <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="box-one"></div>
                    <div class="box-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-earnings"></span>
                    </div>
                    <h6><a href="#">Finance <br> Management</a></h6>
                    <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                </div>
            </div>


            <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="box-one"></div>
                    <div class="box-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-budget-1"></span>
                    </div>
                    <h6><a href="#">Banking <br> Investigation</a></h6>
                    <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                </div>
            </div>


            <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="box-one"></div>
                    <div class="box-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-target"></span>
                    </div>
                    <h6><a href="#">Business <br> Insurance</a></h6>
                    <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                </div>
            </div>


            <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="box-one"></div>
                    <div class="box-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-car"></span>
                    </div>
                    <h6><a href="#">Car <br> Insurance</a></h6>
                    <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                </div>
            </div>


            <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="box-one"></div>
                    <div class="box-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-analysis-1"></span>
                    </div>
                    <h6><a href="#">Market <br> Research</a></h6>
                    <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                </div>
            </div>


            <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="box-one"></div>
                    <div class="box-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-house"></span>
                    </div>
                    <h6><a href="#">Home <br> Insurance</a></h6>
                    <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                </div>
            </div>


            <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="box-one"></div>
                    <div class="box-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-employee"></span>
                    </div>
                    <h6><a href="#">Life <br> Insurance</a></h6>
                    <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                </div>
            </div>


            <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="box-one"></div>
                    <div class="box-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-heartbeat"></span>
                    </div>
                    <h6><a href="#">Health <br> Insurance</a></h6>
                    <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                </div>
            </div>

        </div>
    </div>
</section> -->
<!-- End Services Section Ten -->

<!-- Feature Section -->
<!-- <section class="feature-section">
    <div class="auto-container">

        <div class="sec-title-three">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="title">Our best features</div>
                    <h2>Why choose us</h2>
                </div>
                <div class="pull-right">
                    <div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</div>
                </div>
            </div>
        </div>


        <div class="feature-tabs tabs-box">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#feature-expert" class="tab-btn">Expert team <span>The argument in favorite of using filler to text goes some thing like this top</span></li>
                        <li data-tab="#feature-brand" class="tab-btn active-btn">Best Finance Brand <span>The argument in favorite of using filler to text goes some thing like this top</span></li>
                        <li data-tab="#feature-ideas" class="tab-btn">Best Leadership Ideas<span>The argument in favorite of using filler to text goes some thing like this top</span></li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="tabs-content">
                        <div class="tab" id="feature-expert">
                            <div class="content">
                                <div class="image">
                                    <img src="{{ asset('/public/assets/images/resource/feature.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab active-tab" id="feature-brand">
                            <div class="content">
                                <div class="image">
                                    <img src="{{ asset('/public/assets/images/resource/feature-1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="feature-ideas">
                            <div class="content">
                                <div class="image">
                                    <img src="{{ asset('/public/assets/images/resource/feature-2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section> -->
<!-- End Feature Section -->

<!-- Counter Section -->




<!-- Team Section Two -->
<!-- <section class="team-section-two">
    <div class="auto-container">

        <div class="sec-title-three centered">
            <div class="title">Our dedicated Team</div>
            <h2>We have a large number of <br> expert team member</h2>
        </div>

        <div class="row clearfix">

            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="team.html"><img src="{{ asset('/public/assets/images/resource/team-4.jpg') }}" alt="" title=""></a>
                        <ul class="social-box">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h5><a href="team.html">Frazer Diamond</a></h5>
                        <div class="designation">Founder & CEO</div>
                    </div>
                </div>
            </div>

            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="team.html"><img src="{{ asset('/public/assets/images/resource/team-5.jpg') }}" alt="" title=""></a>
                        <ul class="social-box">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h5><a href="team.html">Chen Lee</a></h5>
                        <div class="designation">Co-Founder</div>
                    </div>
                </div>
            </div>

            <div class="team-block-two col-lg-4 col-md-12 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="team.html"><img src="{{ asset('/public/assets/images/resource/team-6.jpg') }}" alt="" title=""></a>
                        <ul class="social-box">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h5><a href="team.html">Emma O’Brien</a></h5>
                        <div class="designation">Sr. Product Engineer</div>
                    </div>
                </div>
            </div>

            <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="team.html"><img src="{{ asset('/public/assets/images/resource/team-7.jpg') }}" alt="" title=""></a>
                        <ul class="social-box">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h5><a href="team.html">David Ankrum</a></h5>
                        <div class="designation">Co Founder</div>
                    </div>
                </div>
            </div>

            <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="team.html"><img src="{{ asset('/public/assets/images/resource/team-8.jpg') }}" alt="" title=""></a>
                        <ul class="social-box">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h5><a href="team.html">Maria De Aragon</a></h5>
                        <div class="designation">HRM</div>
                    </div>
                </div>
            </div>

            <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="team.html"><img src="{{ asset('/public/assets/images/resource/team-9.jpg') }}" alt="" title=""></a>
                        <ul class="social-box">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h5><a href="team.html">Joe Hurt</a></h5>
                        <div class="designation">CTO</div>
                    </div>
                </div>
            </div>

            <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="team.html"><img src="{{ asset('/public/assets/images/resource/team-10.jpg') }}" alt="" title=""></a>
                        <ul class="social-box">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h5><a href="team.html">Damien Wayne</a></h5>
                        <div class="designation">COO</div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section> -->
<!-- End Team Section Two -->

<!-- News Section Two -->
<!-- <section class="news-section-two style-two">
    <div class="auto-container">
        <div class="sec-title-three">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="title">Some of our blog</div>
                    <h2>Learn about us</h2>
                </div>
                <div class="pull-right">
                    <div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</div>
                </div>
            </div>
        </div>

        <div class="row clearfix">


            <div class="news-block-two red col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="images/resource/news-4.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="{{ asset('/public/assets/images/resource/news-4.jpg') }}" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                            <li><span class="fa fa-user"></span>Admin</li>
                        </ul>
                        <h5><a href="blog-single.html">Strategy for Norway's Peion Fund Global.</a></h5>
                        <a href="#" class="theme-btn btn-style-fourteen">View more</a>
                    </div>
                </div>
            </div>

            <div class="news-block-two red col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('/public/assets/images/resource/news-5.jpg') }}" alt="" />
                        <div class="overlay-box">
                            <a href="{{ asset('/public/assets/images/resource/news-5.jpg') }}" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                            <li><span class="fa fa-user"></span>Admin</li>
                        </ul>
                        <h5><a href="blog-single.html">What we are capable of usually gets discovered.</a></h5>
                        <a href="#" class="theme-btn btn-style-fourteen">View more</a>
                    </div>
                </div>
            </div>


            <div class="news-block-two red col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('/public/assets/images/resource/news-6.jpg') }}" alt="" />
                        <div class="overlay-box">
                            <a href="{{ asset('/public/assets/images/resource/news-6.jpg') }}" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                            <li><span class="fa fa-user"></span>Admin</li>
                        </ul>
                        <h5><a href="blog-single.html">Food industry leaders often change their promoters.</a></h5>
                        <a href="#" class="theme-btn btn-style-fourteen">View more</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section> -->

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

<!-- Call To Action Section -->
<!-- <section class="call-back-section" style="background-image:url({{ asset('/public/assets/images/background/6.jpg') }})">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">


                    <div class="request-form">
                        <form method="post" action="https://html.themexriver.com/finano/contact.html">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Email Address</label>
                                    <input type="text" name="text" placeholder="" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Business Type</label>
                                    <select class="custom-select-box">
                                        <option>- Select -</option>
                                        <option>Business One</option>
                                        <option>Business Two</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Email Address</label>
                                    <input type="text" name="text" placeholder="" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>&nbsp;</label>
                                    <button class="theme-btn btn-style-thirteen" type="submit" name="submit-form">Submit now <span class="icon fa fa-angle-right"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="title-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2>Request a call back</h2>
                    <div class="text">If you want to discuss your business with our fine consultants, please schedule a meeting through this contact form</div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Call To Action Section -->

<!-- Map Section -->
<!-- <section class="map-section">
    <div class="map-outer">
        <div class="map-canvas"
            data-zoom="12"
            data-lat="-37.817085"
            data-lng="144.955631"
            data-type="roadmap"
            data-hue="#ffc400"
            data-title="Envato"
            data-icon-path="{{ asset('/public/assets/images/icons/map-marker-2.png') }}"
            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
        </div>
    </div>
</section> -->
<!-- End Map Section -->
@endsection
