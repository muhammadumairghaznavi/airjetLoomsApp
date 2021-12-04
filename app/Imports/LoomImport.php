<?php

namespace App\Imports;

use App\Models\Loom;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class LoomImport implements ToModel, WithHeadingRow, WithUpserts

{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        // dd($row);
        $looms  =  new Loom([
            'id'                                => $row['id'],
            'date'                              => Date::excelToDateTimeObject($row['date'])->format('M/d/Y'),
            'shift'                             => $row['shift'],
            'title'                             => $row['loom'],
            'style'                             => $row['style'],
            'warp_count'                             => $row['warp_count'],
            'weft_count'                             => $row['weft_count'],
            'style'                             => $row['style'],
            'beam'                              => $row['beam'],
            'rpm'                               => $row['rpm'],
            'Effic_in_perc'          => $row['effic'],
            'Run_min'                    => $row['run_min'],
            'Stop_min'                          => $row['stop_min'],
            'Product_1000pick'                  => $row['product_1000pick'],
            'Run_Hrs'                      => $row['run_hrs'],
            'Product_meter'                 => $row['product_meter'],
            'AF1'                               => $row['af1'],
            'AF2'                               => $row['af2'],
            'Air_flow_m3_h'        => $row['air_flow_m3h'],
            'Manu_times'                     => $row['manu_times'],
            'Manu_min'                   => $row['manu_min'],
            'Warp_times'                     => $row['warp_times'],
            'Warp_Hrs'                     => $row['warp_hrs'],
            'Warp_min'            => $row['warp_min'],
            'Warp_times_h'             => $row['warp_timesh'],
            'Warp_times_day'               => $row['warp_timesday'],
            'Warp_times_cmpx'            => $row['warp_timescmpx'],
            'Warp_Mins'                   => $row['warp_min'],
            'Weft_times'                     => $row['weft_times'],
            'Weft_Hrs'                     => $row['weft_hrs'],
            'Weft_min'                   => $row['weft_min'],
            'Weft_times_h'            => $row['weft_timesh'],
            'Weft_times_day'             => $row['weft_timesday'],
            'Weft_times_cmpx'            => $row['weft_timescmpx'],
            'UnSelect_times'                 => $row['unselect_times'],
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
        // dd($lo);
        return $looms;
    }
    public function uniqueBy()
    {
        return 'id';
    }
    // public function headingRow(): int
    // {
    //     return 2;
    // }
}
