@extends('mahasiswa.layouts.main')

@section('content')
<div class="p-6">

    <!-- Judul -->
    <h2 class="text-2xl font-semibold mb-1">Ajukan Jadwal</h2>
    <p class="text-gray-600 mb-6">Form pengajuan jadwal bimbingan ke dosen pembimbing 1 & 2</p>

    <!-- Grid 2 Kolom -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Form Pengajuan -->
        <div class="bg-white shadow rounded-xl p-6">
            <h3 class="font-semibold text-lg mb-4">Form Pengajuan Jadwal</h3>

            <form>

                <!-- Dosen -->
                <label class="block mb-2 font-medium">Dosen Pembimbing</label>
                <select class="w-full border border-gray-300 bg-gray-100 text-gray-700 px-4 py-2 rounded-lg mb-4">
                    <option>Dosen Pembimbing 1</option>
                    <option>Dosen Pembimbing 2</option>
                </select>

                <!-- Tanggal & Jam -->
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block mb-2 font-medium">Tanggal</label>
                        <input type="date" class="w-full border border-gray-300 bg-gray-100 px-4 py-2 rounded-lg">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Jam</label>
                        <input type="time" class="w-full border border-gray-300 bg-gray-100 px-4 py-2 rounded-lg">
                    </div>
                </div>

                <!-- Topik -->
                <label class="block mb-2 font-medium">Topik Pembahasan</label>
                <input type="text" placeholder="Contoh: Bab 3 Metodologi Penelitian"
                    class="w-full border border-gray-300 bg-gray-100 px-4 py-2 rounded-lg mb-4">

                <!-- Catatan -->
                <label class="block mb-2 font-medium">Catatan Singkat Kemajuan</label>
                <textarea placeholder="Jelaskan progres yang sudah dicapai..." rows="3"
                    class="w-full border border-gray-300 bg-gray-100 px-4 py-2 rounded-lg mb-4"></textarea>

                <!-- Upload Dokumen -->
                <label class="block mb-2 font-medium">Upload Dokumen (DOC/PDF)</label>
                <input type="file"
                    class="w-full border border-gray-300 bg-gray-100 px-4 py-2 rounded-lg mb-4">

                <!-- Upload Video -->
                <label class="block mb-2 font-medium">Upload Video (Opsional)</label>
                <input type="file"
                    class="w-full border border-gray-300 bg-gray-100 px-4 py-2 rounded-lg mb-6">

                <!-- Submit -->
                <button
                    class="w-full bg-black text-white py-3 rounded-lg flex items-center justify-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7a2 2 0 002 2z" />
                    </svg>
                    <span>Kirim Pengajuan</span>
                </button>

            </form>
        </div>

        <!-- Pengajuan Aktif -->
        <div class="bg-white shadow rounded-xl p-6">
            <h3 class="font-semibold text-lg mb-4">Pengajuan Aktif</h3>
            <p class="text-gray-600 mb-4">Jadwal yang sedang menunggu konfirmasi</p>

            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4">Tanggal</th>
                        <th class="py-3 px-4">Dosen</th>
                        <th class="py-3 px-4">Topik</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b">
                        <td class="py-3 px-4">25 Okt 2025</td>
                        <td class="py-3 px-4">Dosen 1</td>
                        <td class="py-3 px-4">Implementasi Sistem</td>
                        <td class="py-3 px-4">
                            <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-sm">Menunggu</span>
                        </td>
                        <td class="py-3 px-4">
                            <button class="bg-red-500 text-white px-3 py-1 rounded-lg text-sm">
                                Batalkan
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="5" class="text-center text-gray-500 py-6">
                            Tidak ada pengajuan aktif lainnya
                        </td>
                    </tr>
                </tbody>

            </table>

        </div>

    </div>
</div>
@endsection
