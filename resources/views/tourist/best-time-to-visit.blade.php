@extends('layouts.master')

@section('title', '- Best tine to visit')

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
                            {{ trans('navbar.best-time-to-visit') }}
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
                        <h2>{{ trans('navbar.best-time-to-visit') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/best-time.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <p><b>{{ trans('tourist.best-h') }}</b></p>
                            <p>{{ trans('tourist.best-p1') }}</p>

                            <div class="table-responsive">
                                <table class="table table-bordered" style="border-color: #000!important;">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">{{ __('tourist.tbl-3.t1.th1') }}</th>
                                            <th class="text-center">{{ __('tourist.tbl-3.t1.th2') }}</th>
                                            <th class="text-center">{{ __('tourist.tbl-3.t1.th3') }}</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center" rowspan="2" style="vertical-align: middle">
                                                {{ __('tourist.tbl-3.tr1.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.tbl-3.tr1.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.tbl-3.tr1.td3') }}</td>
                                        </tr>
                                        <tr>
                                            {{-- <td class="text-center">{{ __('tourist.tbl-3.tr2.td1') }}</td> --}}
                                            <td class="text-center">{{ __('tourist.tbl-3.tr2.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.tbl-3.tr2.td3') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" rowspan="2" style="vertical-align: middle">
                                                {{ __('tourist.tbl-3.tr3.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.tbl-3.tr3.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.tbl-3.tr3.td3') }}</td>
                                        </tr>
                                        <tr>
                                            {{-- <td class="text-center">{{ __('tourist.tbl-3.tr4.td1') }}</td> --}}
                                            <td class="text-center">{{ __('tourist.tbl-3.tr4.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.tbl-3.tr4.td3') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p><b>{{ trans('tourist.best-p2') }}</b></p>
                            <h3>{{ trans('tourist.best-weather-heading') }}</h3>
                            <p>{{ trans('tourist.best-weather-p1') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Service Section -->
@endsection
