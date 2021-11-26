<tr>
    <td align="center" colspan="1">Total</td>
    <td align="right">{{ number_format((float)$fetched_looms->average('rpm'), 2) }}</td>
    <td align="right">{{ number_format((float)$fetched_looms->average('efficiency_in_percentage'), 2) }}</td>
    <td align="right">{{ number_format((float)$fetched_looms->average('warp_in_times'), 2) }}</td>
    <td align="right">{{ number_format((float)$fetched_looms->average('weft_in_times'), 2) }}</td>
</tr>
