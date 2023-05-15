@extends('layouts.master')

@section('title', '- Flora')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.bio-diversity') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('nwls.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.bio-diversity') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.flora') }}
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
                    <x-bio-sidebar />
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="box-title mb-20">
                        <h2>{{ trans('navbar.flora') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/flora.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <p>{{ trans('bio.flora-p1') }}</p>
                            <p>{{ trans('bio.flora-p') }}</p>
                            <h4>{{ trans('bio.flora-heading') }}</h4>
                            <ul>
                                <li class="mb-3">{{ trans('bio.flora-l1') }}</li>
                                <li class="mb-3">{{ trans('bio.flora-l2') }}</li>
                                <li class="mb-3">{{ trans('bio.flora-l3') }}</li>
                                <li class="mb-3">{{ trans('bio.flora-l4') }}</li>
                                <li class="mb-3">{{ trans('bio.flora-l5') }}</li>
                                <li class="mb-3">{{ trans('bio.flora-l6') }}</li>
                            </ul>
                            <p>{{ trans('bio.flora-p2') }}</p>
                            <h3>{{ trans('bio.flora-heading2') }}</h3>
                            <p>{{ trans('bio.flora-p3') }}</p>
                            <p>{{ trans('bio.flora-p4') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
