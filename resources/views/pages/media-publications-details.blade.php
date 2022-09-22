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

            <div class="content-side col-lg-5 col-md-5 col-sm-12">
                <div class="services-single">
                    @if($publication->poster == NULL)
                        <img src="{{ asset('/assets/publications/ph.png') }}" style="width: auto !important; height: 400px !important;" alt="" />
                    @else
                        <img src="{{ asset($publication->poster) }}" style="width: auto !important; height: 400px !important;" alt="" />
                    @endif
                </div>
            </div>

            <!--Content Side-->
            <div class="content-side col-lg-7 col-md-7 col-sm-12">
                <div class="services-single">
                    <h6>{{ $publication->title }}</h6>
                </div>
                <div class="services-single mt-4">
                    <a type="button" class="btn btn-primary" href="{{ route('download-publication', ['publication_id' => $publication->id]) }}">Download</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!--End Sidebar Page Container-->


@endsection
