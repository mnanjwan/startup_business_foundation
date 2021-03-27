@extends('layouts.main')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Enterprise/Industrial Incubation Centres<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                <li>Enterprise/Industrial Incubation Centres</li>
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
                    <h4>Enterprise/Industrial Incubation Centres</h4>
                    <div class="text">
                        <p>Enterprise Incubation Centre is one of the roadmap to the industrialization agenda of Startup Business Foundation.</p>
                        <p>The Incubation facility is designed with the goals of fostering entrepreneurial culture, skills building,
                            accelerating the growth of new and existing businesses, encouraging its commercialization and improving
                            small business access to resources available in Nigeria. Consequentially, after conducting specific
                            needs-assessments and adapting the industrial incubation model to the social, economic, cultural and
                            environmental characteristics suitable for our region, we therefore, planned to initiate Enterprise / industrial
                            Incubation Centre considering its relevance in the region.</p>
                        <p>Our research further shown that less than half of formally established businesses stand a chance of
                            succeeding in the long-term and that entrepreneurial deficiencies that are addressed superficially are the main
                            cause for the collapse of emerging enterprises. This is the catalyst behind the Foundation Enterprise Incubation
                            Centre, which followed a feasibility study carried out in Nigeria, to fully comprehend the economic landscape of
                            different communities, local and states governments in the country.</p>
                        <p>The study illustrated the need to address skills development training fatigue for potential entrepreneurs
                            and the need to provide support for ongoing ventures, amongst others.</p>
                        <p>“The aim of the Startup Business Foundation incubation centre is to increase the odds by providing unique,
                            adaptable, functional and feasible programmes for entrepreneurs at various developmental stages (start-ups)
                            and to create an enabling environment where enterprises can learn to operate efficiently by acquiring the
                            requisite skills and abilities, understand the legislation that governs their industries and ultimately
                            expand their services and reach beyond the borders of the Nigeria,” </p>
                        <p>This project forms part of the Foundation Enterprise Incubation Programme, which offers a successful
                            incubator model and acceleration programmes for start-ups entrepreneurs. The Centres is a business
                            incubator with a mission to build, drive and support the spirit of innovation.</p>
                        <p>This programme is planned to operate in line with National Board for Technology Incubator regulation and
                            other relevant stakeholders. The project will make a significant contribution to employment and the trained
                            workforce in the Nigeria on inception. The centres will also create a considerable amount of indirect
                            employments in each region and hundreds of jobs. </p>
                        <p>Finally, the incubation centres could be mechanized under public private partnership (PPP) model. Notably,
                            the establishments of most incubation facilities in Nigeria have failed due to the exclusion of business
                            sponsor and host communities. Therefore, the centres are open for partnership from public sector,
                            International Donor Agencies and other relevant agencies to scale up our operations.</p>
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
                    <h4>Assessment Mechanism For The Facility Outputs</h4>
                    <div class="text">
                        <p>The outputs of the incubators are the successful tenants, which graduated from the incubators. Performance of
                            these firms after graduation in line with the set objectives needs to be evaluated to ascertain their status
                            outside the incubators and to justify funding of the incubation system. This evaluation, which is a
                            continuous exercise, would enables us among other stakeholders to identity the flans in the in¬cubation
                             process as presently practiced and make amends in evaluating incubator graduate firms, we have adopted
                             the following indices which include survival rates, number of jobs created, capital and turnover
                             growths, impacts on local economy, tax payment, cluster initiation and formation and neighborhood
                             lifting. </p>
                    </div>
                    <h5>Survival Rate</h5>
                    <div class="text">
                        <p>We use survival rate of incubated firms to evaluate the impacts of the incubation process on the firms,
                            as will show the ability of the incubators to cushion the effects of the uncertainties inherent to new
                            business start-ups therein increasing their chances for survival. Report indicates that about 47
                            per cent of incubated firms survive after four years and only 38 per cent survive after six years
                             in the Nigeria (National Institute of Marketing of Nigeria). Therefore, to cushion this effect,
                             we have designed a feedback and support mechanism that provide needed assistance for our graduates.</p>
                    </div>
                    <h5>Employment Generation</h5>
                    <div class="text">
                        <p>The number of jobs created by the graduated firms can sometimes be used to evaluate the impacts of our
                             facility in the communities in which we are located had been noted that direct employ¬ments may not
                             give the true picture of the total employment generated. Therefore, other models are used. Also,
                             economic impact will be defined as the sum of direct, indirect and induced effects direct economic
                             effects are generated as new business create jobs and hire workers to fill new positions. The
                             indirect economic impacts occur as new finished purchase goods and services from other firms in either case.</p>
                    </div>
                    <h5>Number of Graduates/ Retention in Local Area</h5>
                    <div class="text">
                        <p>The impacts of our incubation facility to the economic devel¬opment in our area can be monitored by the
                            number of the incubated firms that remain in our locality. The tenants could not be expected to have
                            relocated outside the states, where the incubators were located. These will enables us determine the
                            number of graduates that remain in our region and their impacts on the local economies.</p>
                        <p>To this end, we are currently in talks on strategic partnership with stakeholders in the development of
                            industrialization in Nigeria. These include: Nigeria Capital Development Fund, Nigerian Investment
                            Promotion Commission, The Central Bank, Bank of Industry and other development banks as well as
                            Deposit Money Banks in Nigeria, State Governments and State SME Development Agencies, the National
                            Youth Service Corp (NYSC), National Directorate of Employment (NDE), Raw Materials Research and
                            Development Council (RMRDC), Universities and other Higher Institutions. In fact all segment of
                            the society especially private sector associates such as The Chamber of Commerce, National Association
                            of Small and Medium Enterprise (NASME), The Manufacturers Association of Nigeria (MAN) and other
                            bilateral chambers and other business associations as well as the general public on how to achieve
                            the agendas of the Foundation.</p>
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
