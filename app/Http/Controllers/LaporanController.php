<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function download($format)
    {
        // Dummy response untuk testing
        return response("Unduh format: $format");
        
        // Nanti bisa diganti dengan logic ekspor Word/PDF
    }
}