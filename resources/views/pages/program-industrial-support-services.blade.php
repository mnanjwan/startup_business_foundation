@extends('layouts.main')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Industrial Support Services<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                <li>Programs</li>
                <li>Industrial Support Services</li>
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
                    <h4>Industrial Support Services</h4>
                    <div class="text">
                        <p>The scope for industrial support services for small industries field is vast and enormous.
                            This potentiality for development needs to be exploited thoroughly. The planned programme
                             of assistance of small industries is almost in a package touching every phase of business
                              operations catering to the developmental needs of small industries sector are the
                              products of the innovating methods employed by the Foundation.</p>

                          <div class="image-column col-lg-12 col-md-12 col-sm-12 mb-4">
                              <div class="image">
                                  <img src="{{ asset('/public/assets/images/industrial-support-services.png') }}" alt="" />
                              </div>
                          </div>

                        <p>The entire structure was to be motivated towards the goal of securing development of
                            small industries sector. And yet every segment has to be planned to provide the
                            particular need of small industries. This unity amidst diversity was much needed
                             to ensure accelerated growth of small industries sector.</p>
                        <!-- <p>The programme is open to those who wish to open a new business or expand their current business. The applicant must be within
                             18 to 35 years of age with O level education as the minimum academic qualification. </p> -->
                    </div>
                    <h4>i. SUPPORTIVE ACTIVITIES FOR SMALL INDUSTRIES</h4>
                    <div class="text">
                        <p>The emphasis in the provision of industrial support services is on extension
                            basis. The Foundation visit to small scale enterprises is for on the spot
                            advice and guidance on technical, managerial, marketing aspect among others.</p>
                            <p>These services include the following:</p>
                    </div>
                    <ul class="list-style-four">
                        <li>Industry planning</li>
                        <li>Guidance on choice of raw materials, machinery and tools, which would lead to
                            their most effective utilization</li>
                        <li>Advice on installation of machinery, plant layout and on techniques of
                            production, maintenance and repair.</li>
                        <li>Introduction of new and appropriate technology as well as training of plant personnel.</li>
                        <li>Product improvement.</li>
                        <li>Quality control and standardization.</li>
                        <li>Production planning and control.</li>
                        <li>Feasibility studies and market survey.</li>
                        <li>Cost analysis, book keeping and accounting.</li>
                        <li>Financial counseling and credit arrangement.</li>
                        <li>Management clinic.</li>
                    </ul>
                    <div class="text">
                        <p>Each of the industrial units or clusters will have to register with the Foundation
                             to enjoy these services. </p>
                    </div>
                    <h4>ii. EXPORTS</h4>
                    <div class="text">
                        <p>Despite the sizeable contribution of the small scale sector to national income,
                            its export performance is negligible. This does not, however, mean that small
                            industries are not export –oriented or that they lack superior quality acceptable
                            to international markets. Besides the difficulties of pricing, sales promotion in
                            international markets is a hazardous job involving maintenance of connection with
                            internationally known firms, trade agents and Nigerian embassies abroad. </p>
                            <p>Despite the sizeable contribution of the small scale sector to national
                                income, its export performance is negligible. This does not, however,
                                mean that small industries are not export –oriented or that they lack
                                superior quality acceptable to international markets. Besides the difficulties
                                of pricing, sales promotion in international markets is a hazardous job involving
                                maintenance of connection with internationally known firms, trade agents and
                                Nigerian embassies abroad. </p>
                    </div>
                    <h4>iii. IMPORTS</h4>
                    <div class="text">
                        <p>Restrictions on imports, especially raw materials and inessential components,
                            are being liberalized in conformity with the slowly emerging economic policy of
                            decontrol. The meager import requirements of small units render their imports
                            difficult. The limited requirements do not interest the foreign suppliers and
                            make bargaining for a favourable price difficult. </p>
                        <p>Through its import wing, the Foundation shall actively assists the small units by
                             importing the products on their behalf on the license surrendered by them. The
                             import made in bulk quantities and distributed to the respective units as per
                             their requirements. This saves the cost of Foundation help in obtaining them at
                             reasonable prices.</p>
                    </div>
                    <h4>iv. BANK CREDIT ASSISTANCE SCHEME</h4>
                    <div class="text">
                        <p>In lieu of Central Bank of Nigeria (CBN) directives to commercial banks in the
                            country to set out certain percentage of their funds for lending to small scale
                            industries with the objective of making the banking system serve better the needs
                            of development of the economy in conformity with the national priorities and
                             objectives. </p>
                        <p>With this regard, the credit requirements of the needy sectors of the economy
                            including the small scale sector will now be met adequately. Despite this favourable
                            development, the need for removing the handicaps of small scale industries in obtaining
                            credit from commercial banks is going to remain for some time to come.</p>
                        <p>It is found that many of the small scale units are still ignorant of these recent
                            developments. Again, the small scale units are mainly owner manager concerns and
                            as such they are not in a position to comply with all the formalities from the
                            banks. They find the procedure to be cumbersome and many times unintelligible. </p>
                        <p>The section will be equipped with qualified staff both on the managerial and
                            technical side and guides the small entrepreneurs in preparing project reports,
                            fulfilling the requirements of the banks in its entirety, approaching the banks
                            on their behalf and negotiating for loans and advances. </p>
                    </div>
                    <h4>v. GOVERNMENT PURCHASES</h4>
                    <div class="text">
                        <p>The Foundation shall strive to be enlisted as registered supplier’ with the directorate
                            general of supplies and disposals of government. The government is recognized as the
                            single largest purchaser of industrial products in the country. But the formalities
                            that are required to be undergone to obtain orders from the government are cumbersome
                            involving inordinate delays. </p>
                        <p>The Foundation shall sponsor its assistance by acting as via between the small units
                            and the government purchasing authorities.</p>
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
