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
        <h3>Efficiency Report</h3>
        <p><b> Loom no</b>

            @foreach ($fetched_looms->unique('title') as $item)

                @if ($loop->count > 1)

                    @if ($loop->first)

                        All
                    @endif

                @else
                    {{ $item->title }}
                @endif

            @endforeach

        </p>
        <p><b> Shift </b>
            @foreach ($fetched_looms->unique('shift') as $item)

                @if ($loop->count > 1)
                    @if ($loop->first)

                        All
                    @endif
                @else
                    {{ $item->shift }}
                @endif


            @endforeach
        </p>
        <p><b> Style </b>
            @foreach ($fetched_looms->unique('style') as $item)

                @if ($loop->count > 1)
                    @if ($loop->first)

                        All
                    @endif

                @else
                    {{ $item->style }}
                @endif

            @endforeach
        </p>
        <p><b> Beam </b>
            @foreach ($fetched_looms->unique('beam') as $item)

                @if ($loop->count > 1)

                    @if ($loop->first)

                        All
                    @endif

                @else
                    {{ $item->beam }}
                @endif

            @endforeach
        </p>
        <p><b> Warp counts </b>
            @foreach ($fetched_looms->unique('warp_count') as $item)

                @if ($loop->count > 1)

                    @if ($loop->first)

                        All
                    @endif

                @else
                    {{ $item->warp_count }}
                @endif

            @endforeach
        </p>
        <p><b> Weft counts </b>
            @foreach ($fetched_looms->unique('weft_count') as $item)

                @if ($loop->count > 1)

                    @if ($loop->first)

                        All
                    @endif

                @else
                    {{ $item->weft_count }}
                @endif

            @endforeach
        </p>
        @if (request('month'))
            <p><b> Month Year</b> {{ request('month') }} - {{ request('year') }}</p>

        @endif
        @if (request('toDate'))

            <p><b> Month Period</b>: {{ $fetched_looms->first()->date }} - {{ $fetched_looms->last()->date }}</p>
        @endif

        <table class="table table-bordered">
            <thead>
                @foreach ($fetched_looms as $key => $value)
                    @if ($loop->first)

                        <tr>
                            <td align="center" colspan="2"><b>Average</b></td>
                            <td><b>{{ number_format((float) $fetched_looms->average('rpm'), 2) }}</b></td>
                            <td><b>{{ number_format((float) $fetched_looms->average('Effic_in_perc'), 2) }}</b></b>
                            </td>
                            <td><b>{{ number_format((float) $fetched_looms->average('Warp_times'), 2) }}</b></td>
                            <td><b>{{ number_format((float) $fetched_looms->average('Warp_Hrs'), 2) }}</b></td>

                            <td><b>{{ number_format((float) $fetched_looms->average('Weft_times'), 2) }}</b></td>
                            <td><b>{{ number_format((float) $fetched_looms->average('Weft_Hrs'), 2) }}</b></td>
                        </tr>
                    @endif

                @endforeach
                <tr>
                    <th>Date</th>
                    <th>Loom #</th>
                    <th>RPM</th>
                    <th>Efficiency in %</th>
                    <th>Wp breaks</th>
                    <th>Wp per hour</th>
                    <th>Wf breaks</th>
                    <th>Wf per hour</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fetched_looms as $key => $value)

                    <tr>
                        <td>{{ $value->date }}</td>
                        <td>{{ $value->title }}</td>
                        <td scope="col">{{ number_format((float) $value->rpm, 2) }}</td>
                        <td scope="col">{{ number_format((float) $value->Effic_in_perc, 2) }}</td>
                        <td scope="col">{{ number_format((float) $value->Warp_times, 2) }}</td>
                        <td scope="col">{{ number_format((float) $value->Warp_Hrs, 2) }}</td>
                        <td scope="col">{{ number_format((float) $value->Weft_times, 2) }}</td>
                        <td scope="col">{{ number_format((float) $value->Weft_Hrs, 2) }}</td>
                    </tr>
                    {{-- @if ($loop->last)
                        @include('total', compact('fetched_looms'))
                    @endif --}}
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
