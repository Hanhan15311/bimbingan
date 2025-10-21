<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Bimbingan Skripsi</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100 flex justify-center items-center min-h-screen">

  <div class="bg-white shadow-xl rounded-2xl w-full max-w-md p-8">
    <!-- Ikon / Logo -->
    <div class="flex flex-col items-center mb-6">
      <div class="bg-black text-white rounded-full p-4 mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6m0-6l9-5m-9 5L3 9" />
        </svg>
      </div>
      <h1 class="text-2xl font-semibold text-gray-800">Sistem Bimbingan Skripsi</h1>
      <p class="text-gray-500 text-sm">Manajemen bimbingan skripsi mahasiswa</p>
    </div>

    <!-- Tabs -->
    <div class="flex mb-6 bg-gray-100 rounded-lg p-1">
      <button id="tab-mahasiswa" class="w-1/2 py-2 rounded-lg bg-white shadow font-medium text-black transition">Mahasiswa</button>
      <button id="tab-dosen" class="w-1/2 py-2 rounded-lg text-gray-500 hover:text-black transition">Dosen</button>
    </div>

    <!-- Form Login -->
    <div id="form-mahasiswa">
      <h2 class="text-lg font-semibold mb-3">Login Mahasiswa</h2>
      <p class="text-sm text-gray-500 mb-4">Masuk sebagai mahasiswa untuk mengajukan bimbingan</p>

      <form action="#" method="POST" class="space-y-4">
        @csrf
        <div>
          <label class="block text-gray-700 mb-1">Email</label>
          <input type="email" name="email" placeholder="mahasiswa@email.com" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
          <label class="block text-gray-700 mb-1">Password</label>
          <input type="password" name="password" placeholder="********" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <button type="submit" class="w-full bg-black text-white py-2 rounded-lg font-semibold hover:bg-grey cursor-pointer transition">
          Masuk sebagai Mahasiswa
        </button>
      </form>
    </div>

    <!-- Form Dosen -->
    <div id="form-dosen" class="hidden">
      <h2 class="text-lg font-semibold mb-3">Login Dosen</h2>
      <p class="text-sm text-gray-500 mb-4">Masuk sebagai dosen untuk mengelola bimbingan</p>

      <form action="#" method="POST" class="space-y-4">
        @csrf
        <div>
          <label class="block text-gray-700 mb-1">Email</label>
          <input type="email" name="email" placeholder="dosen@email.com" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
          <label class="block text-gray-700 mb-1">Password</label>
          <input type="password" name="password" placeholder="********" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <button type="submit" class="w-full bg-black text-white py-2 rounded-lg font-semibold hover:bg-gray-800 transition">
          Masuk sebagai Dosen
        </button>
      </form>
    </div>

  </div>

  <!-- Script Toggle Tab -->
  <script>
    const tabMahasiswa = document.getElementById('tab-mahasiswa');
    const tabDosen = document.getElementById('tab-dosen');
    const formMahasiswa = document.getElementById('form-mahasiswa');
    const formDosen = document.getElementById('form-dosen');

    tabMahasiswa.addEventListener('click', () => {
      formMahasiswa.classList.remove('hidden');
      formDosen.classList.add('hidden');
      tabMahasiswa.classList.add('bg-white', 'shadow', 'text-blue-600');
      tabDosen.classList.remove('bg-white', 'shadow', 'text-blue-600');
      tabDosen.classList.add('text-gray-500');
    });

    tabDosen.addEventListener('click', () => {
      formDosen.classList.remove('hidden');
      formMahasiswa.classList.add('hidden');
      tabDosen.classList.add('bg-white', 'shadow', 'text-blue-600');
      tabMahasiswa.classList.remove('bg-white', 'shadow', 'text-blue-600');
      tabMahasiswa.classList.add('text-gray-500');
    });
  </script>

</body>
</html>
