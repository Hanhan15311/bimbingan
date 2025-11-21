@extends('mahasiswa.layouts.main')

@section('content')

<h2 class="text-2xl font-semibold mb-1">Bimbingan Skripsi</h2>
<p class="text-gray-600 mb-6">Riwayat lengkap bimbingan, komentar dosen, dan progress</p>

<!-- Progress Card -->
<div class="bg-white shadow rounded-xl p-6 mb-8">
    <p class="font-semibold mb-1">Progress Keseluruhan</p>
    <p class="text-gray-600 mb-4">0 dari 8 bimbingan diverifikasi (0%)</p>

    <div class="w-full bg-gray-200 h-2 rounded-full">
        <div class="bg-gray-400 h-2 w-0 rounded-full"></div>
    </div>
</div>

<!-- Filter -->
<div class="flex items-center space-x-3 mb-4">
    <div class="flex items-center text-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M4 8h16M6 12h12M10 16h4" />
        </svg>
    </div>

    <select class="border border-gray-300 bg-gray-100 text-gray-700 px-4 py-2 rounded-lg focus:outline-none">
        <option>Semua Status</option>
        <option>Menunggu</option>
        <option>Diverifikasi</option>
        <option>Perlu Revisi</option>
    </select>
</div>

<!-- Tabel -->
<div class="bg-white shadow rounded-xl overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="py-3 px-4">No</th>
                <th class="py-3 px-4">Tanggal</th>
                <th class="py-3 px-4">Topik</th>
                <th class="py-3 px-4">Status</th>
                <th class="py-3 px-4">Dosen Pembimbing</th>
                <th class="py-3 px-4">Komentar Dosen</th>
                <th class="py-3 px-4">Dokumen</th>
                <th class="py-3 px-4">Video</th>
                <th class="py-3 px-4">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td colspan="9" class="text-center text-gray-500 py-10">
                    Tidak ada data bimbingan
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
