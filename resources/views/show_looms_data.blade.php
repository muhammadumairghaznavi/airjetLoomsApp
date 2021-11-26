<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

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
        <h3>Efficiency Report</h3>
        <p><b> Loom no</b> @if (!$fetched_looms->isEmpty()) {{ $fetched_looms[0]->title }} @endif</p>
        <p><b> Shift </b> @if (!$fetched_looms->isEmpty()) {{ $fetched_looms[0]->shift }} @endif</p>
        <p><b> Style </b> @if (!$fetched_looms->isEmpty()) {{ $fetched_looms[0]->style }}@endif</p>
        <p><b> Beam </b> @if (!$fetched_looms->isEmpty()) {{ $fetched_looms[0]->beam }}@endif</p>
        @isset($input['month'])
            <p><b> Month Year</b> {{ $input['month'] }} - {{ $input['year'] }}</p>

        @endisset
        @isset($input['toDate'])

            <p><b> Date Period</b> From {{ $input['fromDate'] }} - To {{ $input['toDate'] }}</p>
        @endisset

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>RPM</th>
                    <th>Efficiency in %</th>
                    <th>Warp times</th>
                    <th>Weft times</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $current_transaction_number = null;
                @endphp
                @foreach ($fetched_looms as $key => $value)

                    <tr>
                        <td>{{ $value->date }}</td>
                        <td scope="col" align="right">{{ number_format((float) $value->rpm, 2) }}</td>
                        <td scope="col" align="right">
                            {{ number_format((float) $value->efficiency_in_percentage, 2) }}
                        </td>
                        <td scope="col" align="right">{{ number_format((float) $value->warp_in_times, 2) }}</td>
                        <td scope="col" align="right">{{ number_format((float) $value->weft_in_times, 2) }}</td>
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
<script src="{{ asset('js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/datatable-html5.min.js') }}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/datatables.min.js') }}"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</html>
{{-- @php
$sumTotalRPM = 0;
@endphp
@foreach ($fetched_looms as $key => $value)

    <b>{{ $value->shift }}</b> -- <label for="">{{ $value->rpm }}</label><br>

    @php $sumTotalRPM += $value->rpm @endphp

@endforeach
<b>Total</b> -- <label for="">{{ $sumTotalRPM }}</label><br> --}}
{{-- {{ddd($fetched_looms)}} --}}
