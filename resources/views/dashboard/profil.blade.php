<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Arsip Kota Yogyakarta Dashboard</title>
    
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
                        btnBlue: '#3B82F6', // Warna biru untuk tombol Edit Profil
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
        .fade-in { animation: fadeIn 0.4s ease-out forwards; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
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
            
            <a href="{{ route('arsip.tekstual') }}" class="menu-item flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 hover:text-white rounded-xl font-medium transition-all group">
                <svg class="menu-icon w-5 h-5 shrink-0 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
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

            {{-- MENU AKTIF: PROFIL --}}
            <a href="{{ route('profil') }}" class="menu-item flex items-center gap-3 px-4 py-3 bg-white text-primary rounded-xl font-bold shadow-sm transition-all transform scale-[1.02]">
                <svg class="menu-icon w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
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
                <h2 class="text-xl font-bold text-white">Profil</h2>
            </div>

            <div class="flex items-center gap-4">
                {{-- LOGO PROFIL PENGGANTI AVATAR DESKTOP --}}
                <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-white/50 shadow-md cursor-pointer shrink-0 bg-white flex items-center justify-center">
                    <img src="{{ asset('images/logo-header.png') }}" alt="Foto Profil" class="w-full h-full object-cover">
                </div>
            </div>
        </header>

        {{-- ISI HALAMAN PROFIL --}}
        <div class="p-4 lg:p-8 max-w-6xl mx-auto fade-in">
            
            {{-- CARD PROFIL --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                
                {{-- Tab Navigasi --}}
                <div class="border-b border-gray-200 px-6 pt-6">
                    <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                        <button class="border-b-2 border-darkblue pb-4 px-1 text-sm font-semibold text-gray-900">
                            Profil
                        </button>
                        <a href="{{ route('ubah.kata.sandi') }}" 
                            class="border-transparent pb-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                             Ubah Kata Sandi
                        </a>
                    </nav>
                </div>

                {{-- Form Fields (SEMUA INPUT BISA DIKETIK) --}}
                <form action="#" method="POST" class="p-6 lg:p-8">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                        
                        {{-- Kolom Kiri --}}
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                                <input type="text" name="nama" value="Admin123" 
                                       class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-btnBlue/20 focus:border-btnBlue transition-all">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                                <input type="text" name="alamat" value="Yogyakarta blablabla......" 
                                       class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-btnBlue/20 focus:border-btnBlue transition-all">
                            </div>
                        </div>

                        {{-- Kolom Kanan --}}
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" name="email" value="admin123@gmail.com" 
                                       class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-btnBlue/20 focus:border-btnBlue transition-all">
                            </div>
                            
                            {{-- KOLOM PASSWORD DENGAN ICON MATA --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                                <div class="relative">
                                    <input type="password" id="profile-password" name="password" value="*********" 
                                           class="w-full px-4 py-3 pr-12 bg-white border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-btnBlue/20 focus:border-btnBlue transition-all">
                                    
                                    <button type="button" onclick="toggleProfilePassword()" class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400 hover:text-gray-600 transition-colors">
                                        <svg id="eye-icon-profile" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        <svg id="eye-off-icon-profile" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="mt-8 flex justify-end">
                        <button type="submit" class="px-8 py-3 bg-btnBlue text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors text-center shadow-sm">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </main>

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
                <a href="{{ route('arsip.tekstual') }}" class="flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 rounded-xl font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Arsip Tekstual
                </a>
                <a href="{{ route('arsip.foto') }}" class="flex items-center gap-3 px-4 py-3 text-white/90 hover:bg-white/10 rounded-xl font-medium">
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
                <a href="{{ route('profil') }}" class="flex items-center gap-3 px-4 py-3 bg-white text-primary rounded-xl font-bold shadow-sm">
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

        // FUNGSI TOGGLE VISIBILITAS PASSWORD DI HALAMAN PROFIL
        function toggleProfilePassword() {
            const input = document.getElementById('profile-password');
            const eyeIcon = document.getElementById('eye-icon-profile');
            const eyeOffIcon = document.getElementById('eye-off-icon-profile');
            
            if (input.type === 'password') {
                input.type = 'text';
                eyeIcon.classList.add('hidden');
                eyeOffIcon.classList.remove('hidden');
            } else {
                input.type = 'password';
                eyeIcon.classList.remove('hidden');
                eyeOffIcon.classList.add('hidden');
            }
        }
    </script>
</body>
</html>