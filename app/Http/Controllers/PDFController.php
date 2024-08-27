<?php
namespace App\Http\Controllers;

// Atau, jika Laravel versi 9 ke atas

use App\Models\bamusrenbangdes;
use FPDF;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
class PDFController extends Controller
{
    public function make($id)
    {
        // Mengambil satu entitas berdasarkan ID
        $data = bamusrenbangdes::find($id);
    
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf', compact('data'));
    
        return $pdf->download('laporan bamusrenbangdes tanggal' . $data->tanggal . '.pdf');
    }

    
}
