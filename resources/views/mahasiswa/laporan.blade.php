@extends('mahasiswa.layouts.main')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Laporan Bimbingan</h4>

    {{-- Statistik --}}
    <div class="row mb-4">
        @foreach (['Total Bimbingan' => $total, 'Diverifikasi' => $verified, 'Perlu Revisi' => $revisi] as $label => $value)
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $label }}</h5>
                    <p class="display-6">{{ $value }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Tombol Unduh --}}
    <div class="mb-3">
        <a href="{{ route('laporan.download', ['format' => 'word']) }}" class="btn btn-primary me-2">Unduh Word</a>
        <a href="{{ route('laporan.download', ['format' => 'pdf']) }}" class="btn btn-danger">Unduh PDF</a>
    </div>

    {{-- Preview Laporan --}}
    <div class="card">
        <div class="card-header">Preview Laporan</div>
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Topik</th>
                        <th>Dosen</th>
                        <th>Status</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bimbingan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->topik }}</td>
                        <td>{{ $item->dosen->nama }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->catatan }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada bimbingan yang diverifikasi.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection