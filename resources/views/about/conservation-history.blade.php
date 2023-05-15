@extends('layouts.master')

@section('title', '- Conservation History')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.about') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('nwls.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.about') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.conservation-history') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

    <!-- Service Section -->
    <div id="services-section" class="padding pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sx-12">
                    <x-about-sidebar />
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="box-title mb-20">
                        <h2>{{ trans('navbar.conservation-history') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <figure>
                            <img src="{{ asset('public/assets/images/str-imgs/str-20.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <p>{{ trans('about.conservation-p1') }}</p>
                            <p>{{ trans('about.conservation-p2') }}</p>
                            <p>{{ trans('about.conservation-p3') }}</p>
                            <p>{{ trans('about.conservation-p4') }}</p>
                            <p>{{ trans('about.notification-p1') }}</p>
                            <p>{{ trans('about.notification-p2') }}</p>
                            <p>{{ trans('about.notification-p3') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
