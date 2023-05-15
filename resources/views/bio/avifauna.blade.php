@extends('layouts.master')

@section('title', '- Avifauna')

@push('css')
    <style>
        .green-bg:hover {
            color: #1c8d34;
        }

    </style>
@endpush

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
                            {{ trans('navbar.avifauna') }}
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
                        <h2>{{ trans('navbar.avifauna') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/fauna.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <p>{{ trans('bio.avifauna-p1') }}</p>
                            <ul>
                                <li class="pb-2">{{ trans('bio.avifauna-l1') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l2') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l3') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l4') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l5') }}</li>
                            </ul>
                            <p>{{ trans('bio.avifauna-p2') }}</p>
                            <h4>{{ trans('bio.avifauna-heading') }}</h4>
                            <ul>
                                <li class="pb-2">{{ trans('bio.avifauna-l6') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l7') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l8') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l9') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l10') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l11') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l12') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l13') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l14') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l15') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l16') }}</li>
                                <li class="pb-2">{{ trans('bio.avifauna-l17') }}</li>
                            </ul>

                            <p>
                                <a href="{{ asset('public/assets/images/docs/Nauradehi-WLS-Bird-Survey-Report-2021-Jan.pdf') }}"
                                    target="_blank" class="btn-text green-bg hover-text">Click Here</a>
                                {!! trans('bio.avifauna-p3') !!}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
