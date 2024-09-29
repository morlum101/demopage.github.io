@extends('layouts.admin.app')

@section('title', 'Admin | Manage Patient')

@section('content')

    {{-- CONTAINER --}}
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All Patient</h4>

                    {{-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Welcome !</li>
                        </ol>
                    </div> --}}

                </div>
            </div>
        </div>

        @include('layouts.includes.alert')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a class="float-end btn btn-sm btn-primary me-3" href="{{ route('admin.patients.create') }}">Create
                            Patient +</a><br><br>
                        <div class="table-responsive">
                            <table class="table table-flush table-hover patient_dt">
                                <caption>List of Patient</caption>
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Gender</th>
                                        <th>Registered At</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Display patients --}}
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End CONTAINER --}}

@endsection
