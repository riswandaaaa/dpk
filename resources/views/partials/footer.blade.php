<footer id="kontak" class="bg-darkblue text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-10 mb-12">
        <!-- Brand Info -->
        <div>
            <div class="flex items-center gap-3 mb-4">
                <div class="w-17 h-17 flex items-center justify-center overflow-hidden group-hover:scale-105 transition-transform duration-300">
                    <img 
                    src="{{ asset('images/logo-header.png') }}" 
                    onerror="this.style.display='none'"
                    alt="Logo Arsip Jogja" 
                    class="w-full h-full object-contain drop-shadow-sm"
                    >
                 </div>
                <div>
                    <h3 class="font-bold text-lg">Arsip Kota Yogyakarta</h3>
                    <p class="text-accent text-[10px]">Dinas Perpustakaan & Kearsipan</p>
                </div>
            </div>
            <p class="text-white/60 text-sm leading-relaxed max-w-xs">
                Menjaga Arsip, Merawat Sejarah, dan Membangun Masa Depan Yogyakarta yang Lebih Baik.
            </p>
        </div>

        <!-- Tautan Navigasi -->
        <div>
            <h4 class="font-bold text-base mb-4">Tautan</h4>
            <ul class="space-y-2 text-sm text-white/70">
                <li><a href="#beranda" class="hover:text-accent transition">Beranda</a></li>
                <li><a href="#tentang" class="hover:text-accent transition">Tentang</a></li>
                <li><a href="#pameran" class="hover:text-accent transition">Pameran</a></li>
                <li><a href="#layanan-arsip" class="hover:text-accent transition">Layanan Arsip</a></li>
                <li><a href="#kontak" class="hover:text-accent transition">Kontak</a></li>
            </ul>
        </div>

        <!-- Kontak & Sosmed -->
        <div>
            <h4 class="font-bold text-base mb-4">Kontak</h4>
            <ul class="space-y-3 text-sm text-white/70">
                <li class="flex items-center gap-3">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    info@kronix.com
                </li>
                <li class="flex items-center gap-3">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    (001) 1231 3435
                </li>
            </ul>
            <div class="flex gap-3 mt-6">
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent hover:text-darkblue transition">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                </a>
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent hover:text-darkblue transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke-width="2"/><circle cx="12" cy="12" r="4" stroke-width="2"/></svg>
                </a>
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent hover:text-darkblue transition">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-4 0v7h-4v-7a6 6 0 016-6zM2 9h4v12H2zM4 6a2 2 0 100-4 2 2 0 000 4z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Copyright Bar -->
    <div class="border-t border-white/10 pt-6">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-xs text-white/40">
            <p>&copy; 2026 DPK - All Right Reserved</p>
            <div class="flex gap-4 mt-2 md:mt-0">
                <a href="#" class="hover:text-white transition">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white transition">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>