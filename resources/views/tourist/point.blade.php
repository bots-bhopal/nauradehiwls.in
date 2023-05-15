@extends('layouts.master')

@section('title', '- Point of Interests')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.tourist-information') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('nwls.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.tourist-information') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.point') }}
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
                    <x-tourist-sidebar />
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="box-title mb-20">
                        <h2>{{ trans('navbar.point') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/point.jpg') }}" width="100%"
                                        height="600px" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <h3>{{ trans('tourist.point-main-heading1') }}</h3>
                            <ul>
                                <li style="list-style: square; font-size: 24px;">
                                    <h5 style="font-weight: 700;">{{ trans('tourist.point-sub-heading1') }}</h5>
                                    <p style="font-size: 14px;">{{ trans('tourist.point-p1') }}</p>
                                    <p style="font-size: 14px;">{{ trans('tourist.point-p1-child1') }}</p>
                                </li>
                                <li style="list-style: square; font-size: 24px;">
                                    <h5 style="font-weight: 700;">{{ trans('tourist.point-sub-heading2') }}</h5>
                                    <p style="font-size: 14px;">{{ trans('tourist.point-p2') }}</p>
                                </li>
                                <li style="list-style: square; font-size: 24px;">
                                    <h5 style="font-weight: 700;">{{ trans('tourist.point-sub-heading3') }}</h5>
                                    <p style="font-size: 14px;">{{ trans('tourist.point-p3') }}</p>
                                </li>
                            </ul>
                            <h3>{{ trans('tourist.point-main-heading2') }}</h3>
                            <ul>
                                <li style="list-style: square; font-size: 24px;">
                                    <h5 style="font-weight: 700;">{{ trans('tourist.point-sub-heading4') }}</h5>
                                    <p style="font-size: 14px;">{{ trans('tourist.point-p4') }}</p>
                                </li>
                                <li style="list-style: square; font-size: 24px;">
                                    <h5 style="font-weight: 700;">{{ trans('tourist.point-sub-heading5') }}</h5>
                                    <p style="font-size: 14px;">{{ trans('tourist.point-p5') }}</p>
                                </li>
                                <li style="list-style: square; font-size: 24px;">
                                    <h5 style="font-weight: 700;">{{ trans('tourist.point-sub-heading6') }}</h5>
                                    <p style="font-size: 14px;">{{ trans('tourist.point-p6') }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
