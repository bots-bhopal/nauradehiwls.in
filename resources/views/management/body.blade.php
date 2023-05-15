@extends('layouts.master')

@push('css')
    <style>
        :root {
            --minimum-width: 300px;
            --ratio: 16/9;
        }

        .user-image-box img {
            background-color: #f0f0f0;
            aspect-ratio: var(--ratio);
            object-fit: contain;
            width: 100%;
            height: 100%;
            border-radius: 100%;
        }

        .custom-padding{
            padding: 70px 20px 20px 20px;
        }

        .padding-card{
            padding-top: 90px;
            padding-bottom: 0px;
        }

        .client-avtar {
            position: absolute;
            left: 50%;
            margin-left: -60px;
            top: -70px;
            width: 120px;
            height: 120px;
            border: 2px solid #1c8d34;
            border-radius: 100%;
            box-shadow: rgb(99 99 99 / 20%) 0 0px 8px 0;
        }

        .about-block {
            border-radius: 4px;
            box-shadow: rgb(99 99 99 / 20%) 0 2px 8px 0;
            -webkit-transition: all 0.4s linear 0s;
            -ms-transition: all 0.4s linear 0s;
            transition: all 0.4s linear 0s;
        }
    </style>
@endpush

@section('title', '- Administrative Body')

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
                            {{ trans('navbar.administrative-body') }}
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
                        <h2>{{ trans('navbar.administrative-body') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/team/administrative.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    @forelse($members as $member)
                        <div id="testimonial-section" class="padding-card">
                            <div class="container">
                                <div class="row mt-60">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="about-block gray-bg custom-padding clearfix">
                                            <div class="client-avtar user-image-box">
                                                @php
                                                    $path = public_path() . '/storage/member_image/' . $member->image;
                                                @endphp

                                                @if (!empty($member['image']) && file_exists($path))
                                                    <img src="{{ asset('public/storage/member_image/' . $member->image) }}">
                                                @else
                                                    <img src="{{ asset('public/assets/images/emp-avatar.png') }}" class="img-responsive">
                                                @endif
                                            </div>
                                            <div class="box-title text-center">
                                                    <h3>{{ $member->name }}</h3>
                                                    <span class="right badge rounded-pill badge-success pt-1 pb-1 pl-2 pr-2" style="font-size: 14px;">{{ $member->designation }}</span>
                                                </div>
                                            <div class="text-box">
                                                <div class="text-content">
                                                    <p class="mt-1 mb-0 text-justify">
                                                       {{ $member->about_me }}
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse


                    {{-- <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <p>{{ trans('management.body-p1') }}</p>
                            <figure>
                                <img src="{{ asset('public/assets/images/team/organization-chart.png') }}"
                                    class="img-fluid">
                            </figure>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
