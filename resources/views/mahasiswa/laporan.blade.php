@extends('mahasiswa.layouts.main')

@section('content')

<h2 class="text-2xl font-semibold mb-1">Laporan Bimbingan</h2>
<p class="text-gray-600 mb-6">
    Rekap semua bimbingan yang sudah diverifikasi + fitur unduh Word/PDF
</p>

<!-- Statistik -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

    <!-- Total -->
    <div class="bg-white shadow rounded-xl p-6">
        <p class="text-gray-600">Total Bimbingan</p>
        <p class="text-4xl font-bold mt-2">0</p>
    </div>

    <!-- Diverifikasi -->
    <div class="bg-white shadow rounded-xl p-6">
        <p class="text-gray-600">Diverifikasi</p>
        <p class="text-4xl font-bold mt-2 text-green-600">0</p>
    </div>

    <!-- Perlu Revisi -->
    <div class="bg-white shadow rounded-xl p-6">
        <p class="text-gray-600">Perlu Revisi</p>
        <p class="text-4xl font-bold mt-2 text-orange-500">0</p>
    </div>
</div>

<!-- Tombol -->
<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">

    <a href="#"
       class="flex items-center justify-center bg-gray-900 text-white px-6 py-3 rounded-lg shadow hover:bg-gray-700 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor">
            <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Unduh Word
    </a>

    <a href="#"
       class="flex items-center justify-center bg-gray-100 text-gray-700 px-6 py-3 rounded-lg shadow hover:bg-gray-200 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor">
            <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Unduh PDF
    </a>
</div>

<!-- Preview Laporan -->
<div class="bg-white shadow rounded-xl p-6">

    <h3 class="text-lg font-semibold mb-1">Preview Laporan</h3>
    <p class="text-gray-600 mb-4">Daftar semua bimbingan yang sudah diverifikasi</p>

    <table class="w-full text-left">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="py-3 px-4">No</th>
                <th class="py-3 px-4">Tanggal</th>
                <th class="py-3 px-4">Topik</th>
                <th class="py-3 px-4">Dosen</th>
                <th class="py-3 px-4">Status</th>
                <th class="py-3 px-4">Catatan</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td colspan="6" class="text-center text-gray-500 py-10">
                    Belum ada bimbingan yang diverifikasi
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
