@extends('mahasiswa.layouts.main')

@section('content')

<h2 class="text-2xl font-semibold mb-1">Dokumen Saya</h2>
<p class="text-gray-600 mb-6">Arsip semua dokumen/video yang diunggah selama proses bimbingan</p>

<div class="flex justify-end mb-4">
    <button class="flex items-center bg-black text-white px-5 py-2 rounded-lg hover:bg-gray-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 4v16m8-8H4"/>
        </svg>
        Upload File Baru
    </button>
</div>

<div class="bg-white shadow rounded-xl overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="py-3 px-4">Nama File</th>
                <th class="py-3 px-4">Jenis</th>
                <th class="py-3 px-4">Ukuran</th>
                <th class="py-3 px-4">Dosen Tujuan</th>
                <th class="py-3 px-4">Tanggal Upload</th>
                <th class="py-3 px-4">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td colspan="6" class="text-center text-gray-500 py-12">

                    <div class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-12 h-12 text-gray-400 mb-2" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 7l9-5 9 5v10l-9 5-9-5z" />
                        </svg>

                        Belum ada dokumen yang diupload
                    </div>

                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
