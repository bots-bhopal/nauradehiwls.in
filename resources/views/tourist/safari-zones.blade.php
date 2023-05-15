@extends('layouts.master')

@section('title', '- Safari Zone')

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
                            {{ trans('navbar.safari-zones') }}
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
                        <h2>{{ trans('navbar.safari-zones') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <figure>
                            <img src="{{ asset('public/assets/images/str-imgs/Safari-Zones-and-Charges.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <p>{{ trans('tourist.zone-p1') }}</p>
                            <ul>
                                <li class="pb-2">{{ trans('tourist.zone-l1') }}</li>
                                <li class="pb-2">{{ trans('tourist.zone-l2') }}</li>
                                <li class="pb-2">{{ trans('tourist.zone-l3') }}</li>
                                <li class="pb-2">{{ trans('tourist.zone-l4') }}</li>
                                <li class="pb-2">{{ trans('tourist.zone-l5') }}</li>
                            </ul>

                            <div class="table-responsive">
                                <table class="table table-bordered" style="border-color: #000!important;">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">{{ __('tourist.t2.th1') }}</th>
                                            <th class="text-center">{{ __('tourist.t2.th2') }}</th>
                                            <th class="text-center">{{ __('tourist.t2.th3') }}</th>
                                            <th class="text-center">{{ __('tourist.t2.th4') }}</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t2.tr1.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr1.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr1.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr1.td4') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t2.tr2.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr2.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr2.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr2.td4') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t2.tr3.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr3.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr3.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr3.td4') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t2.tr4.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr4.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr4.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr4.td4') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t2.tr5.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr5.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr5.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr5.td4') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t2.tr6.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr6.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr6.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr6.td4') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t2.tr7.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr7.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr7.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr7.td4') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t2.tr8.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr8.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr8.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t2.tr8.td4') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            {{-- <p>{{ trans('tourist.zone-p2') }}</p>
                        <ul>
                            <li class="pb-2">{{ trans('tourist.zone-l6') }}</li>
                            <li class="pb-2">{{ trans('tourist.zone-l7') }}</li>
                        </ul> --}}

                            {{-- <figure>
                            <img src="{{ asset('public/assets/images/team/zone2.jpg') }}" alt="">
                        </figure> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
