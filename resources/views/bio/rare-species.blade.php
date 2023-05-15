@extends('layouts.master')

@section('title', '- Rare Species')

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
                            {{ trans('navbar.rare-species') }}
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
                        <h2>{{ trans('navbar.rare-species') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/species.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <p>{{ trans('bio.rare-p1') }}</p>
                            {{-- <p>{{ trans('bio.rare-p2') }}</p>
                        <ul class="pl-3">
                            <li><b>{{ trans('bio.rare-l1') }}</b></li>
                        </ul>
                        <p>{{ trans('bio.rare-p3') }}</p>

                        <ul class="pl-3">
                            <li><b>{{ trans('bio.rare-l2') }}</b></li>
                        </ul>
                        <p>{{ trans('bio.rare-p4') }}</p>

                        <ul class="pl-3">
                            <li><b>{{ trans('bio.rare-l3') }}</b></li>
                        </ul>
                        <p>{{ trans('bio.rare-p5') }}</p>
                        <p>{{ trans('bio.rare-p6') }}</p>

                        <ul class="pl-3">
                            <li><b>{{ trans('bio.rare-l4') }}</b></li>
                        </ul>
                        <p>{{ trans('bio.rare-p7') }}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
