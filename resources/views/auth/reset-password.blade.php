@php 
$page = "NONE";
@endphp
@extends('layouts.main', compact('page'))
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('/public/assets/images/background/8.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Reset Password<span></span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Reset Password</li>
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

                        <x-jet-validation-errors class="mb-4" class="text-danger" />

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="block">
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                <x-jet-input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-jet-button class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
