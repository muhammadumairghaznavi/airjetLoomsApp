<tr>
    <td align="center" colspan="2"><b>Average</b></td>
    <td ><b>{{ number_format((float)$fetched_looms->average('rpm'), 2) }}</b></td>
    <td ><b>{{ number_format((float)$fetched_looms->average('efficiency_in_percentage'), 2) }}</b></td>
    <td ><b>{{ number_format((float)$fetched_looms->average('warp_in_times'), 2) }}</b></td>
    {{-- <td ><b>{{ number_format((float)$fetched_looms->average('warp_in_hours'), 2) }}</b></td> --}}
    <td></td>
    <td ><b>{{ number_format((float)$fetched_looms->average('weft_in_times'), 2) }}</b></td>
    <td></td>
    {{-- <td ><b>{{ number_format((float)$fetched_looms->average('weft_in_hours'), 2) }}</b></td> --}}

</tr>
