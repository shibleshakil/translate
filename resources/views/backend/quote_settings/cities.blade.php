@extends('layouts.backend.app')

@section('title', 'Cities')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">
                <a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-primary">
                    {{ __('Add City') }} <i class="feature icon-plus"></i>
                </a>
            </h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item">{{ __('Settings') }}</li>
                    <li class="breadcrumb-item active">{{ __('Cities') }}</li>
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
                            <h4 class="card-title">Cities</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>City</th>
                                                <th>Zip Code</th>
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (sizeof ($datas) > 0)
                                                @foreach ($datas as $data)
                                                    <tr>
                                                        <td>{{ ++$sl }}</td>
                                                        <td>{{ $data->title}}</td>
                                                        <td>{{ $data->zip_code}}</td>
                                                        <td>{{ $data->country->name ?? ''}}</td>
                                                        <td>{{ $data->trashed() ? 'In Trash' : 'Active' }}</td>
                                                        <td>
                                                            @if ($data->trashed())
                                                                <button type="button" class="btn btn-outline-warning" title="Resotre"
                                                                    onclick="restoreData('{{ route('admin.settings.cities.restore', [$data->id]) }}')">
                                                                    <i class="feather icon-rotate-ccw"></i>
                                                                </button>
                                                            @else
                                                                <a href="#" data-toggle="modal" data-target="#editModal" class="btn btn-outline-primary"
                                                                data-target-id="{{$data->id}}" data-title="{{$data->title}}"
                                                                data-country="{{$data->country_id}}" data-zip_code="{{$data->zip_code}}">
                                                                    <i class="feature icon-pencil"></i>
                                                                </a>
                                                                <button type="button" class="btn btn-outline-danger" title="Trash"
                                                                    onclick="deleteData('{{ route('admin.settings.cities.delete', [$data->id]) }}')">
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
    <div class="modal fade text-left" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18"> Add New City</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route ('admin.settings.cities.store') }}" method="post" class="form" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                        <fieldset>
                            <div class="form-group">
                                <label for="country">Country <span class="text-danger"></span></label>
                                <select name="country" id="country" class="select2 form-control" style="width: 100%;">
                                    <option value="">Select</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" 
                                        {{ (old('country') == $country->id) ? 'selected' : '' }} >
                                        {{ $country->nicename }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="title">City Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Ex: London">
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="zip_code">Zip code</label>
                                <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ old('zip_code') }}" 
                                placeholder="Ex: 1001">
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
                    <h4 class="modal-title" id="myModalLabel18"> Update City</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route ('admin.settings.cities.update') }}" method="post" class="form" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">
                        <fieldset>
                            <div class="form-group">
                                <label for="country">Country <span class="text-danger"></span></label>
                                <select name="country" id="ecountry" class="select2 form-control" style="width: 100%;">
                                    <option value="">Select</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" 
                                        {{ (old('country') == $country->id) ? 'selected' : '' }} >
                                        {{ $country->nicename }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="title">City Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="etitle" name="title" value="{{ old('title') }}" placeholder="Ex: London">
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="zip_code">Zip code</label>
                                <input type="text" class="form-control" id="ezip_code" name="zip_code" value="{{ old('zip_code') }}" 
                                placeholder="Ex: 1001">
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
            $("#editModal").on("show.bs.modal", function (e) {
                var id = $(e.relatedTarget).data('target-id');
                var title = $(e.relatedTarget).data('title');
                var country = $(e.relatedTarget).data('country');
                var zip_code = $(e.relatedTarget).data('zip_code');

                $('.modal-body #id').val(id);
                $('.modal-body #etitle').val(title);
                $('.modal-body #ecountry').val(country).change();
                $('.modal-body #ezip_code').val(zip_code);

            });
        });

    </script>
@endsection
