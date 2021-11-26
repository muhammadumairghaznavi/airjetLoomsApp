<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Loom extends Model
{
    use HasFactory;



    protected $fillable = [
        'date',
        'shift',
        'title',
        'style',
        'beam',
        'rpm',
        'efficiency_in_percentage',
        'run_in_minutes',
        'stop_min',
        'product_1000pick',
        'run_in_hours',
        'product_in_meters',
        'AF1',
        'AF2',
        'air_flow_in_meter_per_hour',
        'manu_in_times',
        'manu_in_minutes',
        'warp_in_times',
        'warp_in_hours',
        'warp_in_minutes',
        'warp_in_times_per_hour',
        'warp_in_times_per_day',
        'warp_in_times_per_cmpx',
        'weft_in_times',
        'weft_in_hours',
        'weft_in_minutes',
        'weft_in_times_per_hour',
        'weft_in_times_per_day',
        'weft_in_times_per_cmpx',
        'unselect_in_times',
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
