@extends('layouts.master')

@section('title', '- Location')

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
                            {{ trans('navbar.location') }}
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
                        <h2>{{ trans('navbar.location') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <figure>
                            <img src="{{ asset('public/assets/images/str-imgs/Location.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <p>{{ trans('tourist.location-p1') }}</p>
                            <ul>
                                <li class="mb-3">{{ trans('tourist.location-p1-l1') }}</li>
                                <li class="mb-3">{{ trans('tourist.location-p1-l2') }}</li>
                            </ul>
                            <p>{{ trans('tourist.location-p2') }}</p>
                            {{-- <figure>
                            <img src="{{ asset('public/assets/images/team/1 - Location Map.jpg') }}" alt="">
                        </figure> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
