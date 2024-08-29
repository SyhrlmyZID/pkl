<?php
namespace App\Http\Controllers;

// Atau, jika Laravel versi 9 ke atas

use FPDF;
use App\Models\data_desa;
use Illuminate\Http\Request;
use App\Models\bamusrenbangdes;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PDFController extends Controller
{
    public function make($id)
    {
        // Mengambil satu entitas berdasarkan ID
        $data = bamusrenbangdes::find($id);
        
$id = Auth::id();
$desa = data_desa::where('userId', $id)->first();
    
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('perencanaan.bamusrenbangdes.form', compact('data','desa'));
    
        return $pdf->download('laporan bamusrenbangdes tanggal' . $data->tanggal . '.pdf');
    }

    
}
