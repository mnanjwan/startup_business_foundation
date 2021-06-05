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
                <li>{{ $publication->title }}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="services-single">
                    <h4>{{ $publication->title }}</h4>

                </div>
            </div>


            <!--Content Side-->
            <!-- <div class="content-side col-lg-6 col-md-12 col-sm-12">
                <div class="services-single">
                    <h4>What We Do</h4>
                </div>
            </div> -->

        </div>
    </div>
</div>
<!--End Sidebar Page Container-->





@endsection
