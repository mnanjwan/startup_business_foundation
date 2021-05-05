@extends('layouts.main')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Get Involved<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                <li>Who We Are</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Services Section Three-->
<section class="services-section-three">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Services Block -->
            <div class="services-block-three style-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-bar-chart"></span>
                    </div>
                    <h6><a href="#">PARTNER WITH US</a></h6>
                    <div class="text">We welcome support from individuals and organizations that believe in our vision and
                        want to partner with us to deliver specific projects. We seek partners for our Rural Micro Enterprise
                        Initiative, Enterprise/ Industrial Incubation Centre, Industrial Park Project etc.</div>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block-three style-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-board"></span>
                    </div>
                    <h6><a href="#">BECOME A VOLUNTEER</a></h6>
                    <div class="text">We seek self-motivated volunteers who are passionate about igniting
                        industrialization and encouraging our people to be part of it. We are looking for
                        volunteers that are knowledgeable and ready to explore viable industrial investment
                        opportunities, facilitate workshops, or share their story in our career development
                        and motivational talk series. </div>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block-three style-two col-lg-4 col-md-12 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-student"></span>
                    </div>
                    <h6><a href="#">DONATE</a></h6>
                    <div class="text">We are only able to carry out our work towards achieving equitable economic development
                        and opportunities rural communities and startup businesses development because of the generosity of
                        our numerous ‘Friends & Well wishers’ who continue to support us. Please click here if you would
                        like to make a donation to our cause.</div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Video Section -->
<!-- <section class="video-section" style="background-image:url(images/background/9.jpg)">
    <div class="auto-container">
        <div class="title">Video</div>
        <h2>See how we work with <br> touch of <span>experience</span></h2>
        <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button" aria-hidden="true"></i><span class="ripple"></span></a>
    </div>
</section> -->
<!-- End Video Section -->

<!-- Feature Section -->

<!-- End Feature Section -->

@endsection
