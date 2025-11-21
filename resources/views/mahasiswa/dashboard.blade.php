@extends('mahasiswa.layouts.main')

@section('content')

<h2 class="text-2xl font-semibold mb-1">Dashboard</h2>
<p class="text-gray-600 mb-6">Ringkasan status bimbingan, jadwal, dan statistik cepat</p>

<p class="font-semibold">Selamat datang, {{ auth()->user()->name }}</p>
<p class="text-gray-600 mb-6">Dosen Pembimbing:</p>

<!-- Stats -->
<div class="grid grid-cols-4 gap-4 mb-6">
    <div class="bg-white shadow p-6 rounded-lg">
        <p class="text-gray-600">Total Bimbingan</p>
        <p class="text-3xl font-bold">0</p>
    </div>

    <div class="bg-white shadow p-6 rounded-lg">
        <p class="text-gray-600">Menunggu</p>
        <p class="text-3xl font-bold text-yellow-600">0</p>
    </div>

    <div class="bg-white shadow p-6 rounded-lg">
        <p class="text-gray-600">Perlu Revisi</p>
        <p class="text-3xl font-bold text-red-600">0</p>
    </div>

    <div class="bg-white shadow p-6 rounded-lg">
        <p class="text-gray-600">Diverifikasi</p>
        <p class="text-3xl font-bold text-green-600">0</p>
    </div>
</div>

<!-- Progress -->
<div class="bg-white shadow rounded-lg p-6 mb-6">
    <p class="font-semibold mb-2">Progress Bimbingan</p>
    <p class="text-gray-600 mb-2">0 dari 8 bimbingan diverifikasi (0%)</p>
    <div class="w-full bg-gray-300 h-2 rounded-full">
        <div class="bg-gray-500 h-2 w-0 rounded-full"></div>
    </div>
</div>

<!-- Bimbingan -->
<div class="bg-white shadow rounded-lg p-6">
    <div class="flex justify-between mb-4">
        <p class="font-semibold">Bimbingan Terbaru</p>
        <button class="text-sm bg-black text-white px-4 py-1 rounded">Lihat Semua</button>
    </div>

    <div class="text-center py-10 text-gray-500">
        <div class="text-4xl mb-2">📄</div>
        Belum ada bimbingan
    </div>
</div>

@endsection
