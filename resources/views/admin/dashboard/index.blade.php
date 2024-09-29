@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        {{-- Display Totals --}}
        {{-- <div class="row">
            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Active User</span>
                                <h4 class="mb-3">
                                    $<span class="counter-value" data-target="354.5">0</span>k
                                </h4>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+$20.9k</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div>
                            </div>

                            <div class="flex-shrink-0 text-end dash-widget">
                                <div id="mini-chart1" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts">
                                </div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total In-Active User</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="1256">0</span>
                                </h4>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-danger text-danger">-29 Trades</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 text-end dash-widget">
                                <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts">
                                </div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Average
                                    Sales</span>
                                <h4 class="mb-3">
                                    $<span class="counter-value" data-target="7.54">0</span>M
                                </h4>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+ $2.8k</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 text-end dash-widget">
                                <div id="mini-chart3" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts">
                                </div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Order
                                    Delivery</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="18.34">0</span>%
                                </h4>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+5.32%</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 text-end dash-widget">
                                <div id="mini-chart4" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts">
                                </div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div> --}}

        {{-- Row 1 --}}
        {{-- <div class="row">
            <div class="col-12 col-md-4 d-flex align-self-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class=" text-uppercase ls-1 mb-1">Total Products By Category</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex and flex-column">
                        <!-- Chart -->
                        <div>
                            <canvas id="chart_products_by_category"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 d-flex align-self-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class=" text-uppercase ls-1 mb-1">Monthly Sales</h6>
                            </div>
                            <div class="col">
                                <form action="{{ route('admin.dashboard.index') }}" method="get">
                                    <div class="form-group mb-0">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <select class="form-select" name="month">
                                                <option value="">-- Select Month --</option>
                                                <option value="01" @if (request('month') == 1) selected @endif>
                                                    January
                                                </option>
                                                <option value="02" @if (request('month') == 2) selected @endif>
                                                    February
                                                </option>
                                                <option value="03" @if (request('month') == 3) selected @endif>
                                                    March
                                                </option>
                                                <option value="04" @if (request('month') == 4) selected @endif>
                                                    April
                                                </option>
                                                <option value="05" @if (request('month') == 5) selected @endif>May
                                                </option>
                                                <option value="06" @if (request('month') == 6) selected @endif>
                                                    June
                                                </option>
                                                <option value="07" @if (request('month') == 7) selected @endif>
                                                    July
                                                </option>
                                                <option value="08" @if (request('month') == 8) selected @endif>
                                                    August
                                                </option>
                                                <option value="09" @if (request('month') == 9) selected @endif>
                                                    September
                                                </option>
                                                <option value="10" @if (request('month') == 10) selected @endif>
                                                    October
                                                </option>
                                                <option value="11" @if (request('month') == 11) selected @endif>
                                                    November
                                                </option>
                                                <option value="12" @if (request('month') == 12) selected @endif>
                                                    December
                                                </option>
                                            </select>
                                            <div class="input-group-prepend">
                                                <button class="btn  btn-primary">Filter</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex and flex-column">
                        <!-- Chart -->
                        <div>
                            <canvas id="monthly_sales"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- Row 2 --}}
        {{-- <div class="row">
            <div class="col-12 col-md-6 d-flex align-self-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class=" text-uppercase ls-1 mb-1">Monthly Customer</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex and flex-column">
                        <!-- Chart -->
                        <div>
                            <canvas id="monthly_customers"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-self-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class=" text-uppercase ls-1 mb-1">Recent User</h6>
                            </div>
                            <div class="col text-end">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.users.index') }}">View
                                    all</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex and flex-column">
                        <div class="table-responsive">
                            <table class="table align-items-center table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Avatar</th>
                                        <th>Name</th>
                                        <th>Registered At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <td>
                                                <img class="avatar avatar-sm rounded-circle"
                                                    src="{{ handleNullAvatar($user->avatar_profile) }}" alt="avatar">
                                            </td>
                                            <td>{{ $user->full_name }}</td>
                                            <td>{{ formatDate($user->created_at) }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>Records Not Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>

                    <div class="d-flex mx-auto">

                    </div>
                </div>
            </div>
        </div> --}}


        {{-- Row 3 --}}
        {{-- <div class="row">
            <div class="col-12 col-md-9 d-flex align-self-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class=" text-uppercase ls-1 mb-1">Recent Orders</h6>
                            </div>
                            <div class="col text-end">
                                <a class="btn btn-sm btn-primary" href="#">View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex and flex-column">
                        <div class="table-responsive">
                            <table class="table align-items-center table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Transaction No</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3">Record Not Found</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>

                    <div class="d-flex mx-auto">
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-3 d-flex align-self-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class=" text-uppercase ls-1 mb-1">Activity Logs</h6>
                            </div>
                            <div class="col text-end">
                                <a href="{{ route('admin.activity_logs.index') }}" class="btn btn-sm btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex and flex-column">
                        @forelse ($activities as $al)
                            @php
                                $exploaded = explode('-', $al->description);
                            @endphp
                            <div class='border-left border-primary'>
                                <p class="m-0 pl-2 text-small">{{ $exploaded[0] }} - <span class='txt-lightblue'>
                                        {{ $exploaded[1] }} </span> </p>
                                <p class='pl-2 text-small'> {{ $al->created_at->diffForHumans() }} </p>
                            </div>
                            <br>
                        @empty
                            <img class="img-fluid" src="{{ asset('img/nodata.svg') }}" alt="nodata">
                        @endforelse
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
