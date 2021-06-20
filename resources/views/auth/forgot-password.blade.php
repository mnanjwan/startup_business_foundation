@php 
$page = "NONE";
@endphp
@extends('layouts.main', compact('page'))
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Forgot Password<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('about.who-we-are') }}">Home</a></li>
                <li>Forgot Password</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="content-side col-lg-5 col-md-5 col-sm-12" style="margin: 0 auto;">
                <div class="services-single">

                    <div>

                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>                        

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <x-jet-validation-errors class="mb-4" class="text-danger" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mt-4">
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-jet-button class="btn btn-primary">
                                    {{ __('Email Password Reset Link') }}
                                </x-jet-button>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<!--End Sidebar Page Container-->


@endsection
