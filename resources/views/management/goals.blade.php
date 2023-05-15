@extends('layouts.master')

@section('title', '- Management Goals')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.nwls-management') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('nwls.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.nwls-management') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.goals-objectivies') }}
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
                    <x-management-sidebar />
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="box-title mb-20">
                        <h2>{{ trans('navbar.goals-objectivies') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure class="image">
                                    <img src="{{ asset('public/assets/images/nwls-imgs/goals.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="text-box mt-40">
                        <div class="text-content text-justify">

                            <p><b>{{ trans('management.vision-h') }}</b></p>
                            <p>{{ trans('management.vision-p1') }}</p>

                            <p><b>{{ trans('management.goals-h') }}</b></p>
                            <ul>
                                <li class="pb-2">{{ trans('management.goals-l1') }}</li>
                                <li class="pb-2">{{ trans('management.goals-l2') }}</li>
                                <li class="pb-2">{{ trans('management.goals-l3') }}</li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
