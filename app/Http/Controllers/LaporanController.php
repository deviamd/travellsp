<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\transaksi_detail;
use Validator;
use \PDF;
use App\Exports\LaporanExport;
use App\Models\transaksi;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = transaksi::orderBy('created_at','DESC')->paginate(20);
        return view('laporan.index',compact('laporan'));
    }

    public function pdf()
    {
    	$laporan = transaksi::orderBy('created_at','DESC')->get();

    	$pdf = PDF::loadview('laporan.pdf',compact('laporan'));
    	return $pdf->download('laporan.pdf');
    }
}
