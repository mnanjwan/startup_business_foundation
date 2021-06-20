@php 
$page = "NONE";
@endphp
@extends('layouts.main', compact('page'))
@section('content')
<!--Page Title-->
<!-- <section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Login<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                <li>Login</li>
            </ul>
        </div>
    </div>
</section> -->
<!--End Page Title-->


<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="services-single">

                    <div style="margin-top:50px; text-align:center;">
                        <h5  class="text-success">You have successfully signed in</h5>

                        <a type="button" class="btn btn-secondary mt-4" href="{{ route('media.publications') }}">Access Publications</a>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<!--End Sidebar Page Container-->


@endsection
