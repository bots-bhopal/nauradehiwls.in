@extends('layouts.master')

@section('title', '- Do and Donts')

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
                            {{ trans('navbar.dos') }}
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
                        <h2>{{ trans('dos.do') }}<span>{{ trans('dos.and') }}</span>{{ trans('dos.dont') }}</h2>
                        {{-- <span class="b-line"></span> --}}
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/dos.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <ul class="pl-3">
                                <li class="pb-3">{{ trans('tourist.dos-dont-l1') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l2') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l3') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l4') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l5') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l6') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l7') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l8') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l9') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l10') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l11') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l12') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l13') }}</li>
                                <li class="pb-3">{{ trans('tourist.dos-dont-l14') }}</li>
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12" style="border:1px dotted grey;">
                            <h4 class="text-center">{{ trans('tourist.dos-h4') }}</h4>
                            <hr>
                            <ul>
                                <li>{{ trans('tourist.dos-l1') }}</li>
                                <li>{{ trans('tourist.dos-l2') }}</li>
                                <li>{{ trans('tourist.dos-l3') }}</li>
                                <li>{{ trans('tourist.dos-l4') }}</li>
                                <li>{{ trans('tourist.dos-l5') }}</li>
                                <li>{{ trans('tourist.dos-l6') }}</li>
                                <li>{{ trans('tourist.dos-l7') }}</li>
                                <li>{{ trans('tourist.dos-l8') }}</li>
                                <li>{{ trans('tourist.dos-l9') }}</li>
                                <li>{{ trans('tourist.dos-l10') }}</li>
                                <li>{{ trans('tourist.dos-l11') }}</li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12" style="border:1px dotted grey;">
                            <h4 class="text-center">{{ trans('tourist.dnt-h4') }}</h4>
                            <hr>
                            <ul>
                                <li>{{ trans('tourist.dnt-l1') }}</li>
                                <li>{{ trans('tourist.dnt-l2') }}</li>
                                <li>{{ trans('tourist.dnt-l3') }}</li>
                                <li>{{ trans('tourist.dnt-l4') }}</li>
                                <li>{{ trans('tourist.dnt-l5') }}</li>
                                <li>{{ trans('tourist.dnt-l6') }}</li>
                                <li>{{ trans('tourist.dnt-l7') }}</li>
                                <li>{{ trans('tourist.dnt-l8') }}</li>
                                <li>{{ trans('tourist.dnt-l9') }}</li>
                                <li>{{ trans('tourist.dnt-l10') }}</li>
                                <li>{{ trans('tourist.dnt-l11') }}</li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Service Section -->
@endsection
