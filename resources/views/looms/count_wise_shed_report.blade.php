<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Count Wise Shed Effi.Report </h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <h4 class="card-title"><a href="{{ route('admin.' . $route . '.index') }}"
                                class="btn btn-secondary">Back</a></h4>
                    </div> --}}
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" enctype="multipart/form-data"
                                action="{{ route('count_wise_shed_report') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label>Month</label>
                                        </div>

                                        <div class="col-md-8 form-group">

                                            <select id="month" data-live-search="true" name="month"
                                                class="form-control">

                                                <option value="" selected>Select Month</option>
                                                <option data-tokens="Jan" value="Jan">Jan</option>
                                                <option data-tokens="Feb" value="Feb">Feb</option>
                                                <option data-tokens="March" value="March">March</option>
                                                <option data-tokens="April" value="April">April</option>
                                                <option data-tokens="May" value="May">May</option>
                                                <option data-tokens="Jun" value="Jun">Jne</option>
                                                <option data-tokens="Jul" value="Jul">Juy</option>
                                                <option data-tokens="Aug" value="Aug">Aug</option>
                                                <option data-tokens="Sep" value="Sep">Sep</option>
                                                <option data-tokens="Oct" value="Oct">Oct</option>
                                                <option data-tokens="Nov" value="Nov">Nov</option>
                                                <option data-tokens="Dec" value="Dec">Dec</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Year</label>
                                        </div>


                                        <div class="col-md-8 form-group">

                                            <select data-live-search="true" name="year" class="form-control"
                                                id="year">

                                                <option value="" selected>Select Year</option>
                                                <option data-tokens="2020" value="2020">2020</option>
                                                <option data-tokens="2021" value="2021">2021</option>
                                                <option data-tokens="2022" value="2022">2022</option>
                                                <option data-tokens="2023" value="2023">2023</option>
                                                {{-- <option value="Feb">Feb</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="Jun">Jne</option>
                                                <option value="Jul">Juy</option>
                                                <option value="Aug">Aug</option>
                                                <option value="Sep">Sep</option>
                                                <option value="Oct">Oct</option>
                                                <option value="Nov">Nov</option>
                                                <option value="Dec">Dec</option> --}}
                                            </select>
                                        </div>

                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-8 form-group">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Select Period</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <div class="row">
                                                <div class="col-md-6 form-group">

                                                    <select data-live-search="true" name="fromDate"
                                                        class="form-control" id="fromDate">

                                                        <option selected value="">From</option>
                                                        @foreach ($dates as $key => $value)
                                                            <option data-tokens="{{ $value }}"
                                                                value="{{ $value }}">{{ $value }}
                                                            </option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">

                                                    <select data-live-search="true" name="toDate" class="form-control"
                                                        id="toDate">

                                                        <option selected value="">To</option>
                                                        @foreach ($dates as $key => $value)
                                                            <option data-tokens="{{ $value }}"
                                                                value="{{ $value }}">{{ $value }}
                                                            </option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Fetch</button>
                                            {{-- <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
