<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\KaryaExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExportController extends Controller
{
    public function exportkarya()
    {
        return Excel::download(new KaryaExport(), 'data.xlsx');
    }
}
