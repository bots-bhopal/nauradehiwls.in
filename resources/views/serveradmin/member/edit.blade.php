@extends('layouts.backend.master')

@section('title', 'Edit Member')

@push('css')
    <style>
        :root {
            --minimum-width: 300px;
            --ratio: 16/9;
        }

        .card .card-body .image-box img {
            background-color: #ffffff;
            aspect-ratio: var(--ratio);
            object-fit: contain;
            width: 100%;
            height: 100%;
        }

    </style>
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.member-edit-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                href="{{ route('serveradmin.dashboard') }}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.member-edit-h1') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header bg-light d-flex">
                            <div class="card-title">
                                <i class="fas fa-newspaper" style="margin-right: 5px;"></i>
                                {{ __('panel.member-edit-h1') }}
                            </div>

                            <div class="ml-auto">
                                @if ($members->status == '0')
                                    {{ __('panel.member-tbl-status') }} : <span
                                        class="badge rounded-pill pt-1 pb-1 pl-2 pr-2 badge-success">Approved</span>
                                @else
                                    {{ __('panel.member-tbl-status') }} : <span
                                        class="badge rounded-pill pt-1 pb-1 pl-2 pr-2 badge-danger">Pending</span>
                                @endif
                            </div>
                        </div>

                        <form action="{{ route('serveradmin.member.update', $members->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="hidden" class="form-control" id="status" name="status"
                                            value="{{ $members->status }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">{{ __('panel.member-name') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $members->name }}" placeholder="Enter Name Here">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-primary far fa-clipboard copy-button" data-clipboard-target="#name" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard" style="border-top-right-radius: .25rem; border-bottom-right-radius: .25rem;"></button>
                                        </span>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="designation">{{ __('panel.member-designation') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('designation') is-invalid @enderror" id="designation" name="designation" value="{{ $members->designation }}" placeholder="Enter Designation Here">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-primary far fa-clipboard copy-button" data-clipboard-target="#designation" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard" style="border-top-right-radius: .25rem; border-bottom-right-radius: .25rem;"></button>
                                        </span>
                                        @error('designation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="aboutme">{{ __('panel.member-aboutme') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('aboutme') is-invalid @enderror" id="aboutme" name="aboutme" value="{{ $members->about_me }}" placeholder="Enter About Me Here">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-primary far fa-clipboard copy-button" data-clipboard-target="#aboutme" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard" style="border-top-right-radius: .25rem; border-bottom-right-radius: .25rem;"></button>
                                        </span>
                                        @error('aboutme')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <input type="hidden" name="h_image" value="{{ $members->image }}">

                                <div class="form-group">
                                    <label>{{ __('panel.member-image') }}</label>
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input border mb-2 @error('image') is-invalid @enderror"
                                            name="image">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('panel.member-image-file') }}</label>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="nav-icon fa fa-pencil-alt"
                                        style="margin-right: 5px;"></i>{{ __('panel.member-btn-update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header bg-light">
                            <i class="fas fa-image" style="margin-right: 5px;"></i>
                            {{ __('panel.member-image') }}
                        </div>

                        <div class="card-body">
                            @php
                                $path = public_path() . '/storage/member_image/' . $members->image;
                            @endphp

                            @if (!empty($members['image']) && file_exists($path))
                                <img src="{{ asset('public/storage/member_image/' . $members->image) }}" width="100%"
                                    height="100%" class="img-responsive rounded" alt="image">
                            @else
                                <img src="{{ asset('public/assets/images/image-gallery.jpg') }}" width="100%"
                                    height="100%" class="img-responsive rounded" alt="image">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@push('js')
    <script>
        //Initialize Tooltip
        $('[data-toggle=tooltip]').tooltip();
    </script>
@endpush
