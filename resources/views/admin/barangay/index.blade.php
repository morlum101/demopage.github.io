@extends('layouts.admin.app')

@section('title', 'Admin | Manage Barangay')

@section('content')

    {{-- CONTAINER --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All Barangay</h4>
                </div>
            </div>
        </div>
        @include('layouts.includes.alert')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a class="float-end btn btn-sm btn-primary me-3" href="{{ route('admin.barangays.create') }}">Create
                            Barangay +</a><br><br>
                        <div class="table-responsive">
                            <table class="table table-flush table-hover barangay_dt">
                                <caption>List of Barangay</caption>
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Barangay</th>
                                        <th>Municipality</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Display Barangay --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End CONTAINER --}}

@endsection
