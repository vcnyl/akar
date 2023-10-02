<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KaryaController;
use App\Exports\KaryaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\ExcelExportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register_mhs', [MahasiswaController::class, 'register_mhs']);
Route::post('/login_mhs', [MahasiswaController::class, 'login_mhs']);
Route::post('/input_karya', [KaryaController::class, 'input_karya']);
Route::get('/getall_karya', [KaryaController::class, 'getall_karya']);

Route::get('/search/{nama}', [KaryaController::class, 'search']);
Route::get('/exportkarya', [ExcelExportController::class, 'exportkarya']);