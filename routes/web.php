<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\LoomController;
use App\Models\Loom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/looms_data', LoomController::class);
    Route::post('import', [LoomController::class, 'import'])->name('import');


    Route::get('fetch_loom_data', [LoomController::class, 'fetch_loom_data'])->name('fetch_loom_data');

    Route::get('get_count_wise_shed_report', function () {
        DB::statement("SET SQL_MODE=''");

        $dates = Loom::groupBy('date')->pluck('date','id');

        return view('looms.count_wise_shed_report', compact('dates'));

    })->name('get_count_wise_shed_report');
    Route::post('count_wise_shed_report', [LoomController::class, 'count_wise_shed_report'])->name('count_wise_shed_report');

    Route::get('howToUpload', function () {
        return view('howToUpload');

    })->name('howToUpload');

    Route::get('/download_Sample', function(){
        $file = public_path().'/samplefile/file.xlsx';
        // $headers = array('Content-type: application/excel');
        return Response::download($file);

    })->name('download_Sample');
    // Route::post('import', [DemoController::class, 'import'])->name('import');
});
