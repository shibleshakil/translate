@extends('layouts.user.app')
@section('title', __('Change Password'))
@push('css_or_js')
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body blank-page blank-page">
        <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-content">
                            <div class="card-header border-0">
                                <h3 class="card-title text-center">
                                    <span>Change password to keep your account secure</span></h3>
                            </div>
                            <div class="card-body">
                                @include('partials.session_message')
                                <form class="form-horizontal form-simple" action="{{ route ('user.password.update')}}" method="post">@csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="password">New Password <span class="text-danger">* <small>(password must be at least 5 characters)</small></span></label>
                                            <input type="password" name="password" id="password" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Confirm Password <span class="text-danger">*</span></label>
                                            <input type="password" name="password_confirmation" id="password-confirm" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <i class="feather icon-unlock"></i> Change Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('script')
@endsection
