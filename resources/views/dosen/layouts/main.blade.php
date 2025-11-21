<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Bimbingan Skripsi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- HEADER -->
    <header class="w-full bg-white border-b border-black px-8 py-4 flex justify-between items-center">
        
        <h1 class="text-xl font-semibold ml-6">Sistem Bimbingan Skripsi</h1>

        <div class="flex items-center space-x-6">

            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l9-9 9 9M4 10v10a1 1 0 001 1h5m4 0h5a1 1 0 001-1V10"/>
                </svg>
            </button>

            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.4-1.4A2 2 0 0118 14v-3a6 6 0 00-12 0v3a2 2 0 01-.6 1.6L4 17h5m6 0v1a3 3 0 11-6 0v-1"/>
                </svg>
            </button>

            <div class="flex items-center space-x-2">
                <div class="w-2 h-9 bg-orange-300 rounded-full"></div>
                <span class="font-medium">{{ auth()->user()->name }}</span>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4-4-4m4 4H7"/>
                    </svg>
                </button>
            </form>

        </div>
    </header>


    <!-- BODY WRAPPER -->
    <div class="flex min-h-screen">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-white border-r border-black px-4 py-6">
            <nav class="space-y-2">

                <a href="{{ route('mahasiswa.dashboard') }}" 
                   class="flex items-center p-3 rounded-lg space-x-3 
                   {{ request()->routeIs('mahasiswa.dashboard') ? 'bg-black text-white' : 'hover:bg-gray-200' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l9-9 9 9M4 10v10a1 1 0 001 1h5m4 0h5a1 1 0 001-1V10"/>
                    </svg>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('mahasiswa.bimbingan') }}" 
                   class="flex items-center p-3 rounded-lg space-x-3 
                   {{ request()->routeIs('mahasiswa.bimbingan') ? 'bg-black text-white' : 'hover:bg-gray-200' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v12m6-6H6"/>
                    </svg>
                    <span>Bimbingan Skripsi</span>
                </a>

                <a href="ajukan" class="flex items-center p-3 hover:bg-gray-200 rounded-lg space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12z"/>
                    </svg>
                    <span>Ajukan Jadwal</span>
                </a>

                <a href="dokumen" class="flex items-center p-3 hover:bg-gray-200 rounded-lg space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7h18M3 12h18M3 17h18"/>
                    </svg>
                    <span>Dokumen Saya</span>
                </a>

                <a href="laporan" class="flex items-center p-3 hover:bg-gray-200 rounded-lg space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7V3h5l5 5v14z"/>
                    </svg>
                    <span>Laporan Bimbingan</span>
                </a>

            </nav>
        </aside>


        <!-- MAIN CONTENT -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>

    </div>

</body>
</html>
