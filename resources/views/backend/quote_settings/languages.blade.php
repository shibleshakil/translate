@extends('layouts.backend.app')

@section('title', 'Languages')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">
                <a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-primary">
                    {{ __('Add Languages') }} <i class="feature icon-plus"></i>
                </a>
            </h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item">{{ __('Settings') }}</li>
                    <li class="breadcrumb-item active">{{ __('Languages') }}</li>
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
                            <h4 class="card-title">Languages</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration status-table">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Language</th>
                                                <th>Professionals Status</th>
                                                <th>Quote Status</th>
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
                                                        <td>
                                                            <select name="status" id="status" class=""
                                                            data-url="{{ route('admin.settings.languages.professionalStatus', $data->id) }}" 
                                                            onChange="statusChange(this)">
                                                                <option value="1" {{ $data->professional == "1" ? "selected" : "" }}>
                                                                    {{ __('Active') }}</option>
                                                                <option value="0" {{ $data->professional == "0" ? "selected" : "" }} >
                                                                    {{ __('Deactive') }}</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="status" id="status" class=""
                                                            data-url="{{ route('admin.settings.languages.quoteStatus', $data->id) }}" 
                                                            onChange="statusChange(this)">
                                                                <option value="1" {{ $data->quote == "1" ? "selected" : "" }}>
                                                                    {{ __('Active') }}</option>
                                                                <option value="0" {{ $data->quote == "0" ? "selected" : "" }} >
                                                                    {{ __('Deactive') }}</option>
                                                            </select>
                                                        </td>
                                                        <td>{{ $data->trashed() ? 'In Trash' : 'Active' }}</td>
                                                        <td>
                                                            @if ($data->id == 27)
                                                                Default
                                                            @else
                                                                @if ($data->trashed())
                                                                    <button type="button" class="btn btn-outline-warning" title="Resotre"
                                                                        onclick="restoreData('{{ route('admin.settings.languages.restore', [$data->id]) }}')">
                                                                        <i class="feather icon-rotate-ccw"></i>
                                                                    </button>
                                                                @else
                                                                    <a href="#" data-toggle="modal" data-target="#editModal" class="btn btn-outline-primary"
                                                                    data-target-id="{{$data->id}}" data-title="{{$data->title}}">
                                                                        <i class="feature icon-pencil"></i>
                                                                    </a>
                                                                    <button type="button" class="btn btn-outline-danger" title="Trash"
                                                                        onclick="deleteData('{{ route('admin.settings.languages.delete', [$data->id]) }}')">
                                                                        <i class="feather icon-trash"></i>
                                                                    </button>
                                                                @endif
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
                    <h4 class="modal-title" id="myModalLabel18"> Add New Language</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route ('admin.settings.languages.store') }}" method="post" class="form" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                        <fieldset>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Ex: English">
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
                    <h4 class="modal-title" id="myModalLabel18"> Update Language</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route ('admin.settings.languages.update') }}" method="post" class="form" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">
                        <fieldset>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="etitle" name="title" value="{{ old('title') }}" placeholder="Ex: English">
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

                $('.modal-body #id').val(id);
                $('.modal-body #etitle').val(title);

            });
        });

    </script>
@endsection
