@extends('layouts.user.app')
@section('title', auth('user')->user()->fname)

@section('content')
<div class="content-wrapper">
    <div class="content-body">
        <!-- users edit start -->
        <section class="users-edit">
            @include('partials.session_message')
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <!-- users edit account form start -->
                        <form class="form" method="post" action="{{ route ('user.profile.basicInfo') }}" enctype="multipart/form-data">@csrf
                            <!-- users edit media object start -->
                            <div class="media">
                                <a href="javascript: void(0);">
                                    <img src="{{ $data->image
                                        ? asset('public/storage/' . $data->image)
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
                                <div class="col-md-6 form-group">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="fname" placeholder="First Name" value="{{ $data->fname }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name" value="{{ $data->lname }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Phone Number <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control phone" name="phone" placeholder="Last Name" value="{{ $data->phone }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>E-mail <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $data->email }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Date of Birth <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="dob" placeholder="dob" value="{{ $data->dob }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>City of Residence <span class="text-danger">*</span></label>
                                    <select class="select2 form-control" name="city_id">
                                        <option value="">Select</option>
                                        @foreach ($cities as $type)
                                            <option value="{{ $type->id }}" {{ ($type->id == $data->city_id) ? 'selected' : '' }}>{{ $type->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                        changes</button>
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit account form ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- users edit ends -->
    </div>
</div>
@endsection

@section('script')

    <script type="text/javascript">

    </script>

@endsection
