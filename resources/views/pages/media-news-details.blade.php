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

                <div class="jumbotron p-3 p-md-5 text-white rounded bg-light">
                    <div class="col-md-12 px-0">
                        <img src="{{ asset($post->image) }}" he alt="logo">
                    </div>
                </div>

            </div>

            <main role="main" class="container">
                <div class="row">
                    <div class="col-md-8 blog-main">
                        {{-- <h3 class="pb-3 mb-4 font-italic border-bottom">
                            {{$post->title}}
                        </h3> --}}

                        <div class="blog-post">
                            <h2 class="blog-post-title">{{ $post->title }}</h2>
                            <p class="blog-post-meta">{{ date('M j, Y', strtotime($post->created_at)) }} <a
                                    href="#">{{ $post->writer->name }}</a></p>


                            {!! $post->body !!}
                        </div><!-- /.blog-post -->
                        <div style="height: 10%"></div>

                        {{-- <nav class="blog-pagination">
                            <a class="btn btn-outline-primary" href="#">Older</a>
                            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                        </nav> --}}

                    </div><!-- /.blog-main -->

                    <aside class="col-md-4 blog-sidebar">
                        {{-- <div class="p-3 mb-3 bg-light rounded">
                            <h4 class="font-italic">About</h4>
                            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis
                                consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        </div> --}}

                        <div class="p-3">
                            {{-- <h4 class="font-italic">Archives</h4> --}}
                            {{-- <ol class="list-unstyled mb-0">
                                <li><a href="#">March 2014</a></li>
                                <li><a href="#">February 2014</a></li>
                                <li><a href="#">January 2014</a></li>
                                <li><a href="#">December 2013</a></li>
                                <li><a href="#">November 2013</a></li>
                                <li><a href="#">October 2013</a></li>
                                <li><a href="#">September 2013</a></li>
                                <li><a href="#">August 2013</a></li>
                                <li><a href="#">July 2013</a></li>
                                <li><a href="#">J   <div class="blog-post">
                                    <h2 class="blog-post-title">New feature</h2>
                                    <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                                        lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.
                                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                                        justo sit amet risus.</p>
                                    <ul>
                                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                                        <li>Donec id elit non mi porta gravida at eget metus.</li>
                                        <li>Nulla vitae elit libero, a pharetra augue.</li>
                                    </ul>
                                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
                                        amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra
                                        augue.</p>
                                </div><!-- /.blog-post -->
        une 2013</a></li>
                                <li><a href="#">May 2013</a></li>
                                <li><a href="#">April 2013</a></li>
                            </ol> --}}
                        </div>

                        <div class="p-3">
                            {{-- <h4 class="font-italic">Social Links</h4>
                            <ol class="list-unstyled"> --}}
                                {{-- <li><a href="#">GitHub</a></li> --}}
                                {{-- <li><a href="#">Twitter</a></li>
                                <li><a href="#">Facebook</a></li> --}}
                            </ol>
                        </div>
                    </aside><!-- /.blog-sidebar -->
                    <hr>

                    <h2>Recent Post</h2>

                    <div class="row">
                        @foreach ($posts as $posts)
                            <div class="card m-5" style="width: 18rem;">
                                <img class="card-img-top" src="{{asset($posts->image)}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$posts->title}}</h5>
                                    <p class="card-text">{{ Str::substr(strip_tags($post->body), 0, 100) }}{{ Str::length(strip_tags($post->body)) > 250 ? '...' : "" }}</p>
                                    <a href="{{route('media.news-details', ['id' => $posts->id])}}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        @endforeach

                    </div>



                </div><!-- /.row -->





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
