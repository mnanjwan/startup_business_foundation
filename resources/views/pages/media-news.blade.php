@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('/assets/images/background/8.jpg') }})">
        <div class="auto-container">
            <div class="content">
                <h1>News<span></span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                    <li><a href="#">Media</a></li>
                    <li>News</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Blog List Section -->
    <section class="blog-list-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="row clearfix text">

                <!-- News Block Four -->

                @foreach ($post as $post)
                    <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset($post->image) }}" alt="" height="200px" />
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="fa fa-calendar" style="color: #EC0203 !important;"></span>{{ date('M j, Y', strtotime($post->created_at)) }}
                                    </li>
                                    <li><span class="fa fa-user"
                                            style="color: #EC0203 !important;"></span>{{ $post->writer->name }}</li>
                                </ul>
                                <h5><a href="blog-single.html">{{ $post->title }}</a>
                                </h5>
                                {{-- <p class="card-text mb-4">{!!$post->body!!}</p> --}}
                                <p class="card-text mb-4">{{ Str::substr(strip_tags($post->body), 0, 300) }}{{ Str::length(strip_tags($post->body)) > 250 ? '...' : "" }}</p>

                                <div class="link-box">
                                    <a href="{{ route('media.news-details', ['id' => $post->id])}}" class="theme-btn btn-style-twelve">View More <span
                                            class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach




                <!-- /.row -->
                <!-- <h3>No News Found</h3> -->

            </div>

            <!--Styled Pagination-->
            {{-- <ul class="styled-pagination text-center">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
                <li class="next"><a href="#"><span class="fa fa-angle-double-right"></span></a></li>
            </ul> --}}
            <!--End Styled Pagination-->

        </div>
    </section>
    <!-- End Blog List Section -->
@endsection
