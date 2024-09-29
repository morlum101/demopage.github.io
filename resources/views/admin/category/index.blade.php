@extends('layouts.admin.app')

@section('title', 'Admin | Manage Category')

@section('content')

    {{-- CONTAINER --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All Category</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a class="float-end btn btn-sm btn-primary me-3" href="javascript:void(0)"
                            onclick="toggle_modal('#m_category', '.category_form', ['#m_category_title','Add Category'], ['.btn_add_category','.btn_update_category'])">Create
                            Category +</a><br><br>
                        <div class="table-responsive">
                            <table class="table table-flush table-hover category_dt">
                                <caption>List of Category</caption>
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Display Categories --}}
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
