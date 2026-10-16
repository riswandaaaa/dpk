<nav class="fixed top-0 w-full z-50 bg-primary shadow-lg transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center h-16 sm:h-[70px]">
        
        {{-- LOGO & BRAND (SELALU MUNCUL) --}}
        <a href="#beranda" class="flex items-center gap-3 sm:gap-4 group min-w-0">
            {{-- LOGO GAMBAR (Responsif: 36px di HP, 48px di Tablet+) --}}
            <div class="w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center overflow-hidden shrink-0 group-hover:scale-105 transition-transform duration-300">
                <img 
                    src="{{ asset('images/logo-header.png') }}" 
                    onerror="this.style.display='none'"
                    alt="Logo Arsip Jogja" 
                    class="w-full h-full object-contain drop-shadow-sm"
                >
            </div>
            
            {{-- TEKS BRAND (Font Dinamis) --}}
            <div class="text-white leading-tight min-w-0">
                {{-- Judul: text-xs (12px) di HP, text-base (16px) di Tablet+ --}}
                <span class="font-bold block text-xs sm:text-base tracking-wide truncate">Arsip Jogja</span>
                
                {{-- Subjudul: text-[7px] di HP, text-[10px] di Tablet+ --}}
                <span class="text-accent font-medium block text-[7px] sm:text-[10px] uppercase tracking-wider opacity-90 truncate">
                    Dinas Perpustakaan & Kearsipan
                </span>
            </div>
        </a>

        {{-- DESKTOP MENU (Hanya muncul di layar medium ke atas) --}}
        <div class="hidden md:flex space-x-6 lg:space-x-8 items-center">
            <a href="#beranda" class="nav-link text-white/90 hover:text-white text-sm font-medium transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Beranda</a>
            <a href="#tentang" class="nav-link text-white/90 hover:text-white text-sm font-medium transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Tentang</a>
            <a href="#pameran" class="nav-link text-white/90 hover:text-white text-sm font-medium transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Pameran</a>
            <a href="#layanan-arsip" class="nav-link text-white/90 hover:text-white text-sm font-medium transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Layanan Arsip</a>
            <a href="#kontak" class="nav-link text-white/90 hover:text-white text-sm font-medium transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Kontak</a>
            
            <a href="{{ route('masuk') }}" class="ml-2 lg:ml-4 bg-white text-primary px-4 lg:px-6 py-2 rounded-lg text-xs lg:text-sm font-bold hover:bg-accent hover:text-darkblue transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 whitespace-nowrap">
                Masuk
            </a>
        </div>

        {{-- MOBILE TOGGLE BUTTON --}}
        <button onclick="toggleMenu()" class="md:hidden text-white focus:outline-none p-2 hover:bg-white/10 rounded-lg transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </div>

    {{-- MOBILE MENU DROPDOWN --}}
    <div id="mobile-menu" class="hidden md:hidden bg-primary border-t border-white/10 pb-4 shadow-xl max-h-[80vh] overflow-y-auto">
        <div class="px-4 py-3 space-y-1">
            <a href="#beranda" class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg text-sm font-medium mobile-link transition">Beranda</a>
            <a href="#tentang" class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg text-sm font-medium mobile-link transition">Tentang</a>
            <a href="#pameran" class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg text-sm font-medium mobile-link transition">Pameran</a>
            <a href="#layanan-arsip" class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg text-sm font-medium mobile-link transition">Layanan Arsip</a>
            <a href="#kontak" class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg text-sm font-medium mobile-link transition">Kontak</a>
        </div>
        <div class="px-4 pt-2">
            <a href="{{ route('masuk') }}" class="block w-full text-center bg-white text-primary py-3 rounded-lg font-bold text-sm hover:bg-accent hover:text-darkblue transition shadow-md">Masuk</a>
        </div>
    </div>
</nav>

{{-- Spacer agar konten tidak tertutup navbar fixed --}}
<div class="h-16 sm:h-[70px]"></div>