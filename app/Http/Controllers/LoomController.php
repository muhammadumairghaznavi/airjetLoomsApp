<?php

namespace App\Http\Controllers;

use App\Imports\LoomImport;
use App\Models\Loom;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
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
        $looms = Loom::pluck('title', 'title');
        $shifts = Loom::pluck('shift', 'shift');
        $beams = Loom::pluck('beam', 'beam');
        $styles = Loom::pluck('style', 'style');
        // $dates = Loom::pluck('date', 'date');


        // $looms = Loom::all();
        // $loomsData = Loom::all();


        // $date = Loom::LoomDate($date);


        // $date = Loom::groupBy('date')->get();

        // foreach($dates as $key => $value){

        //     $date = $value;
        //     $date = Carbon::createFromFormat('M/d/Y', $date);
        //     $monthName = $date->format('M/Y');


        //     // dd($monthName);
        // }
        return view('fetch_loom_data', compact('looms', 'shifts', 'styles', 'beams'));
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
        $input = $request->all();

        // dd($input);

        if (isset($input['fromDate']) && isset($input['toDate'])) {

            if (isset($input['shift'])) {
                $fetched_looms = Loom::whereBetween('date', [$input['fromDate'], $input['toDate']])
                    ->where([
                        ['title', $input['loom']],
                        ['shift', $input['shift']],
                    ])->get();
            } else {
                $fetched_looms = Loom::whereBetween('date', [$input['fromDate'], $input['toDate']])
                    ->where('title', $input['loom'])->get();
            }

            if (isset($input['style'])) {
                $fetched_looms = Loom::whereBetween('date', [$input['fromDate'], $input['toDate']])
                    ->where([
                        ['title', $input['loom']],
                        ['style', $input['style']],
                    ])->get();
            } else {

                $fetched_looms = Loom::whereBetween('date', [$input['fromDate'], $input['toDate']])
                    ->where('title', $input['loom'])->get();
            }
            if (isset($input['beam'])) {
                $fetched_looms = Loom::whereBetween('date', [$input['fromDate'], $input['toDate']])
                    ->where([
                        ['title', $input['loom']],
                        ['beam', $input['beam']],
                    ])->get();
            } else {
                $fetched_looms = Loom::whereBetween('date', [$input['fromDate'], $input['toDate']])
                    ->where('title', $input['loom'])->get();
            }
        } else {

            if (isset($input['shift'])) {
                $fetched_looms = Loom::where([
                    ['shift', $input['shift']],
                    ['title', $input['loom']],
                    ['date', 'LIKE', '%' . $input['month'] . '%'],
                    ['date', 'LIKE', '%' . $input['year'] . '%']
                ])->get();
            } else {
                $fetched_looms = Loom::where([
                    ['title', $input['loom']],
                    ['date', 'LIKE', '%' . $input['month'] . '%'],
                    ['date', 'LIKE', '%' . $input['year'] . '%']
                ])->get();
            }


            if (isset($input['style'])) {
                $fetched_looms = Loom::where([
                    ['style', $input['style']],
                    ['title', $input['loom']],
                    ['date', 'LIKE', '%' . $input['month'] . '%'],
                    ['date', 'LIKE', '%' . $input['year'] . '%']
                ])->get();
            } else {
                $fetched_looms = Loom::where([
                    ['title', $input['loom']],
                    ['date', 'LIKE', '%' . $input['month'] . '%'],
                    ['date', 'LIKE', '%' . $input['year'] . '%']
                ])->get();
            }


            if (isset($input['beam'])) {
                $fetched_looms = Loom::where([
                    ['beam', $input['beam']],
                    ['title', $input['loom']],
                    ['date', 'LIKE', '%' . $input['month'] . '%'],
                    ['date', 'LIKE', '%' . $input['year'] . '%']
                ])->get();
            } else {
                $fetched_looms = Loom::where([
                    ['title', $input['loom']],
                    ['date', 'LIKE', '%' . $input['month'] . '%'],
                    ['date', 'LIKE', '%' . $input['year'] . '%']
                ])->get();
            }
        }

        return view('show_looms_data', compact('fetched_looms', 'input'));
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
