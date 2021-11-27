<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Looms Data <a class="normalLink" href="{{ route('looms_data.create') }}"><i
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


    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Looms Data Lists

                            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" required name="file" class="form-control">
                                <br>
                                <button class="btn btn-success">Import User Data</button>
                            </form>
                            <a href="{{route('howToUpload')}}">How to upload?</a><br>
                            <a href="{{route('download_Sample')}}">Download Sample File</a>

                        </h4>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            @include('message')
                            <p class="card-text">
                            </p>

                            <div class="table-responsive">
                                <table class="table-striped table dataex-html5-export">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Shift</th>
                                            <th>Loom</th>
                                            <th>Style</th>
                                            <th>Beam</th>
                                            <th>RPM</th>
                                            <th>Efficiency in %</th>
                                            <th>Warp times</th>
                                            <th>Weft times</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($data->count()))
                                            @foreach ($data as $key => $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->date }}</td>
                                                    <td>{{ $item->shift }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->style }}</td>
                                                    <td>{{ $item->beam }}</td>
                                                    <td>{{ $item->rpm }}</td>
                                                    <td>{{ $item->Effic_in_perc }}</td>
                                                    <td>{{ $item->Warp_times }}</td>
                                                    <td>{{ $item->Weft_times }}</td>
                                                    <td>
                                                        <form method="POST"
                                                            action="{{ route('looms_data.destroy', $item->id) }}">

                                                            {{-- <a class="btn btn-warning"
                                                                href="{{ route('looms_data.edit', $item) }}">Edit</a>


                                                            @csrf
                                                            @method('DELETE')
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit"
                                                                class="btn btn-xs btn-danger btn-flat show_confirm"
                                                                data-toggle="tooltip" title='Delete'>Delete</button> --}}

                                                        </form>
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

</x-app-layout>
