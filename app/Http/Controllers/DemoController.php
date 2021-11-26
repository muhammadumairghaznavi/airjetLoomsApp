<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\LoomImport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DemoController extends Controller
{
    public function importExportView()
    {
       return view('import');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import()
    {
        // Excel::import(new UsersImport, request()->file('file'));
        Excel::import(new LoomImport, request()->file('file'));

        return redirect()->back();
    }
}
