<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Loom extends Model
{
    use HasFactory;



    protected $fillable = [
        'id',
        'date',
        'shift',
        'title',
        'style',
        'warp_count',
        'weft_count',
        'beam',
        'rpm',
        'Effic_in_perc',
        'Run_min',
        'Stop_min',
        'Product_1000pick',
        'Run_Hrs',
        'Product_meter',
        'AF1',
        'AF2',
        'Air_flow_m3_h',
        'Manu_times',
        'Manu_min',
        'Warp_times',
        'Warp_Hrs',
        'Warp_min',
        'Warp_times_h',
        'Warp_times_day',
        'Warp_times_cmpx',
        'Warp_Mins',
        'Weft_times',
        'Weft_Hrs',
        'Weft_min',
        'Weft_times_h',
        'Weft_times_day',
        'Weft_times_cmpx',
        'Weft_in_Hrs',
        'UnSelect_times',
        'unselect_in_minutes',
        'unselect2_in_times',
        'unselect_in_times_per_hour',
        'unselect_in_times_per_day',
        'unselect_in_times_per_cmpx',
        'total_in_times',
        'total_in_minutes',
        'total2_in_times',
        'total_in_times_per_hour',
        'total_in_times_per_day',
        'total_in_times_per_cmpx',
        'WF1(1)_in_times',
        'WF1(1)_in_minutes',
        'WF1(1)_in_times_per_hour',
        'WF1(1)_in_times_per_day',
        'WF1(1)_in_times_per_cmpx',
        'WF1(2)_in_times',
        'WF1(2)_in_minutes',
        'WF1(2)_in_times_per_hour',
        'WF1(2)_in_times_per_day',
        'WF1(2)_in_times_per_cmpx',
        'WF2(1)_in_times',
        'WF2(1)_in_minutes',
        'WF2(1)_in_times_per_hour',
        'WF2(1)_in_times_per_day',
        'WF2(1)_in_times_per_cmpx',
        'WF2(2)_in_times',
        'WF2(2)_in_minutes',
        'WF2(2)_in_times_per_hour',
        'WF2(2)_in_times_per_day',
        'WF2(2)_in_times_per_cmpx',
    ];


    protected $dates = ['created_at', 'updated_at'];
    // protected $casts = [

    //     'date' => 'date:M/d/Y'

    // ];
}
