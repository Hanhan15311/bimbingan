<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Data dummy untuk testing, nanti bisa diganti ambil dari database
        $mahasiswa = (object)[
            'nama'  => $user->name ?? 'Mahasiswa',
            'dosen' => 'Dr. Ahmad'
        ];

        $stats = [
            'total'     => 0,
            'menunggu'  => 0,
            'revisi'    => 0,
            'disetujui' => 0,
            'verified'  => 0
        ];

        $progress = 0;
        $latest   = [];
        
        return view('mahasiswa.dashboard', compact('mahasiswa', 'stats', 'progress', 'latest'));
        
    }

    public function bimbingan()
    {
        return view('mahasiswa.bimbingan');
    }
    public function ajukan()
    {
        return view('mahasiswa.ajukan');
    }
    public function dokumen()
    {
        return view('mahasiswa.dokumen');
    }
    public function laporan()
    {
        // Dummy data untuk testing tampilan
        $bimbingan = []; // bisa diganti dengan Bimbingan::where('mahasiswa_id', Auth::id())->get();

        $total    = 0;
        $verified = 0;
        $revisi   = 0;

        return view('mahasiswa.laporan', compact('bimbingan', 'total', 'verified', 'revisi'));
    }



}