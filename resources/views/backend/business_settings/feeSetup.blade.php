@extends('layouts.backend.app')
@section('title', __('Fee Setup'))

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">{{ __('Fee Setup') }}</h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Fee Setup') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-body">
        @include('backend.business_settings.top_nav')

        @php
            // $cash_in_charge = 0;
            // $cash_in_charge = \App\Helpers\Common::get_business_settings('cash_in_charge');
            // $send_money_charge = 0;
            // $send_money_charge = \App\Helpers\Common::get_business_settings('send_money_charge');
            // $savings_charge = 0;
            // $savings_charge = \App\Helpers\Common::get_business_settings('savings_charge');
            // $loan_charge = 0;
            // $loan_charge = \App\Helpers\Common::get_business_settings('loan_charge');
            // $withdrawal_charge = 0;
            // $withdrawal_charge = \App\Helpers\Common::get_business_settings('withdrawal_charge');
        @endphp

        <section id="general-info">
            <div class="card rounded">
                @include('partials.session_message')
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form class="form" action="{{ route('admin.business_settings.feeSetup') }}" method="post"
                            enctype="multipart/form-data">@csrf
                            <div class="form-body">
                                <h4 class="form-section"><i class="feather icon-grid"></i>
                                    {{ __('Setup System Fees') }}
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="font-weight-bold">{{ __('Cash In Charge') }}</h5>
                                        <div class="row border-1">
                                            <div class="form-group col-md-6">
                                                <label for="cash_in_charge_type">{{ __('Charge Type') }} <span class="text-danger">*</span></label>
                                                <select name="cash_in_charge_type" id="cash_in_charge_type" class="form-control select" required>
                                                    <option value="fixed" {{ ($cash_in_charge['type'] ?? '') == 'fixed' ? 'selected' : '' }}>{{ __('Fixed') }}</option>
                                                    <option value="percent" {{ ($cash_in_charge['type'] ?? '') == 'percent' ? 'selected' : '' }}>{{ __('Percent') }}</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="cash_in_charge_amount">{{ __('Amount') }} <span class="text-danger">*</span></label>
                                                <input type="number" min="0" step="0.01" id="cash_in_charge_amount" class="form-control phone"
                                                    placeholder="Ex: #" name="cash_in_charge_amount" value="{{ $cash_in_charge['amount']??0.00 }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="font-weight-bold">{{ __('Send Money Charge') }}</h5>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="send_money_charge_type">{{ __('Charge Type') }} <span class="text-danger">*</span></label>
                                                <select name="send_money_charge_type" id="send_money_charge_type" class="form-control select" required>
                                                    <option value="fixed" {{ ($send_money_charge['type'] ?? '') == 'fixed' ? 'selected' : '' }}>{{ __('Fixed') }}</option>
                                                    <option value="percent" {{ ($send_money_charge['type'] ?? '') == 'percent' ? 'selected' : '' }}>{{ __('Percent') }}</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="send_money_charge_amount">{{ __('Send Money Charge') }}  <span class="text-danger">*</span></label>
                                                <input type="number" min="0" step="0.01" id="send_money_charge_amount" class="form-control phone"
                                                    placeholder="Ex: #" name="send_money_charge_amount" value="{{ $send_money_charge['amount']??0.00 }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="font-weight-bold">{{ __('Savings Charge') }}</h5>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="savings_charge_type">{{ __('Charge Type') }} <span class="text-danger">*</span></label>
                                                <select name="savings_charge_type" id="savings_charge_type" class="form-control select" required>
                                                    <option value="fixed" {{ ($savings_charge['type'] ?? '') == 'fixed' ? 'selected' : '' }}>{{ __('Fixed') }}</option>
                                                    <option value="percent" {{ ($savings_charge['type'] ?? '') == 'percent' ? 'selected' : '' }}>{{ __('Percent') }}</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="savings_charge_amount">{{ __('Savings Charge') }}  <span class="text-danger">*</span></label>
                                                <input type="number" min="0" step="0.01" id="savings_charge_amount" class="form-control phone"
                                                    placeholder="Ex: #" name="savings_charge_amount" value="{{ $savings_charge['amount']??0.00 }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="font-weight-bold">{{ __('Loan Charge') }}</h5>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="loan_charge_type">{{ __('Charge Type') }} <span class="text-danger">*</span></label>
                                                <select name="loan_charge_type" id="loan_charge_type" class="form-control select" required>
                                                    <option value="fixed" {{ ($loan_charge['type'] ?? '') == 'fixed' ? 'selected' : '' }}>{{ __('Fixed') }}</option>
                                                    <option value="percent" {{ ($loan_charge['type'] ?? '') == 'percent' ? 'selected' : '' }}>{{ __('Percent') }}</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="loan_charge_amount">{{ __('Loan Charge') }}  <span class="text-danger">*</span></label>
                                                <input type="number" min="0" step="0.01" id="loan_charge_amount" class="form-control phone"
                                                    placeholder="Ex: #" name="loan_charge_amount" value="{{ $loan_charge['amount']??0.00 }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="font-weight-bold">{{ __('Withdrawal Charge') }}</h5>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="withdrawal_charge_type">{{ __('Charge Type') }} <span class="text-danger">*</span></label>
                                                <select name="withdrawal_charge_type" id="withdrawal_charge_type" class="form-control select" required>
                                                    <option value="fixed" {{ ($withdrawal_charge['type'] ?? '') == 'fixed' ? 'selected' : '' }}>{{ __('Fixed') }}</option>
                                                    <option value="percent" {{ ($withdrawal_charge['type'] ?? '') == 'percent' ? 'selected' : '' }}>{{ __('Percent') }}</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="withdrawal_charge_amount">{{ __('Withdrawal Charge') }}  <span class="text-danger">*</span></label>
                                                <input type="number" min="0" step="0.01" id="withdrawal_charge_amount" class="form-control phone"
                                                    placeholder="Ex: #" name="withdrawal_charge_amount" value="{{ $withdrawal_charge['amount']??0.00 }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="font-weight-bold">{{ __('Stripe Charges') }}</h5>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="fixed_amount">{{ __('Stripe Fixed Charge') }} <span class="text-danger">*</span></label>
                                                <input type="number" min="0" step="0.01" id="fixed_amount" class="form-control phone"
                                                    placeholder="Ex: #" name="stripe_fixed_amount" value="{{ $stripe_charge['fixed_amount']??0.00 }}" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="transaction_percentage">{{ __('Transaction Charges(%)') }}  <span class="text-danger">*</span></label>
                                                <input type="number" min="0" step="0.01" id="transaction_percentage" class="form-control phone"
                                                    placeholder="Ex: #" name="stripe_transaction_percentage" value="{{ $stripe_charge['transaction_percentage']??0.00 }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check-square-o"></i> Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('script')
@endsection
