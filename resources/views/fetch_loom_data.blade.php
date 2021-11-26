<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Fetch Looms Data <a class="normalLink" href="{{ route('looms_data.create') }}"><i
                            class="fas fa-plus-circle"></i></a></h3>
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
                                action="{{ route('looms_data.store') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Loom</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="selectpicker form-control" data-live-search="true" required name="loom"
                                                id="">
                                                <option value="" disabled selected>Select Loom</option>
                                                @foreach ($looms as $key => $value)

                                                    <option data-tokens="{{ $key }}"
                                                        value="{{ $key }}">{{ $value }}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Shift</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="shift" class="form-control" id="">
                                                <option value="">All</option>
                                                @foreach ($shifts as $key => $value)

                                                    <option value="{{ $key }}">{{ $value }}</option>

                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="col-md-4">
                                            <label>Styles</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="style" class="form-control" id="">
                                                <option value="">All</option>
                                                @foreach ($styles as $key => $value)

                                                    <option value="{{ $key }}">{{ $value }}</option>

                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="col-md-4">
                                            <label>Beams</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="beam" class="form-control" id="">
                                                <option value="">All</option>
                                                @foreach ($beams as $key => $value)

                                                    <option value="{{ $key }}">{{ $value }}</option>

                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="col-md-4">
                                            <label>Month</label>
                                        </div>


                                        <div class="col-md-8 form-group">

                                            <select name="month" required class="form-control" id="month">

                                                <option value="">Select Month</option>
                                                <option value="Jan">Jan</option>
                                                <option value="Feb">Feb</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="Jun">Jne</option>
                                                <option value="Jul">Juy</option>
                                                <option value="Aug">Aug</option>
                                                <option value="Sep">Sep</option>
                                                <option value="Oct">Oct</option>
                                                <option value="Nov">Nov</option>
                                                <option value="Dec">Dec</option>
                                            </select>
                                        </div>


                                        <div class="col-md-4">
                                            <label>Year</label>
                                        </div>


                                        <div class="col-md-8 form-group">

                                            <select name="year" required class="form-control" id="year">

                                                <option value="">Select Year</option>
                                                <option value="2021">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2021">2022</option>
                                                <option value="2021">2023</option>
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
                                            <input id="byPeriod" type="checkbox">
                                            <label for="byPeriod">By Period</label>

                                        </div>


                                        <div class="col-md-8 form-group">

                                        </div>

                                        <div class="col-md-4">
                                            <label>Select Period</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <input placeholder="From" name="fromDate" id="fromDate"
                                                        class="form-control" type="text">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <input placeholder="To" name="toDate" id="toDate"
                                                        class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Fetch</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
