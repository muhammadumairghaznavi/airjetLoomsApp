<?php

namespace App\Http\Controllers;

use App\Imports\LoomImport;
use App\Models\Loom;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Session;

class LoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Loom::all();
        return view('looms.index', compact("data"));
    }

    public function export_excel()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }


    public function import()
    {

        if (request()->file('file')) {
            Excel::import(new LoomImport, request()->file('file'));

            Session::flash('success', 'Uploaded Successfully');
            return redirect()->back();
        }
    }

    public function fetch_loom_data()
    {
        DB::statement("SET SQL_MODE=''");
        $looms = Loom::pluck('title', 'title');
        $shifts = Loom::groupBy('shift')->pluck('shift', 'shift');
        $beams = Loom::groupBy('beam')->pluck('beam', 'beam');
        $styles = Loom::groupBy('style')->pluck('style', 'id');
        $dates = Loom::groupBy('date')->pluck('date', 'id');
        $warp_counts = Loom::groupBy('warp_count')->pluck('warp_count', 'id');
        $weft_counts = Loom::groupBy('weft_count')->pluck('weft_count', 'id');


        return view('fetch_loom_data', compact('looms', 'shifts', 'styles', 'beams', 'dates', 'warp_counts', 'weft_counts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $fetched_looms = Loom::when(request('loom'), function ($query) use ($request) {

            return $query->where('title', $request->loom);
        })
            ->when(request('fromDate'), function ($query) use ($request) {

                return $query->whereBetween('date', [$request->fromDate, $request->toDate]);
            })
            ->when(request('month'), function ($query) use ($request) {

                return $query->where([
                    ['date', 'LIKE', '%' . request('month') . '%'],
                    ['date', 'LIKE', '%' . request('year') . '%']
                ]);
            })
            ->when(request('shift'), function ($query) use ($request) {
                return $query->where('shift', $request->shift);
            })
            ->when(request('style'), function ($query) use ($request) {
                return $query->where('style', $request->style);
            })
            ->when(request('warp_count'), function ($query) use ($request) {
                return $query->where('warp_count', $request->warp_count);
            })
            ->when(request('weft_count'), function ($query) use ($request) {
                // dd('warp_count');

                return $query->where('weft_count', $request->weft_count);
            })
            ->when(request('beam'), function ($query) use ($request) {
                return $query->where('beam', $request->beam);
            })
            ->get();
        // ddd($fetched_looms);
        return view('show_looms_data', compact('fetched_looms'));
    }

    public function count_wise_shed_report(Request $request)
    {
        DB::statement("SET SQL_MODE=''");

        // $fetched_looms = Loom::when(request('fromDate'), function ($query) use ($request) {

        //     return $query->whereBetween('date', [$request->fromDate, $request->toDate]);
        // })->when(request('month'), function ($query) use ($request) {

        //     return $query->where([
        //         ['date', 'LIKE', '%' . request('month') . '%'],
        //         ['date', 'LIKE', '%' . request('year') . '%']
        //     ]);
        // })->groupBy('warp_count')->get();
        $fetched_looms = DB::table('looms')->when(request('fromDate'), function ($query) use ($request) {

            return $query->whereBetween('date', [$request->fromDate, $request->toDate]);
        })->when(request('month'), function ($query) use ($request) {

            return $query->where([
                ['date', 'LIKE', '%' . request('month') . '%'],
                ['date', 'LIKE', '%' . request('year') . '%']
            ]);
        })->select('*', DB::raw('round(AVG(warp_count),2) as wp_cs, round(AVG(rpm),2) as roundpm, round(AVG(Effic_in_perc),2) as eff_perc, round(AVG(Warp_times),2) as wp_breaks, round(AVG(Warp_Hrs),2) as wp_p_hour, round(AVG(Weft_times),2) as wf_breaks, round(AVG(Weft_Hrs),2) as wf_per_hour'))
            ->groupBy('warp_count')->get();
        // dd($fetched_looms);

        return view('looms.show_count_wise_eff_report', compact('fetched_looms'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loom  $loom
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loom  $loom
     * @return \Illuminate\Http\Response
     */
    public function edit(Loom $loom)
    {
        dd($loom);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loom  $loom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loom $loom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loom  $loom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loom $loom)
    {
        dd($loom);
        $loom->delete();
        return redirect()->back();
    }
}
