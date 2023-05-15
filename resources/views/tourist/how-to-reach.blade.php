@extends('layouts.master')

@section('title', '- How to Reach')

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
                            {{ trans('navbar.how-to-reach') }}
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
                        <h2>{{ trans('navbar.how-to-reach') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/reach.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <ul>
                                <li class="mb-3">{{ trans('tourist.reach-l1') }}</li>
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="border-color: #000!important;">
                                        <tbody>
                                            <tr>
                                                <th class="text-center">{{ __('tourist.t1.th1') }}</th>
                                                <th class="text-center">{{ __('tourist.t1.th2') }}</th>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{ __('tourist.t1.tr1.td1') }}</td>
                                                <td class="text-center">{{ __('tourist.t1.tr1.td2') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{ __('tourist.t1.tr2.td1') }}</td>
                                                <td class="text-center">{{ __('tourist.t1.tr2.td2') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{ __('tourist.t1.tr3.td1') }}</td>
                                                <td class="text-center">{{ __('tourist.t1.tr3.td2') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{ __('tourist.t1.tr4.td1') }}</td>
                                                <td class="text-center">{{ __('tourist.t1.tr4.td2') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <li class="mb-3">{{ trans('tourist.reach-l2') }}</li>
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="border-color: #000!important;">
                                        <tbody>
                                            <tr>
                                                <th class="text-center">{{ __('tourist.t2.th1') }}</th>
                                                <th class="text-center">{{ __('tourist.t2.th2') }}</th>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{ __('tourist.t2.tr1.td1') }}</td>
                                                <td class="text-center">{{ __('tourist.t2.tr1.td2') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{ __('tourist.t2.tr2.td1') }}</td>
                                                <td class="text-center">{{ __('tourist.t2.tr2.td2') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{ __('tourist.t2.tr3.td1') }}</td>
                                                <td class="text-center">{{ __('tourist.t2.tr3.td2') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <li class="mb-3">{{ trans('tourist.reach-l3') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Map Section -->
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.0078283511857!2d79.06330621497926!3d23.639890684643998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397f5ad4927af729%3A0x69db6c8d6b6d6e65!2sNauradehi%20Forest%20Sanctuary!5e0!3m2!1sen!2sin!4v1647236120345!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
