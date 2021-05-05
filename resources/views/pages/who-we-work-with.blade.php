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
                    <h4>Who We Work With</h4>
                    <div class="text">
                        <p>By leveraging our expert knowledge in the industry, we work nationally and internationally
                            in partnership with public stakeholders and private sector intermediaries, other multilateral
                            and bilateral development organizations to support business / industrial startup and development
                            in emerging markets in Nigeria.</p>


                    </div>
                    <!-- <ul class="list-style-four">
                        <li>Facilitate Business Development Services to Micro Small and medium scale Enterprises (MSMEs).</li>
                        <li>Conducting sector studies and analysis for private sector strategic development.</li>
                        <li>Facilitation of MSMEs in securing financing.</li>
                        <li>Setup and manage a service provider’s database including machinery and supplier for MSMEs.</li>
                        <li>Strengthening of MSMEs by conducting and facilitating seminars, workshops and training programs.</li>
                        <li>Donor assistances for the development of MSMEs through programs and projects.</li>
                        <li>Identification and promotion of business and investment opportunities on the basis of supply/demand gap.</li>
                    </ul> -->

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
                        <div class="services-block-two col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/service-1.jpg" alt="" />
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
                        </div>

                        <!-- Services Block Two -->
                        <div class="services-block-two col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/service-2.jpg" alt="" />
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
                        </div>

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

@endsection
