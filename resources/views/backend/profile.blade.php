@extends('layouts.backend.app')
@section('title', auth('admin')->user()->name)

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- account setting page start -->
        <section id="page-account-settings">
            <div class="row justify-content-center">
                <!-- right content section -->
                <div class="col-md-6">
                    @include('partials.session_message')
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form clas="form"
                                    action="{{ route('admin.profile') }}"
                                    method="post" enctype="multipart/form-data">@csrf
                                    <div class="media">
                                        <a href="javascript: void(0);">
                                            <img src="{{ auth('admin')->user()->image
                                                ? asset('public/storage/' . auth('admin')->user()->image)
                                                : asset('public/backend/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                                class="rounded mr-75" alt="profile image" height="64" width="64">
                                        </a>
                                        <div class="media-body mt-75">
                                            <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                    for="account-upload">Upload new photo</label>
                                                <input type="file" id="account-upload" hidden name="image">
                                                <button class="btn btn-sm btn-secondary ml-50">Reset</button>
                                            </div>
                                            <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max size of 800kB</small></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="name">{{ __('Name') }}</label>
                                                    <input type="text" class="form-control" id="name"
                                                        name="name" placeholder="{{ __('Name') }}"
                                                        value="{{ $data->name }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="email">{{ __('Email') }}</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="{{ __('Email') }}" value="{{ $data->email }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls position-relative">
                                                    <label for="phone">{{ __('Phone number') }}</label>
                                                    <input type="number" class="form-control phone" id="phone"
                                                        name="phone" placeholder="{{ __('phone') }}"
                                                        value="{{ $data->phone }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                changes</button>
                                            <button type="button" onclick="(location.reload())"
                                                class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- account setting page end -->
    </div>
</div>
@endsection

@section('script')
@endsection
