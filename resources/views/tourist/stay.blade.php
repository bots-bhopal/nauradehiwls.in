@extends('layouts.master')

@section('title', '- Stay')

@push('css')
    <style>
        table.table-bordered {
            border: 1px solid #000;
            margin-top: 20px;
        }

        table.table-bordered>thead>tr>th {
            border: 1px solid #000;
        }

        table.table-bordered>tbody>tr>th {
            border: 1px solid #000;
        }

        table.table-bordered>tbody>tr>td {
            border: 1px solid #000;
        }

    </style>
@endpush

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
                            {{ trans('navbar.stay') }}
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
                        <h2>{{ trans('navbar.stay') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/stay.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <p>{{ trans('tourist.stay-p1') }}</p>
                            <!--<p>{{ trans('tourist.stay-p2') }}</p>-->
                            <p>{{ trans('tourist.stay-p3') }}</p>
                            <h4>{{ trans('tourist.stay-heading1') }}</h4>
                            <h4>{{ trans('tourist.stay-heading2') }}</h4>
                            <h4>{{ trans('tourist.stay-contact') }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
