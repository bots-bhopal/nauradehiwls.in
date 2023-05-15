@extends('layouts.master')

@section('title', '- Charges')

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
                            {{ trans('navbar.excursion') }}
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
                        <h2>{{ trans('navbar.excursion') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/excursion.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <p>{{ trans('tourist.charges-p1') }}</p>
                            <h4>{{ trans('tourist.charges-heading1') }}</h4>
                            <ul class="pl-3">
                                <li class="pb-3">{{ trans('tourist.charges-l1') }}</li>
                                <li class="pb-3">{{ trans('tourist.charges-l2') }}</li>
                                <li class="pb-3">{{ trans('tourist.charges-l3') }}</li>
                                <li class="pb-3">{{ trans('tourist.charges-l4') }}</li>
                                <li class="pb-3">{{ trans('tourist.charges-l5') }}</li>
                            </ul>
                            <i>
                                <h3>{{ trans('tourist.charges-heading2') }}</h3>
                            </i>
                            <h4 style="font-size: 16px;">{{ trans('tourist.charges-l6') }}</h4>
                            <h4 style="font-size: 16px;">{{ trans('tourist.charges-l7') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
