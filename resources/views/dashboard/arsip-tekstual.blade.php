<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Tekstual - Arsip Kota Yogyakarta Dashboard</title>
    
    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0069D4',
                        accent: '#C8E900',
                        darkblue: '#004B87',
                        btnRed: '#DC2626',
                        statusGood: '#16A34A',
                        statusWarn: '#CA8A04',
                        statusBad: '#DC2626',
                        // Warna baru untuk tombol unduh
                        btnLime: '#B9FD4E', 
                    },
                    fontFamily: { sans: ['Inter', 'sans-serif'] }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        #sidebar, #main-content { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        #sidebar.collapsed { width: 5rem; }
        #sidebar.collapsed .sidebar-text { display: none; }
        #sidebar.collapsed .logo-container { justify-content: center; padding-left: 0; padding-right: 0; }
        #sidebar.collapsed .menu-item { justify-content: center; padding-left: 0; padding-right: 0; }
        #sidebar.collapsed .menu-icon { margin-right: 0; }
        #main-content.collapsed { margin-left: 5rem; }
        
        /* Custom Scrollbar for Table on Mobile */
        .table-scroll::-webkit-scrollbar { height: 6px; }
        .table-scroll::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 4px; }
        .table-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .table-scroll::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

        /* Modal Animation */
        #delete-modal { transition: opacity 0.3s ease; }
        #delete-modal.hidden { opacity: 0; pointer-events: none; }
        #delete-modal:not(.hidden) { opacity: 1; pointer-events: auto; }
        #delete-modal-content { transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1); }
        #delete-modal.hidden #delete-modal-content { transform: scale(0.95); }
        #delete-modal:not(.hidden) #delete-modal-content { transform: scale(1); }
    </style>
</head>
<body class="bg-gray-100 h-screen overflow-hidden flex">

    {{-- SIDEBAR KIRI --}}
    <aside id="sidebar" class="hidden md:flex flex-col w-72 bg-gradient-to-b from-primary via-blue-400 to-white text-white h-full fixed left-0 top-0 z-30 shadow-xl overflow-hidden">
        <div class="logo-container p-6 flex items-center gap-4 border-b border-white/10 shrink-0">
            <img src="{{ asset('images/logo-header.png') }}" onerror="this.style.display='none'" alt="Logo" class="w-14 h-14 object-contain drop-shadow-md shrink-0">
            <div class="leading-tight sidebar-text">
                <h1 class="font-bold text-xl tracking-wide text-white">Arsip Kota Yogyakarta</h1>
                <p class="text-[10px] text-accent font-bold uppercase tracking-wider mt-0.5">Dinas Perpustakaan & Kearsipan</p>
            </div>
        </div>

        <nav class="flex-1 overflow-y-auto hide-scrollbar py-6 px-4 space-y-2">
            <a href="{{ route('dashboard') }}" class="menu-item flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 hover:text-white rounded-xl font-medium transition-all group">
                <svg class="menu-icon w-5 h-5 shrink-0 group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/></svg>
                <span class="sidebar-text whitespace-nowrap">Beranda</span>
            </a>
            
            {{-- MENU AKTIF: ARSIP TEKSTUAL --}}
            <a href="{{ route('arsip.tekstual') }}" class="menu-item flex items-center gap-3 px-4 py-3 bg-white text-primary rounded-xl font-bold shadow-sm transition-all transform scale-[1.02]">
                <svg class="menu-icon w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                <span class="sidebar-text whitespace-nowrap">Arsip Tekstual</span>
            </a>
            
            <a href="{{ route('arsip.foto') }}" class="menu-item flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 hover:text-white rounded-xl font-medium transition-all group">
                <svg class="menu-icon w-5 h-5 shrink-0 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                <span class="sidebar-text whitespace-nowrap">Arsip Foto</span>
            </a>

            <a href="{{ route('arsip.cd-dvd') }}" class="menu-item flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 hover:text-white rounded-xl font-medium transition-all group">
                <svg class="menu-icon w-5 h-5 shrink-0 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                <span class="sidebar-text whitespace-nowrap">Arsip CD-DVD</span>
            </a>

            <a href="{{ route('arsip.kartografi') }}" class="menu-item flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 hover:text-white rounded-xl font-medium transition-all group">
                <svg class="menu-icon w-5 h-5 shrink-0 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0121 18.382V7.618a1 1 0 01-.806-.984A11.964 11.964 0 0015 7m0 13V7m0 0a11.964 11.964 0 00-6-3.016"/></svg>
                <span class="sidebar-text whitespace-nowrap">Arsip Kartografi</span>
            </a>

            <a href="{{ route('profil') }}" class="menu-item flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 hover:text-white rounded-xl font-medium transition-all group">
                <svg class="menu-icon w-5 h-5 shrink-0 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                <span class="sidebar-text whitespace-nowrap">Profil</span>
            </a>
        </nav>

        <div class="p-4 mt-auto shrink-0">
            <a href="{{ route('home') }}" class="menu-item flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-50 hover:text-red-600 rounded-xl font-medium transition-all">
                <svg class="menu-icon w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                <span class="sidebar-text whitespace-nowrap">Keluar</span>
            </a>
        </div>
    </aside>

    {{-- KONTEN UTAMA --}}
    <main id="main-content" class="flex-1 md:ml-72 h-full overflow-y-auto hide-scrollbar bg-gray-100 relative">
        
        {{-- HEADER ATAS --}}
        <header class="sticky top-0 z-20 bg-primary/95 backdrop-blur-sm px-6 py-4 flex justify-between items-center shadow-sm">
            <div class="flex items-center gap-4">
                <button onclick="toggleSidebar()" class="hidden md:flex p-2 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                <h2 class="text-xl font-bold text-white">Arsip Tekstual</h2>
            </div>

            <div class="flex items-center gap-4">
                <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-white/50 shadow-md cursor-pointer shrink-0">
                    <img src="https://ui-avatars.com/api/?name=Admin+User&background=random" alt="User" class="w-full h-full object-cover">
                </div>
            </div>
        </header>

        {{-- ISI HALAMAN ARSIP TEKSTUAL --}}
        <div class="p-4 lg:p-8 max-w-7xl mx-auto fade-in">
            
            {{-- TOOLBAR ATAS (RESPONSIF) --}}
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6">
                
                {{-- Tombol Unduh (Warna Baru: #B9FD4E) --}}
                <button class="w-auto bg-btnLime text-gray-900 font-bold px-3 py-2 lg:px-5 lg:py-2.5 rounded-lg hover:brightness-95 transition-colors shadow-sm flex items-center justify-center gap-2 text-xs lg:text-sm">
                    <span>Unduh</span>
                    <svg class="w-3.5 h-3.5 lg:w-4 lg:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                </button>

                {{-- Group Search & Actions --}}
                <div class="w-full lg:w-auto flex flex-col sm:flex-row items-stretch sm:items-center gap-3 flex-1 lg:flex-none">
                    
                    {{-- Search Bar --}}
                    <div class="relative flex-1 min-w-[200px]">
                        <input type="text" placeholder="Cari arsip......." 
                               class="w-full pl-4 pr-10 py-2.5 bg-white border border-gray-200 rounded-lg text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary shadow-sm">
                        <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>

                    {{-- Action Buttons Group --}}
                    <div class="flex items-center gap-2">
                        <button class="p-2.5 bg-white border border-gray-200 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-primary transition-colors shadow-sm" title="Filter">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
                        </button>
                        <a href="{{ route('tambah.arsip.tekstual') }}" class="p-2.5 bg-white border border-gray-200 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-primary transition-colors shadow-sm" title="Tambah Data">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        </a>
                        <button class="p-2.5 bg-white border border-gray-200 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-primary transition-colors shadow-sm" title="Opsi Lainnya">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/></svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- TABEL DATA ARSIP --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="overflow-x-auto table-scroll">
                    <table class="w-full text-left border-collapse min-w-[900px]">
                        <thead>
                            <tr class="bg-primary text-white text-sm uppercase tracking-wider">
                                <th class="px-6 py-4 font-semibold w-16 text-center">No</th>
                                <th class="px-6 py-4 font-semibold">Nomor arsip</th>
                                <th class="px-6 py-4 font-semibold">Uraian</th>
                                <th class="px-6 py-4 font-semibold">Kurun waktu</th>
                                <th class="px-6 py-4 font-semibold">Kondisi</th>
                                <th class="px-6 py-4 font-semibold text-center">Jumlah</th>
                                <th class="px-6 py-4 font-semibold">Lokasi Simpan</th>
                                <th class="px-6 py-4 font-semibold text-center w-24">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                            @php
                                $data = [
                                    ['no' => 1, 'nomor' => '#000001', 'uraian' => 'Prasasti Majapahit', 'waktu' => '3 Masehi', 'kondisi' => 'Bagus', 'jumlah' => 2, 'lokasi' => 'Gedung A'],
                                    ['no' => 2, 'nomor' => '#000002', 'uraian' => 'Prasasti Majapahit', 'waktu' => '3 Masehi', 'kondisi' => 'Bagus', 'jumlah' => 2, 'lokasi' => 'Gedung A'],
                                    ['no' => 3, 'nomor' => '#000003', 'uraian' => 'Prasasti Majapahit', 'waktu' => '3 Masehi', 'kondisi' => 'Buruk', 'jumlah' => 4, 'lokasi' => 'Gedung B'],
                                    ['no' => 4, 'nomor' => '#000004', 'uraian' => 'Prasasti Majapahit', 'waktu' => '3 Masehi', 'kondisi' => 'Bagus', 'jumlah' => 1, 'lokasi' => 'Gedung A'],
                                    ['no' => 5, 'nomor' => '#000005', 'uraian' => 'Prasasti Majapahit', 'waktu' => '3 Masehi', 'kondisi' => 'Bagus', 'jumlah' => 1, 'lokasi' => 'Gedung C'],
                                    ['no' => 6, 'nomor' => '#000006', 'uraian' => 'Prasasti Majapahit', 'waktu' => '3 Masehi', 'kondisi' => 'Buruk', 'jumlah' => 1, 'lokasi' => 'Gedung A'],
                                    ['no' => 7, 'nomor' => '#000007', 'uraian' => 'Prasasti Majapahit', 'waktu' => '3 Masehi', 'kondisi' => 'Sedang', 'jumlah' => 1, 'lokasi' => 'Gedung A'],
                                    ['no' => 8, 'nomor' => '#000008', 'uraian' => 'Prasasti Majapahit', 'waktu' => '3 Masehi', 'kondisi' => 'Sedang', 'jumlah' => 7, 'lokasi' => 'Gedung B'],
                                ];
                            @endphp

                            @foreach($data as $item)
                            <tr class="hover:bg-gray-50 transition-colors {{ $loop->even ? 'bg-gray-50/50' : '' }}">
                                <td class="px-6 py-4 text-center font-medium">{{ $item['no'] }}</td>
                                <td class="px-6 py-4 font-mono text-gray-900">{{ $item['nomor'] }}</td>
                                <td class="px-6 py-4">{{ $item['uraian'] }}</td>
                                <td class="px-6 py-4">{{ $item['waktu'] }}</td>
                                <td class="px-6 py-4">
                                    @php
                                        $colorClass = match($item['kondisi']) {
                                            'Bagus' => 'text-statusGood',
                                            'Sedang' => 'text-statusWarn',
                                            'Buruk' => 'text-statusBad',
                                            default => 'text-gray-600'
                                        };
                                    @endphp
                                    <span class="{{ $colorClass }} font-medium">{{ $item['kondisi'] }}</span>
                                </td>
                                <td class="px-6 py-4 text-center">{{ $item['jumlah'] }}</td>
                                <td class="px-6 py-4">{{ $item['lokasi'] }}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        <a href="{{ route('informasi.arsip.tekstual') }}" 
                                           class="text-gray-400 hover:text-primary transition-colors" title="Detail">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                        </a>
                                        
                                        {{-- TOMBOL HAPUS DENGAN POPUP --}}
                                        <button onclick="openDeleteModal()" 
                                                class="text-gray-400 hover:text-red-500 transition-colors" title="Hapus">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- PAGINATION --}}
                <div class="p-4 border-t border-gray-200 flex flex-col sm:flex-row justify-between items-center gap-4 bg-white">
                    <button class="w-full sm:w-auto px-4 py-2 border border-gray-200 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 transition-colors flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        Sebelumnya
                    </button>
                    
                    <div class="flex items-center gap-1">
                        <button class="w-9 h-9 flex items-center justify-center rounded-lg bg-darkblue text-white text-sm font-bold shadow-sm">1</button>
                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 text-sm font-medium transition-colors">2</button>
                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 text-sm font-medium transition-colors">3</button>
                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 text-sm font-medium transition-colors">4</button>
                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 text-sm font-medium transition-colors">5</button>
                        <span class="px-2 text-gray-400">....</span>
                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 text-sm font-medium transition-colors">24</button>
                    </div>

                    <button class="w-full sm:w-auto px-4 py-2 border border-gray-200 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 transition-colors flex items-center justify-center gap-2">
                        Selanjutnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

        </div>
    </main>

    {{-- POPUP KONFIRMASI HAPUS --}}
    <div id="delete-modal" class="fixed inset-0 z-[60] hidden flex items-center justify-center">
        {{-- Backdrop Blur --}}
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeDeleteModal()"></div>
        
        {{-- Modal Content --}}
        <div id="delete-modal-content" class="relative bg-white rounded-2xl shadow-2xl w-full max-w-md mx-4 p-6 transform transition-all">
            {{-- Icon Peringatan --}}
            <div class="mx-auto w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
            
            <h3 class="text-xl font-bold text-gray-900 text-center mb-2">Hapus Data?</h3>
            
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <button onclick="closeDeleteModal()" class="w-full sm:w-auto px-6 py-3 bg-white border border-gray-300 text-gray-700 font-semibold rounded-xl hover:bg-gray-50 transition-colors">
                    Batal
                </button>
                <button onclick="confirmDelete()" class="w-full sm:w-auto px-6 py-3 bg-red-500 text-white font-semibold rounded-xl hover:bg-red-600 transition-colors shadow-lg shadow-red-500/30">
                    Ya, Hapus
                </button>
            </div>
        </div>
    </div>

    {{-- MOBILE MENU TOGGLE --}}
    <button onclick="toggleMobileMenu()" class="md:hidden fixed bottom-6 right-6 w-14 h-14 bg-primary text-white rounded-full shadow-2xl flex items-center justify-center z-50 hover:scale-110 transition-transform">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>

    {{-- MOBILE SIDEBAR OVERLAY --}}
    <div id="mobile-sidebar" class="fixed inset-0 z-40 hidden">
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" onclick="toggleMobileMenu()"></div>
        <div class="absolute left-0 top-0 h-full w-72 bg-gradient-to-b from-primary via-blue-400 to-white text-white shadow-2xl transform -translate-x-full transition-transform duration-300 flex flex-col" id="mobile-sidebar-content">
            <div class="p-6 flex items-center gap-4 border-b border-white/10 shrink-0">
                <img src="{{ asset('images/logo-header.png') }}" onerror="this.style.display='none'" alt="Logo" class="w-14 h-14 object-contain drop-shadow-md shrink-0">
                <div class="leading-tight">
                    <h1 class="font-bold text-xl tracking-wide text-white">Arsip Kota Yogyakarta</h1>
                    <p class="text-[10px] text-accent font-bold uppercase tracking-wider mt-0.5">Dinas Perpustakaan & Kearsipan</p>
                </div>
            </div>
            <nav class="flex-1 overflow-y-auto hide-scrollbar py-6 px-4 space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 rounded-xl font-medium">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/></svg>
                    Beranda
                </a>
                <a href="{{ route('arsip.tekstual') }}" class="flex items-center gap-3 px-4 py-3 bg-white text-primary rounded-xl font-bold shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Arsip Tekstual
                </a>
                
                <a href="{{ route('arsip.foto') }}" class="flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 rounded-xl font-medium transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    Arsip Foto
                </a>
                <a href="{{ route('arsip.cd-dvd') }}" class="flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 rounded-xl font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    Arsip CD-DVD
                </a>
                <a href="{{ route('arsip.kartografi') }}" class="flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 rounded-xl font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0121 18.382V7.618a1 1 0 01-.806-.984A11.964 11.964 0 0015 7m0 13V7m0 0a11.964 11.964 0 00-6-3.016"/></svg>
                    Arsip Kartografi
                </a>
                <a href="{{ route('profil') }}" class="flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 rounded-xl font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Profil
                </a>
            </nav>
            <div class="p-4 mt-auto shrink-0">
                <a href="{{ route('home') }}" class="flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-50 hover:text-red-600 rounded-xl font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    Keluar
                </a>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
        }

        function toggleMobileMenu() {
            const sidebar = document.getElementById('mobile-sidebar');
            const content = document.getElementById('mobile-sidebar-content');
            if (sidebar.classList.contains('hidden')) {
                sidebar.classList.remove('hidden');
                setTimeout(() => content.classList.remove('-translate-x-full'), 10);
            } else {
                content.classList.add('-translate-x-full');
                setTimeout(() => sidebar.classList.add('hidden'), 300);
            }
        }

        // FUNGSI POPUP HAPUS
        function openDeleteModal() {
            const modal = document.getElementById('delete-modal');
            modal.classList.remove('hidden');
            // Sedikit delay agar transisi CSS berjalan mulus
            setTimeout(() => {
                modal.classList.remove('opacity-0');
            }, 10);
        }

        function closeDeleteModal() {
            const modal = document.getElementById('delete-modal');
            modal.classList.add('opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        function confirmDelete() {
            // Di sini nanti tambahkan logika hapus data ke backend
            alert('Data berhasil dihapus! (Simulasi)');
            closeDeleteModal();
        }

        // Tutup modal dengan tombol Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeDeleteModal();
            }
        });
    </script>
</body>
</html>