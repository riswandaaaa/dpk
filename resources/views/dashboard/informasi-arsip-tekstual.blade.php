<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Arsip Tekstual - Arsip Kota Yogyakarta Dashboard</title>
    
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
                        btnDark: '#2C3E18',
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
        
        /* Modal Transitions */
        #edit-modal { transition: opacity 0.3s ease; }
        #edit-modal.hidden { opacity: 0; pointer-events: none; }
        #edit-modal:not(.hidden) { opacity: 1; pointer-events: auto; }
        #edit-modal-content { transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1); }
        #edit-modal.hidden #edit-modal-content { transform: scale(0.95); }
        #edit-modal:not(.hidden) #edit-modal-content { transform: scale(1); }
    </style>
</head>
<body class="bg-gray-100 h-screen overflow-hidden flex">

    {{-- SIDEBAR KIRI --}}
    <aside id="sidebar" class="hidden md:flex flex-col w-72 bg-gradient-to-b from-primary via-blue-400 to-white text-white h-full fixed left-0 top-0 z-30 shadow-xl overflow-hidden">
        <div class="logo-container p-6 flex items-center gap-3 border-b border-white/10 shrink-0">
                <img src="{{ asset('images/logo-header.png') }}" onerror="this.style.display='none'" alt="Logo" class="w-10 h-10 object-contain drop-shadow-md shrink-0">
            <div class="flex flex-col leading-tight sidebar-text">
                <h1 class="font-bold text-base tracking-wide text-white">Arsip Kota Yogyakarta</h1>
                <p class="text-[9px] text-accent font-semibold uppercase tracking-wider mt-0.5">Dinas Perpustakaan & Kearsipan</p>
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
            
            <a href="#" class="menu-item flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 hover:text-white rounded-xl font-medium transition-all group">
                <svg class="menu-icon w-5 h-5 shrink-0 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                <span class="sidebar-text whitespace-nowrap">Arsip Foto</span>
            </a>

            <a href="#" class="menu-item flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 hover:text-white rounded-xl font-medium transition-all group">
                <svg class="menu-icon w-5 h-5 shrink-0 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                <span class="sidebar-text whitespace-nowrap">Arsip CD-DVD</span>
            </a>

            <a href="#" class="menu-item flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 hover:text-white rounded-xl font-medium transition-all group">
                <svg class="menu-icon w-5 h-5 shrink-0 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0121 18.382V7.618a1 1 0 01-.806-.984A11.964 11.964 0 0015 7m0 13V7m0 0a11.964 11.964 0 00-6-3.016"/></svg>
                <span class="sidebar-text whitespace-nowrap">Arsip Kartografi</span>
            </a>

            <a href="#" class="menu-item flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 hover:text-white rounded-xl font-medium transition-all group">
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
                <h2 class="text-xl font-bold text-white">Informasi Arsip Tekstual</h2>
            </div>

            <div class="flex items-center gap-4">
                {{-- LOGO PROFIL PENGGANTI AVATAR DESKTOP --}}
                <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-white/50 shadow-md cursor-pointer shrink-0 bg-white flex items-center justify-center">
                    <img src="{{ asset('images/logo-header.png') }}" alt="Foto Profil" class="w-full h-full object-cover">
                </div>
            </div>
        </header>

        {{-- ISI HALAMAN DETAIL (READONLY) --}}
        <div class="p-4 lg:p-8 max-w-6xl mx-auto fade-in">
            
            {{-- CARD DETAIL --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                
                {{-- Header Card --}}
                <div class="px-6 py-5 border-b border-gray-200 flex items-center gap-2">
                    <h3 class="text-base font-semibold text-gray-800">Informasi Arsip Tekstual</h3>
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </div>

                {{-- Readonly Fields --}}
                <div class="p-6 lg:p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                        
                        {{-- Kolom Kiri --}}
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor Arsip</label>
                                <input type="text" value="#000001" readonly 
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-700 focus:outline-none cursor-not-allowed">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Uraian</label>
                                <input type="text" value="Prasasti Peninggalan Mataram" readonly 
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-700 focus:outline-none cursor-not-allowed">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Kurun Waktu</label>
                                <input type="text" value="Abad ke 3" readonly 
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-700 focus:outline-none cursor-not-allowed">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Tingkat Perkembangan</label>
                                <input type="text" value="Masih dalam penelitian lebih lanjut" readonly 
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-700 focus:outline-none cursor-not-allowed">
                            </div>
                        </div>

                        {{-- Kolom Kanan --}}
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Kondisi</label>
                                <input type="text" value="Bagus" readonly 
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-700 focus:outline-none cursor-not-allowed">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Jumlah</label>
                                <input type="text" value="1" readonly 
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-700 focus:outline-none cursor-not-allowed">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">OPD</label>
                                <input type="text" value="Dinas daerah" readonly 
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-700 focus:outline-none cursor-not-allowed">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Lokasi Simpan</label>
                                <input type="text" value="Gedung A" readonly 
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-700 focus:outline-none cursor-not-allowed">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Tombol Aksi --}}
            <div class="mt-8 flex flex-col sm:flex-row justify-end gap-4">
                <a href="{{ route('arsip.tekstual') }}" class="w-full sm:w-auto px-8 py-3 bg-white border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-colors text-center shadow-sm">
                    Kembali
                </a>
                <button onclick="openEditModal()" class="w-full sm:w-auto px-8 py-3 bg-btnDark text-white font-semibold rounded-lg hover:bg-opacity-90 transition-colors text-center shadow-sm">
                    Edit
                </button>
            </div>

        </div>
    </main>

    {{-- MODAL EDIT ARSIP TEKSTUAL --}}
    <div id="edit-modal" class="fixed inset-0 z-[60] hidden flex items-center justify-center p-4">
        {{-- Backdrop Blur --}}
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeEditModal()"></div>
        
        {{-- Modal Content --}}
        <div id="edit-modal-content" class="relative bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto transform transition-all">
            
            {{-- Modal Header --}}
            <div class="px-6 py-5 border-b border-gray-200 flex items-center gap-2 sticky top-0 bg-white z-10">
                <h3 class="text-base font-semibold text-gray-800">Edit Arsip Tekstual</h3>
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </div>

            {{-- Form Edit --}}
            <form action="#" method="POST" class="p-6 lg:p-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                    
                    {{-- Kolom Kiri --}}
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor Arsip</label>
                            <input type="text" name="nomor_arsip" value="#000001" placeholder="Masukan nomor arsip"
                                   class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Uraian</label>
                            <input type="text" name="uraian" value="Prasasti Peninggalan Mataram" placeholder="Isi uraian"
                                   class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Kurun Waktu</label>
                            <input type="text" name="kurun_waktu" value="Abad ke 3" placeholder="Masukan kurun waktu"
                                   class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Tingkat Perkembangan</label>
                            <input type="text" name="tingkat_perkembangan" value="Masih dalam penelitian lebih lanjut" placeholder="Masukan tingkat perkembangan"
                                   class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                    </div>

                    {{-- Kolom Kanan --}}
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Kondisi</label>
                            <input type="text" name="kondisi" value="Bagus" placeholder="Masukan kondisi"
                                   class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Jumlah</label>
                            <input type="number" name="jumlah" value="1" placeholder="Masukan jumlah" min="1"
                                   class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">OPD</label>
                            <input type="text" name="opd" value="Dinas daerah" placeholder="Masukan OPD"
                                   class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Lokasi Simpan</label>
                            <input type="text" name="lokasi_simpan" value="Gedung A" placeholder="Isi lokasi simpan"
                                   class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                    </div>

                </div>

                {{-- Tombol Aksi Modal --}}
                <div class="mt-8 flex flex-col sm:flex-row justify-end gap-4 pt-4 border-t border-gray-100">
                    <button type="button" onclick="closeEditModal()" class="w-full sm:w-auto px-8 py-3 bg-white border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-colors text-center shadow-sm">
                        Batal
                    </button>
                    <button type="submit" class="w-full sm:w-auto px-8 py-3 bg-btnDark text-white font-semibold rounded-lg hover:bg-opacity-90 transition-colors text-center shadow-sm">
                        Simpan
                    </button>
                </div>
            </form>
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
           <div class="p-6 flex items-center gap-3 border-b border-white/10 shrink-0">
                    <img src="{{ asset('images/logo-header.png') }}" onerror="this.style.display='none'" alt="Logo" class="w-10 h-10 object-contain drop-shadow-md shrink-0">
                <div class="flex flex-col leading-tight">
                    <h1 class="font-bold text-base tracking-wide text-white">Arsip Kota Yogyakarta</h1>
                    <p class="text-[9px] text-accent font-semibold uppercase tracking-wider mt-0.5">Dinas Perpustakaan & Kearsipan</p>
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
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 rounded-xl font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    Arsip Foto
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 rounded-xl font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    Arsip CD-DVD
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 rounded-xl font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0121 18.382V7.618a1 1 0 01-.806-.984A11.964 11.964 0 0015 7m0 13V7m0 0a11.964 11.964 0 00-6-3.016"/></svg>
                    Arsip Kartografi
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 rounded-xl font-medium">
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

        // FUNGSI MODAL EDIT
        function openEditModal() {
            const modal = document.getElementById('edit-modal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Mencegah scroll background
            setTimeout(() => {
                modal.classList.remove('opacity-0');
            }, 10);
        }

        function closeEditModal() {
            const modal = document.getElementById('edit-modal');
            modal.classList.add('opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = ''; // Mengembalikan scroll
            }, 300);
        }

        // Tutup modal dengan tombol Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !document.getElementById('edit-modal').classList.contains('hidden')) {
                closeEditModal();
            }
        });
    </script>
</body>
</html>