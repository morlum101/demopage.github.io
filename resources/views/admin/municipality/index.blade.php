@extends('layouts.admin.app')

@section('title', 'Admin | Manage Municipality')

@section('content')

    {{-- CONTAINER --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All Municipality</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a class="float-end btn btn-sm btn-primary me-3" href="javascript:void(0)"
                            onclick="toggle_modal('#m_municipality', '.municipality_form', ['#m_municipality_title','Add Municipality'], ['.btn_add_municipality','.btn_update_municipality'])">Create
                            Municipality +</a><br><br>
                        <div class="table-responsive">
                            <table class="table table-flush table-hover municipality_dt">
                                <caption>List of Municipality</caption>
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Municipality</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Display Municipalities --}}
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
