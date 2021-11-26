<?php

namespace App\Imports;

use App\Models\Loom;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class LoomImport implements ToModel, WithHeadingRow

{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        // dd($row);
        return new Loom([
            'date'                              => Date::excelToDateTimeObject($row['date'])->format('M/d/Y'),
            'shift'                             => $row['shift'],
            'title'                             => $row['loom'],
            'style'                             => $row['style'],
            'beam'                              => $row['beam'],
            'rpm'                               => $row['rpm'],
            'efficiency_in_percentage'          => $row['effic'],
            'run_in_minutes'                    => $row['run_min'],
            'stop_min'                          => $row['stop_min'],
            'product_1000pick'                  => $row['product_1000pick'],
            'run_in_hours'                      => $row['run_hrs'],
            'product_in_meters'                 => $row['product_meter'],
            'AF1'                               => $row['af1'],
            'AF2'                               => $row['af2'],
            'air_flow_in_meter_per_hour'        => $row['air_flow_m3h'],
            'manu_in_times'                     => $row['manu_times'],
            'manu_in_minutes'                   => $row['manu_min'],
            'warp_in_times'                     => $row['warp_times'],
            'warp_in_hours'                     => $row['warp_hrs'],
            'warp_in_minutes'                   => $row['warp_min'],
            'warp_in_times_per_hour'            => $row['warp_timesh'],
            'warp_in_times_per_day'             => $row['warp_timesday'],
            'warp_in_times_per_cmpx'            => $row['warp_timescmpx'],
            'weft_in_times'                     => $row['weft_times'],
            'weft_in_hours'                     => $row['weft_hrs'],
            'weft_in_minutes'                   => $row['weft_min'],
            'weft_in_times_per_hour'            => $row['weft_timesh'],
            'weft_in_times_per_day'             => $row['weft_timesday'],
            'weft_in_times_per_cmpx'            => $row['weft_timescmpx'],
            // 'weft_hours'                        => $row['21'],
            'unselect_in_times'                 => $row['unselect_times'],
            'unselect_in_minutes'               => $row['unselect_min'],
            'unselect2_in_times'                => $row['unselect2_times'],
            'unselect_in_times_per_hour'        => $row['unselect_timesh'],
            'unselect_in_times_per_day'         => $row['unselect_timesday'],
            'unselect_in_times_per_cmpx'        => $row['unselect_timescmpx'],
            'total_in_times'                    => $row['total_times'],
            'total_in_minutes'                  => $row['total_min'],
            'total2_in_times'                   => $row['total2_times'],
            'total_in_times_per_hour'           => $row['total_timesh'],
            'total_in_times_per_day'            => $row['total_timesday'],
            'total_in_times_per_cmpx'           => $row['total_timescmpx'],
            'WF1(1)_in_times'                   => $row['wf11_times'],
            'WF1(1)_in_minutes'                 => $row['wf11_min'],
            'WF1(1)_in_times_per_hour'          => $row['wf11_timesh'],
            'WF1(1)_in_times_per_day'           => $row['wf11_timesday'],
            'WF1(1)_in_times_per_cmpx'          => $row['wf11_timescmpx'],
            'WF1(2)_in_times'                   => $row['wf12_times'],
            'WF1(2)_in_minutes'                 => $row['wf12_min'],
            'WF1(2)_in_times_per_hour'          => $row['wf12_timesh'],
            'WF1(2)_in_times_per_day'           => $row['wf12_timesday'],
            'WF1(2)_in_times_per_cmpx'          => $row['wf12_timescmpx'],
            'WF2(1)_in_times'                   => $row['wf21_times'],
            'WF2(1)_in_minutes'                 => $row['wf21_min'],
            'WF2(1)_in_times_per_hour'          => $row['wf21_timesh'],
            'WF2(1)_in_times_per_day'           => $row['wf21_timesday'],
            'WF2(1)_in_times_per_cmpx'          => $row['wf21_timescmpx'],
            'WF2(2)_in_times'                   => $row['wf22_times'],
            'WF2(2)_in_minutes'                 => $row['wf22_min'],
            'WF2(2)_in_times_per_hour'          => $row['wf22_timesh'],
            'WF2(2)_in_times_per_day'           => $row['wf22_timesday'],
            'WF2(2)_in_times_per_cmpx'          => $row['wf22_timescmpx'],

        ]);
    }
    // public function headingRow(): int
    // {
    //     return 2;
    // }
}
