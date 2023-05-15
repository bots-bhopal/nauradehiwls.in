@extends('layouts.master')

@section('title', '- Gallery')

@push('css')
    <style>
        :root {
            --minimum-width: 300px;
            --ratio: 16/9;
        }

        .image-box {
            height: 250px;
            position: relative;
        }

        .image-box img {
            height: 250px;
        }

        img.lazy-image.loaded {
            background-image: none;
        }

        .image-box img {
            background: rgba(163, 163, 163, 0.23);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(2.7px);
            -webkit-backdrop-filter: blur(2.7px);
            border: 1px solid rgba(163, 163, 163, 0.17);
            aspect-ratio: var(--ratio);
            object-fit: contain;
            width: 100%;
        }
    </style>
@endpush

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.gallery') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('nwls.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.gallery') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

    <!-- Work Section -->
    <section id="work" class="padding">
        <div class="container">
            <div class="row container-grid nf-col-3 mb-4">
                @forelse($images as $image)
                    <div class="nf-item branding coffee spacing">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ asset('public/storage/gallery/' . $image->filename) }}" class="lightbox-image"
                                    data-fancybox="products"><img class="lazy-image"
                                        src="{{ asset('public/storage/gallery/' . $image->filename) }}"
                                        alt="{{ $image->original_filename }}"></a>
                            </figure>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center" style="font-weight: 600;">{{ trans('home.gallery-not-found') }}</h2>
                    </div>
                @endforelse
            </div>

            <!-- Pagination Section Start Here -->
            <div class="d-flex justify-content-center">
                {!! $images->links() !!}
            </div>
            <!-- Pagination Section End Here -->
        </div>
    </section>
    <!-- Work Section End -->
@endsection
