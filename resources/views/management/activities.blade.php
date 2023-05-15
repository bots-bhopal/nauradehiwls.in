@extends('layouts.master')

@section('title', '- Management Activities')

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
                            {{ trans('navbar.management-activities') }}
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
                        <h2>{{ trans('navbar.management-activities') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/activities.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <ul>
                                <li class="mb-3">{{ trans('management.obj-l1') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l2') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l3') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l4') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l5') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l6') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l7') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l8') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l9') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l10') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l11') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l12') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l13') }}</li>
                                <li class="mb-3">{{ trans('management.obj-l14') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
