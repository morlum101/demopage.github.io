@extends('layouts.admin.app')

@section('title', 'Admin | Create Barangay')

@section('content')

    {{-- CONTAINER --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.barangays.index') }}">All Barangays</a></li>
                            <li class="breadcrumb-item active">Create Barangay</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <br>
                                @include('layouts.includes.alert')
                                <form action="{{ route('admin.barangays.store') }}" method="post" id="barangay_form">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label">Municipality *</label>
                                        <select class="form-select" name="municipality_id" required>
                                            <option value=""></option>
                                            @foreach ($municipalities as $id => $municipality)
                                                <option value="{{ $id }}"> {{ $municipality }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Barangay *</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary"
                                            onclick="promptStore(event, '#barangay_form')">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 d-none d-lg-block">
                                <img class="img-fluid" src="{{ asset('img/crud/default.svg') }}" alt="manage">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- End CONTAINER --}}

@endsection
