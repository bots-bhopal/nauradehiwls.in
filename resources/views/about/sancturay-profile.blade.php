@extends('layouts.master')

@section('title', '- Sanctuary Profile')

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
                            {{ trans('navbar.reserve-profile') }}
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
                        <h2>{{ trans('navbar.reserve-profile') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/reserve.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <br />
                            <p>{{ trans('about.profile-p1') }}</b></p>
                            <p>{{ trans('about.profile-p2') }}</b></p>
                            <p>{{ trans('about.profile-p3') }}</b></p>
                            <p>{{ trans('about.profile-p4') }}</b></p>
                            <p>{{ trans('about.profile-p5') }}</b></p>
                            <p>{{ trans('about.profile-p6') }}</b></p>
                            {{-- <ul>
                                <li class="mb-3">{{ trans('about.profile-l1') }}</li>
                                <li class="mb-3">{{ trans('about.profile-l2') }}</li>
                                <li class="mb-3">{{ trans('about.profile-l3') }}</li>
                                <li class="mb-3">{{ trans('about.profile-l4') }}</li>
                                <li class="mb-3">{{ trans('about.profile-l5') }}</li>
                                <li class="mb-3">{{ trans('about.profile-l6') }}</li>
                            </ul> --}}
                            <p>{{ trans('about.profile-p7') }}</b></p>
                            <p>{{ trans('about.profile-p8') }}</b></p>
                            <p>{{ trans('about.profile-p9') }}</b></p>
                            <h4>{{ trans('about.profile-heading2') }}</h4>
                            <p>{{ trans('about.profile-p10') }}</p>
                            <h4>{{ trans('about.profile-heading3') }}</h4>
                            <p>{{ trans('about.profile-p11') }}</p>
                            <ul>
                                <li class="mb-2">{{ trans('about.profile-p11-li1') }}</li>
                                <li class="mb-2">{{ trans('about.profile-p11-li2') }}</li>
                                <li class="mb-2">{{ trans('about.profile-p11-li3') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
