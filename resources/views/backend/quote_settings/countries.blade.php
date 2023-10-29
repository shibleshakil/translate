@extends('layouts.backend.app')

@section('title', 'Countries')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">
                <a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-primary">
                    {{ __('Add Country') }} <i class="feature icon-plus"></i>
                </a>
            </h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item">{{ __('Settings') }}</li>
                    <li class="breadcrumb-item active">{{ __('Countries') }}</li>
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
                            <h4 class="card-title">Countries</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Country</th>
                                                <th>ISO</th>
                                                <th>ISO 3</th>
                                                <th>Phone Code</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (sizeof ($datas) > 0)
                                            @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ ++$sl }}</td>
                                                <td>{{ $data->nicename}}</td>
                                                <td>{{ $data->iso}}</td>
                                                <td>{{ $data->iso3}}</td>
                                                <td>{{ $data->phonecode}}</td>
                                                <td>{{ $data->trashed() ? 'In Trash' : 'Active' }}</td>
                                                <td>
                                                    @if ($data->trashed())
                                                    <button type="button" class="btn btn-outline-warning"
                                                        title="Resotre"
                                                        onclick="restoreData('{{ route('admin.settings.countries.restore', [$data->id]) }}')">
                                                        <i class="feather icon-rotate-ccw"></i>
                                                    </button>
                                                    @else
                                                    <a href="#" data-toggle="modal" data-target="#editModal"
                                                        class="btn btn-outline-primary" data-target-id="{{$data->id}}"
                                                        data-iso="{{$data->iso}}" data-nicename="{{$data->nicename}}"
                                                        data-iso3="{{$data->iso3}}" data-numcode="{{$data->numcode}}"
                                                        data-phonecode="{{$data->phonecode}}">
                                                        <i class="feature icon-pencil"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-outline-danger" title="Trash"
                                                        onclick="deleteData('{{ route('admin.settings.countries.delete', [$data->id]) }}')">
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18"> Add New Country</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route ('admin.settings.countries.store') }}" method="post" class="form"
                    enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nicename">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nicename" name="nicename"
                                        value="{{ old('nicename') }}" placeholder="Ex: England" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="iso">ISO Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="iso" name="iso" value="{{ old('iso') }}"
                                        placeholder="Ex: England" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="iso3">ISO 3 Code</label>
                                    <input type="text" class="form-control" id="iso3" name="iso3"
                                        value="{{ old('iso3') }}" placeholder="Ex: England">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phonecode">Phone Code</label>
                                    <input type="number" class="form-control phone" id="phonecode" name="phonecode"
                                        value="{{ old('phonecode') }}" placeholder="Ex: England">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="numcode">Num Code</label>
                                    <input type="number" class="form-control phone" id="numcode" name="numcode"
                                        value="{{ old('numcode') }}" placeholder="Ex: England">
                                </div>
                            </div>
                        </div>
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18"> Update Country</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route ('admin.settings.countries.update') }}" method="post" class="form"
                    enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nicename">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="enicename" name="nicename"
                                        value="{{ old('nicename') }}" placeholder="Ex: England" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="iso">ISO Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="eiso" name="iso"
                                        value="{{ old('iso') }}" placeholder="Ex: England" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="iso3">ISO 3 Code</label>
                                    <input type="text" class="form-control" id="eiso3" name="iso3"
                                        value="{{ old('iso3') }}" placeholder="Ex: England">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phonecode">Phone Code</label>
                                    <input type="number" class="form-control phone" id="ephonecode" name="phonecode"
                                        value="{{ old('phonecode') }}" placeholder="Ex: England">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="numcode">Num Code</label>
                                    <input type="number" class="form-control phone" id="enumcode" name="numcode"
                                        value="{{ old('numcode') }}" placeholder="Ex: England">
                                </div>
                            </div>
                        </div>
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
            var iso = $(e.relatedTarget).data('iso');
            var nicename = $(e.relatedTarget).data('nicename');
            var iso3 = $(e.relatedTarget).data('iso3');
            var numcode = $(e.relatedTarget).data('numcode');
            var phonecode = $(e.relatedTarget).data('phonecode');

            $('.modal-body #id').val(id);
            $('.modal-body #eiso').val(iso);
            $('.modal-body #enicename').val(nicename);
            $('.modal-body #eiso3').val(iso3);
            $('.modal-body #enumcode').val(numcode);
            $('.modal-body #ephonecode').val(phonecode);

        });
    });

</script>
@endsection