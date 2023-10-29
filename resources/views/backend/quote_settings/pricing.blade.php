@extends('layouts.backend.app')

@section('title', 'Pricing')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">
                <a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-primary">
                    {{ __('Add Pricing') }} <i class="feature icon-plus"></i>
                </a>
            </h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item">{{ __('Settings') }}</li>
                    <li class="breadcrumb-item active">{{ __('pricing') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    @include('partials.session_message')
                    <div class="card rounded">
                        <div class="card-header">
                            <h4 class="card-title">Pricing</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Language</th>
                                                <th>Sector</th>
                                                <th>Client Quotation Rate (£)</th>
                                                <th>Client Quotation Min Price (£)</th>
                                                <th>Professionals Rate (£)</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (sizeof ($datas) > 0)
                                                @foreach ($datas as $data)
                                                    <tr>
                                                        <td>{{ ++$sl }}</td>
                                                        <td>{{ $data->language->title ?? ''}}</td>
                                                        <td>{{ $data->sector->title ?? ''}}</td>
                                                        <td>{{ $data->client_rate}}</td>
                                                        <td>{{ $data->client_min_price}}</td>
                                                        <td>{{ $data->professionals_rate}}</td>
                                                        <td>{{ $data->trashed() ? 'In Trash' : 'Active' }}</td>
                                                        <td>
                                                            @if ($data->trashed())
                                                                <button type="button" class="btn btn-outline-warning" title="Resotre"
                                                                    onclick="restoreData('{{ route('admin.settings.pricing.restore', [$data->id]) }}')">
                                                                    <i class="feather icon-rotate-ccw"></i>
                                                                </button>
                                                            @else
                                                                <a href="#" data-toggle="modal" data-target="#editModal" class="btn btn-outline-primary"
                                                                data-target-id="{{$data->id}}" data-language_id="{{$data->language_id}}"
                                                                data-sector_id="{{$data->sector_id}}" data-client_rate="{{$data->client_rate}}"
                                                                data-client_min_price="{{$data->client_min_price}}"
                                                                data-professionals_rate="{{$data->professionals_rate}}">
                                                                    <i class="feature icon-pencil"></i>
                                                                </a>
                                                                <button type="button" class="btn btn-outline-danger" title="Trash"
                                                                    onclick="deleteData('{{ route('admin.settings.pricing.delete', [$data->id]) }}')">
                                                                    <i class="feather icon-trash"></i>
                                                                </button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Add Modal -->
    <div class="modal fade text-left" id="addModal" role="dialog" aria-labelledby="myModalLabel18"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18"> Add New Pricing</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route ('admin.settings.pricing.store') }}" method="post" class="form" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                        <fieldset>
                            <div class="form-group">
                                <label for="client_rate">Language</label>
                                <select name="language_id" id="language_id" class="select2 form-control" style="width: 100%">
                                    <option value="">Select</option>
                                    @foreach ($languages as $lang)
                                        <option value="{{ $lang->id }}" {{ (old('language_id') == $lang->id) ? 'selected' : '' }}>{{ $lang->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="client_rate">Sector</label>
                                <select name="sector_id" id="sector_id" class="select2 form-control" style="width: 100%">
                                    <option value="">Select</option>
                                    @foreach ($sectors as $sec)
                                        <option value="{{ $sec->id }}" {{ (old('sector_id') == $sec->id) ? 'selected' : '' }}>{{ $sec->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="client_rate">Client Quotation Rate (£)</label>
                                <input type="number" class="form-control phone" id="title" name="client_rate"
                                value="{{ old('client_rate') }}" placeholder="Ex: 0.8" min="0" step="any">
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="client_min_price">Client Quotation Min Price (£)</label>
                                <input type="number" class="form-control phone" id="title" name="client_min_price"
                                value="{{ old('client_min_price') }}" placeholder="Ex: 20" min="0" step="any">
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="professionals_rate">Professionals Rate (£)</label>
                                <input type="number" class="form-control phone" id="title" name="professionals_rate"
                                value="{{ old('professionals_rate') }}" placeholder="Ex: 0.4" min="0" step="any">
                            </div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- edit Modal -->
    <div class="modal fade text-left" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18"> Update Pricing</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route ('admin.settings.pricing.update') }}" method="post" class="form" enctype="multipart/form-data">@csrf

                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">
                        <fieldset>
                            <div class="form-group">
                                <label for="client_rate">Language</label>
                                <select name="language_id" id="elanguage_id" class="select2 form-control" style="width: 100%">
                                    <option value="">Select</option>
                                    @foreach ($languages as $lang)
                                        <option value="{{ $lang->id }}" {{ (old('language_id') == $lang->id) ? 'selected' : '' }}>{{ $lang->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="client_rate">Sector</label>
                                <select name="sector_id" id="esector_id" class="select2 form-control" style="width: 100%">
                                    <option value="">Select</option>
                                    @foreach ($sectors as $sec)
                                        <option value="{{ $sec->id }}" {{ (old('sector_id') == $sec->id) ? 'selected' : '' }}>{{ $sec->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="client_rate">Client Quotation Rate (£)</label>
                                <input type="number" class="form-control phone" id="eclient_rate" name="client_rate"
                                value="{{ old('client_rate') }}" placeholder="Ex: 0.8" min="0" step="any">
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="client_min_price">Client Quotation Min Price (£)</label>
                                <input type="number" class="form-control phone" id="eclient_min_price" name="client_min_price"
                                value="{{ old('client_min_price') }}" placeholder="Ex: 20" min="0" step="any">
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="professionals_rate">Professionals Rate (£)</label>
                                <input type="number" class="form-control phone" id="eprofessionals_rate" name="professionals_rate"
                                value="{{ old('professionals_rate') }}" placeholder="Ex: 0.4" min="0" step="any">
                            </div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary submit-btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script type="text/javascript">

        $(document).ready(function () {
            $("#addModal").on("show.bs.modal", function (e) {
                $('.select2').select2();

            });
            $("#editModal").on("show.bs.modal", function (e) {
                $('.select2').select2();
                var id = $(e.relatedTarget).data('target-id');
                var language_id = $(e.relatedTarget).data('language_id');
                var sector_id = $(e.relatedTarget).data('sector_id');
                var client_rate = $(e.relatedTarget).data('client_rate');
                var client_min_price = $(e.relatedTarget).data('client_min_price');
                var professionals_rate = $(e.relatedTarget).data('professionals_rate');

                $('.modal-body #id').val(id);
                $('.modal-body #elanguage_id').val(language_id).change();
                $('.modal-body #esector_id').val(sector_id).change();
                $('.modal-body #eclient_rate').val(client_rate);
                $('.modal-body #eclient_min_price').val(client_min_price);
                $('.modal-body #eprofessionals_rate').val(professionals_rate);

            });
        });

    </script>
@endsection
