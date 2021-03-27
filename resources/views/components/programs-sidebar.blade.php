<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar default-sidebar">

        <!--Blog Category Widget-->
        <div class="sidebar-widget sidebar-blog-category">
            <ul class="blog-cat">
                <li @if($programSidebar == 'who-we-are') class="active" @endif><a href="{{ route('about.who-we-are') }}">Who We Are</a></li>
                <li @if($programSidebar == 'who-we-work-with') class="active" @endif><a href="{{ route('about.who-we-work-with') }}">Who We Work With</a></li>
                <li @if($programSidebar == 'what-we-do') class="active" @endif><a href="{{ route('about.what-we-do') }}">What We Do</a></li>
                <li @if($programSidebar == 'founder-message') class="active" @endif><a href="{{ route('about.founder-message') }}">Message From the Founder</a></li>
            </ul>
        </div>

        <!-- Contact Widget-->
        <!-- <div class="sidebar-widget contact-widget">
            <div class="sidebar-title">
                <h4>Contact</h4>
            </div>
            <ul>
                <li><span class="icon flaticon-map-1"></span> 3111 West Allegheny Avenue <br> Pennsylvania 19132</li>
                <li><span class="icon flaticon-phone-receiver"></span> 1-982-782-5297 <br> 1-982-125-6378</li>
                <li><span class="icon flaticon-comment"></span> support@financ.com</li>
            </ul>
        </div> -->

        <!-- Brochures Widget-->
        <!-- <div class="sidebar-widget brochures-widget">
            <div class="sidebar-title">
                <h4>Brochures</h4>
            </div>
            <div class="text">View our 2019 financial prospectus brochure for an easy to read guide on all of the services offer.</div>
            <ul class="files">
                <li><a href="#"><span class="fa fa-file-pdf-o"></span> Download Brochure</a></li>
                <li><a href="#"><span class="fa fa-file-word-o"></span> Characteristics</a></li>
            </ul>
        </div> -->

        <!-- Banner Widget-->
        <!-- <div class="sidebar-widget banner-widget">
            <div class="widget-content" style="background-image:url(images/resource/service-15.jpg)">
                <div class="logo">
                    <img src="images/icons/widget-logo.png" alt="" />
                </div>
                <div class="title">Securied Business with</div>
                <h2>Financ</h2>
                <a href="contact.html" class="theme-btn btn-style-seventen">Let’s start now <span class="icon flaticon-link"></span></a>
            </div>
        </div> -->

    </aside>
</div>
