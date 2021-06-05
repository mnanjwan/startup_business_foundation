@extends('layouts.main')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Publications<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                <li>Media</li>
                <li>Publications</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="blog-list-section">
    <div class="auto-container">
        <div class="row clearfix">
        <!-- <h3>No Publications  found</h3> -->
        <!-- <p>The Foundation is aware of the need to keep the small entrepreneurs informed of the
            latest developments in economic and industrial field, especially those affecting
            the growth of the sector. In the pursuance of this objective, the Foundation will
            continue to develop and publish articles that expose investment opportunities on
            MSMEs sector. The publication shall contain other interesting features to assist
            potential and existing small entrepreneurs in planning and processing their operations in a better manner. </p>
        <p>Currently the Foundation is planning on publishing quarterly Magazine called
            “The Survivor Digest.” The publication shall contain articles from high
            dignitaries in the economic and industrial field and shall deal with subjects
            concerning industry, finance, planning and research. An attempt shall be made
            to have this publication on national level. The contents shall be selective
            and are likely to serve as a useful reference book for all those concerned
            with industry, commerce, finance and trade.</p> -->

        @if(count($publications) > 0)
            @foreach($publications as $publication)
                {{--<div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ asset('/public/assets/images/news/news-temp.jpg') }}" alt="" />
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                            </ul>
                            <h5><a href="blog-single.html">{{ $publication->title }}</a></h5>
                            <div class="link-box">
                                <a href="{{ route('media.publications-details', ['publication_id'  => $publication->id]) }}" class="theme-btn btn-style-twelve">View <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>--}}
            @endforeach
        @else
            <h4>No publications found</h4>
        @endif

    </div>


</section>





<section class="call-to-action-two">
	<div class="auto-container">
		<div class="clearfix">

			<div class="pull-left">
				<h2>Request for <span>quote</span></h2>
			</div>
			<div class="pull-right">
				<a href="contact.html" class="theme-btn btn-style-five">Request now <span class="icon fa fa-arrow-right"></span></a>
			</div>

		</div>
	</div>
</section>

@endsection
