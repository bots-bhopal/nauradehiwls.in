@extends('layouts.master')

@section('title', '- Butterflies')

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
                            {{ trans('navbar.butterflies') }}
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
                        <h2>{{ trans('navbar.butterflies') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <figure>
                            <img src="{{ asset('public/assets/images/nwls-imgs/butterfly.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <h3>{{ trans('bio.butterfly-heading') }}</h3>
                            <p>{{ trans('bio.butterfly-p1') }}</p>
                        </div>
                    </div>

                    <p>
                        <a href="{{ asset('public/assets/images/docs/Butterflies-list-Nauradehi.pdf') }}" target="_blank"
                            class="btn-text green-bg hover-text">Click Here</a>
                        <b>{!! trans('bio.butterfly-p2') !!}</b>
                    </p>

                    <p>
                        <a href="{{ asset('public/assets/images/docs/Butterflies-Survey-Nauradehi.pdf') }}"
                            target="_blank" class="btn-text green-bg hover-text">Click Here</a>
                        <b>{!! trans('bio.butterfly-p3') !!}</b>
                    </p>

                    <div class="full-pic text-center">
                        <figure>
                            <img src="{{ asset('public/assets/images/nwls-imgs/butterfly-img.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
