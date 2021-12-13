<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" /> --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.dataTables.min.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>Maksons Textiles (PVT) Limited</h2>
        <h3>Count Wise Shed Effi.Report</h3>

        @if (request('month'))
            <p><b> Month Year</b> {{ request('month') }} - {{ request('year') }}</p>

        @endif
        @if (request('toDate'))

            <p><b> Month Period</b>: {{ $fetched_looms->first()->date }} - {{ $fetched_looms->last()->date }}</p>
        @endif

        <table class="table table-bordered">
            <thead>

                <tr>
                    <th>Count</th>
                    <th>RPM</th>
                    <th>Efficiency in %</th>
                    <th>Wp breaks</th>
                    <th>Wp per hour</th>
                    <th>Wf breaks</th>
                    <th>Wf per hour</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fetched_looms as $value)
                    <tr>
                        {{-- {{dd($value)}} --}}

                        <td scope="col">{{ number_format((float) $value->wp_cs, 2) }}</td>
                        <td scope="col">{{ number_format((float) $value->roundpm, 2) }}</td>
                        <td scope="col">{{ number_format((float) $value->eff_perc, 2) }}</td>
                        <td scope="col">{{ number_format((float) $value->wp_breaks, 2) }}</td>
                        <td scope="col">{{ number_format((float) $value->wp_p_hour, 2) }}</td>
                        <td scope="col">{{ number_format((float) $value->wf_breaks, 2) }}</td>
                        <td scope="col">{{ number_format((float) $value->wf_per_hour, 2) }}</td>
                    </tr>
                    @if ($loop->last)
                        @include('total', compact('fetched_looms'))
                    @endif
                @endforeach

            </tbody>
        </table>
    </div>
</body>
<script src="//code.jquery.com/jquery.js"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/js/main.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</html>
