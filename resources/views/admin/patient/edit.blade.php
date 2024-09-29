@extends('layouts.admin.app')

@section('title', 'Admin | Edit Patient')

@section('content')

    {{-- CONTAINER --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.patients.index') }}">All Patient</a></li>
                            <li class="breadcrumb-item active">Edit Patient</li>
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
                                <form class="row" action="{{ route('admin.patients.update', $patient) }}" method="post"
                                    id="patient_form">
                                    @csrf @method('PUT')
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">First Name *</label>
                                            <input type="text" class="form-control" name="first_name"
                                                value="{{ $patient->first_name }}" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Middle Name *</label>
                                            <input type="text" class="form-control" name="middle_name"
                                                value="{{ $patient->middle_name }}" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Last Name *</label>
                                            <input type="text" class="form-control" name="last_name"
                                                value="{{ $patient->last_name }}" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Gender *</label>
                                            <select class="form-control" name="gender">
                                                <option value=""></option>
                                                <option value="male" @if ($patient->gender === 'male') selected @endif>
                                                    Male</option>
                                                <option value="female" @if ($patient->gender === 'female') selected @endif>
                                                    Female</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Birth Date *</label>
                                            <input type="date" max="2008-01-01" class="form-control" name="birth_date"
                                                value="{{ formatDate($patient->birth_date, 'dateInput') }}" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Address *</label>
                                            <input type="text" class="form-control" name="address"
                                                value="{{ $patient->address }}" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Contact *</label>
                                            <input type="number" class="form-control" min="0" name="contact"
                                                value="{{ $patient->contact }}" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Email *</label>
                                            <input type="email" class="form-control" name="email"
                                                value="email@email.com" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary"
                                            onclick="promptUpdate(event, '#patient_form')">Save</button>
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

@section('script')
    <script>
        $("#appointment_nav").addClass("active");
        $("#patient_nav").addClass("text-primary");
    @endsection
