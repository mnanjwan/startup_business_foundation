@extends('layouts.main')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Rural Micro-Enterprise Initiatives<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                <li>Investment Opportunities Exposition</li>
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
            @component('components.programs-sidebar', compact('programSidebar'))
            @endcomponent

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="services-single">
                    <h4>Partnership For Food, Jobs and Rural Infrastructures Initiatives (PFJRII)</h4>
                    <div class="text">
                        <p>While agriculture is still often referred to as an ‘old person’s job’, the growth of mechanization, bio-technology,
                            nanotech and digitalization are changing agricultural production, with greater interactions than ever before with
                            manufacturing and services. Agriculture is no longer a ‘traditional’ sector. The rural resources have the potential
                            to make significant contributions to the equitable economic development in Nigeria.</p>
                        <p>Urbanization has led majorly to the inability to discover and utilize the rural resources maximally. We have failed
                            to acknowledge and harness the underlying resources in the rural areas and communities. This has led to the use of
                            the resources of the minority to carter for the majority. In other words, the resources available in the urban cities
                             are few compare to the rural areas or regions. Similarly, the development of any country does not only depend on
                             the continuous development of the urban areas but also relies on the rural areas as well. It is the responsibility
                              of the government as much as the private companies and individuals, all working together to produce the desire impact.</p>
                        <p>The PFJRI is developed with key objective of igniting rural industrialization by identifying feasible, viable and sustainable
                            development projects that are geared towards food, jobs and rural communities infrastructural development by carrying out
                            participatory feasibility surveys. In addition, we offer funding, technical and managerial assistance to entrepreneurs in
                            the rural communities. </p>
                        <p>PFJRI will promote rural industrialization by granting credit facilities in form grant and other enterprise support services
                             to existing and potential entrepreneurs. We shall be collaborating with local communities to develop business and
                              investment opportunities in their area by identifying the available resources where communities have comparative
                              advantage. In other words, these projects must be those with not less than ninety-five percent local raw material
                              content and human capital requirements. Eighty percent (80%) of the grant fund will be offered for agricultural
                               production, processing, storage, distribution and marketing to individual farmers and organizations.</p>
                        <p>We are open for partnership with individuals, corporations, agencies, civil society groups, government to bring
                            sustainable development in agric business value chain and improved access to market to smallholder farmers and
                            agro-processors in Nigeria. We believe that when people are given the right skills, information and support,
                            they can solve their own people.  </p>
                        <p>These projects are developed to run through three approaches:</p>
                    </div>
                    <h4>i. PFJRI Agropark Initiated Projects</h4>
                    <div class="text">
                        <p>This is a project designed to provide lasting solutions to the problems of food shortage, poverty, low productivity,
                            inadequate processing infrastructure, diversification and poorly integrated markets in different parts of Nigeria,
                            aggravated by an under-developed agro-industrial sector. This project comes with a high potential for value added
                             and employment opportunities in the agricultural sector in rural communities. </p>
                        <p>Consequently, this project aims at improving the efficiency of agricultural businesses with value addition in order
                            to aid the multiplier economic effects of increased food, national income and access to improved technology. The
                            services offered under this initiative, aided by MOBILE TECHNOLOGY APP, ranging from access up-to-date mobile
                            information on agricultural practices, weather forecasts, market prices, as well as solutions that help agricultural
                            businesses boost production. In a nutshell, the main objectives of this initiative are to: </p>
                    </div>
                    <ul class="list-style-four">
                        <li>Help rural farmers develop new skills and grow revenue using technology.</li>
                        <li>Provide specialized market information to farmers.</li>
                        <li>Grant farmers access without limit to improved agricultural production methods.</li>
                        <li>Assist many rural households in enhancing their food security and raising their incomes.</li>
                        <li>Promote home-grown methods in agricultural innovation.</li>
                    </ul>

                    <div class="text">
                        <p>Under this project, industrial projects have to be spread in the Local Government Areas in different states in
                            Nigeria on the basis of raw material availability. On full realization, such projects are passed to indigenes
                            of the area of location for ownership and management. </p>
                        <p>Nevertheless, because adding value at the farm level also entails additional costs and some business risk, it
                            requires careful business planning and evaluation of market potential, including a feasibility assessment.
                            Market feasibility and financial feasibility will be examined prior to establishing any processing plant in
                             this project. It is therefore pertinent to examine the individual products from the farms through feasibility
                              studies, consumer demand and preferences, consumer preferences for type of outlet, and demographic effects
                               on consumption. While there is some information on the costs and market opportunities associated with
                               value added to different farm produce which will be critically considered.</p>
                    </div>
                    <h4>ii. PFJRI Rural Youth Employment Promotion Project</h4>
                    <div class="text">
                        <p>According GIZ GmbH, Sub-Saharan Africa (SSA) is the world’s youngest continent, with 70 per cent of its rapidly
                            increasing population below the age of 30. Every year, 25 million young people in Africa enter the labour market,
                             more than half of them (14 million) in rural areas. </p>
                        <p>By the year 2030, 320 million new jobs will need to be created, which makes Rural Youth Employment (RYE) one of
                            the most pressing and challenging topics for our partner governments, but also presents an enormous opportunity
                            for economic development in capitalising on this “youth dividend”.
                            Consequently, in this type, groups of three or more graduates organize themselves into partnership for the purpose
                             of benefiting from the PFJRII's enterprise support services. Such groups prepare project profiles and feasibility
                             studies on the basis of which equity investment or grant considerations and approvals are made. The PFJRI grants
                              covers machinery, buildings, and working capital within definite limits, and manages the venture through a
                              combined effort of the potential entrepreneur and investor’s representative until the capital outlay is recovered.
                        </p>
                    </div>
                    <h4>iii. PFJRI Partnership</h4>
                    <div class="text">
                        <p>This arrangement is for established entrepreneurs or businessmen who must belong to organized private sector.
                            Under the scheme, qualified entrepreneurs are given assistance by the PFJRI in form of partnership equity participation.</p>
                    </div>
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
