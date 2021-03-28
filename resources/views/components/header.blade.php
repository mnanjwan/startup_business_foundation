<header class="main-header header-style-five">

    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li><i class="fa fa-envelope-o"></i> info@startupbizfoundation.org</li>
                        <li><i class="fa fa-phone"></i><a href="#">+234 805 094 8938</a></li>
                        <li><i class="fa fa-map-marker"></i><a href="#">121 King Street, USA, Newyork</a></li>
                    </ul>
                </div>
                <!-- <div class="top-right">
                    <div class="cart-box">
                        <div class="cart-box-btn dropdown-toggle"><span class="fa fa-shopping-cart"></span><span class="total-cart">0</span></div>
                    </div>
                    <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="flag-icon"><img src="images/icons/flag-icon.png" alt=""/></span>En</a>
                        <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                            <li><a href="#">English</a></li>
                            <li><a href="#">German</a></li>
                            <li><a href="#">Arabic</a></li>
                            <li><a href="#">Hindi</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('/public/assets/images/sbf_logo_original.png') }}" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="{{ route('about.who-we-are') }}">Who We Are</a></li>
                                        <li><a href="{{ route('about.who-we-work-with') }}">Who We Work With</a></li>
                                        <li><a href="{{ route('about.what-we-do') }}">What We Do</a></li>
                                        <li><a href="{{ route('about.founder-message') }}">Founder's Message</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Our Programs</a>
                                    <ul>
                                        <li><a href="{{ route('program.investment-opportunities-exposition') }}">Investment Opportunities Exposition</a></li>
                                        <li><a href="{{ route('program.rural-micro-enterprise-initiative') }}">Rural Micro-Enterprise Initiatives</a></li>
                                        <li><a href="{{ route('program.enterprise-industrial-incubation-centres') }}">Enterprise/Industrial Incubation Centres</a></li>
                                        <li><a href="{{ route('program.meritocrats-startup') }}">Meritocrats Starups Programme</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="{{ route('get-Involved') }}">Get Involved</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                            </ul>
                        </div>

                    </nav>

                    <!--Outer Box-->
                    <!-- <div class="outer-box">
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="https://html.themexriver.com/finano/blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index-2.html" class="img-responsive"><img src="{{ asset('/public/assets/images/logo_small.png') }}" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="dropdown"><a href="#">About</a>
                                <ul>
                                    <li><a href="{{ route('about.who-we-are') }}">Who We Are</a></li>
                                    <li><a href="{{ route('about.what-we-do') }}">What We Do</a></li>
                                    <li><a href="{{ route('about.founder-message') }}">Message From the Founder</a></li>
                                    <!-- <li><a href="testimonial.html">Testimonial</a></li>
                                    <li><a href="not-found.html">Error Page</a></li> -->
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Our Programs</a>
                                <ul>
                                    <li><a href="services.html">Investment Opportunities Exposition</a></li>
                                    <li><a href="services-2.html">Rural Micro-Enterprise Initiatives</a></li>
                                    <li><a href="services-single.html">Enterprise/Industrial Incubation Centres</a></li>
                                    <li><a href="services-single.html">Meritocrats Starups Programme</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="{{ route('get-Involved') }}">Get Involved</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>
