@extends('layouts.master')

@section('title', '- Wildlife Census')

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
                            {{ trans('navbar.census') }}
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
                        <h2>{{ trans('navbar.census') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/nwls-imgs/flora.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <h3>{{ trans('bio.census-bird-heading') }}</h3>
                            <p>{{ trans('bio.census-bird-p1') }}</p>
                            <!-- Bird Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered" style="border-color: #000!important;">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">{{ __('bio.tbl1-th1') }}</th>
                                            <th class="text-center">{{ __('bio.tbl1-th2') }}</th>
                                            <th class="text-center">{{ __('bio.tbl1-th3') }}</th>
                                            <th class="text-center">{{ __('bio.tbl1-th4') }}</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl1-tr1-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl1-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl1-tr1-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl1-tr1-td4') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl1-tr2-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl1-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl1-tr2-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl1-tr2-td4') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl1-tr3-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl1-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl1-tr3-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl1-tr3-td4') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3>{{ trans('bio.census-crocodile-heading') }}</h3>
                            <p>{{ trans('bio.census-crocodile-p1') }}</p>
                            <!-- Crocodile Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered" style="border-color: #000!important;">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">{{ __('bio.tbl2-th1') }}</th>
                                            <th class="text-center">{{ __('bio.tbl2-th2') }}</th>
                                            <th class="text-center">{{ __('bio.tbl2-th3') }}</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl2-tr1-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl2-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl2-tr1-td3') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl2-tr2-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl2-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl2-tr2-td3') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3>{{ trans('bio.census-wildlife-heading') }}</h3>
                            <p>{{ trans('bio.census-wildlife-p1') }}</p>
                            <!-- Wildlife Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered" style="border-color: #000!important;">
                                    <tbody>
                                        <tr>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">
                                                {{ __('bio.tbl3-th1') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">
                                                {{ __('bio.tbl3-th2') }}</th>
                                            <th class="text-center" colspan="3">{{ __('bio.tbl3-th3') }}</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">{{ __('bio.tbl3-th4') }}</th>
                                            <th class="text-center">{{ __('bio.tbl3-th5') }}</th>
                                            <th class="text-center">{{ __('bio.tbl3-th6') }}</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl3-tr1-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr1-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr1-td4') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr1-td5') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl3-tr2-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr2-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr2-td4') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr2-td5') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl3-tr3-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr3-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr3-td4') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr3-td5') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl3-tr4-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr4-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr4-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr4-td4') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr4-td5') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl3-tr5-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr5-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr5-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr5-td4') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr5-td5') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl3-tr6-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr6-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr6-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr6-td4') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr6-td5') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl3-tr7-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr7-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr7-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr7-td4') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr7-td5') }}</td>
                                        </tr>
                                        {{-- <tr>
                                            <td class="text-center">{{ __('bio.tbl3-tr8-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr8-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr8-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr8-td4') }}</td>
                                            <td class="text-center">{{ __('bio.tbl3-tr8-td5') }}</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>

                            <h3>{{ trans('bio.census-vulture-heading') }}</h3>
                            <p>{{ trans('bio.census-vulture-p1') }}</p>
                            <!-- Vulture Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered" style="border-color: #000!important;">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">{{ __('bio.tbl4-th1') }}</th>
                                            <th class="text-center">{{ __('bio.tbl4-th2') }}</th>
                                            <th class="text-center">{{ __('bio.tbl4-th3') }}</th>
                                            <th class="text-center">{{ __('bio.tbl4-th4') }}</th>
                                            <th class="text-center">{{ __('bio.tbl4-th5') }}</th>
                                            <th class="text-center">{{ __('bio.tbl4-th6') }}</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl4-tr1-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr1-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr1-td4') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr1-td5') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr1-td6') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl4-tr2-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr2-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr2-td4') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr2-td5') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr2-td6') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('bio.tbl4-tr3-td1') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr3-td3') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr3-td4') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr3-td5') }}</td>
                                            <td class="text-center">{{ __('bio.tbl4-tr3-td6') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
