@extends('layouts.app')
@section('content')

{{-- HERO SECTION --}}
<section id="beranda" class="relative bg-gradient-to-br from-primary to-darkblue py-20 md:py-32 text-center px-4 overflow-hidden">
    <div class="max-w-4xl mx-auto relative z-10">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight">
            Setiap Arsip Menyimpan<br><span class="text-accent">Sepenggal Ingatan Kota</span>
        </h1>
        <p class="text-white/80 text-sm md:text-base mb-10 max-w-2xl mx-auto">
            Telusuri, ajukan peminjaman, dan pelajari arsip statis milik Pemerintah Kota Yogyakarta — mulai dari naskah tekstual, foto, rekaman, hingga peta kartografi.
        </p>
        
        {{-- SEARCH BAR RESPONSIF (LEBIH RAMPING) --}}
        <form action="#" method="GET" class="w-full max-w-2xl mx-auto bg-white rounded-2xl shadow-2xl p-1.5 flex flex-col sm:flex-row gap-1.5 focus-within:ring-4 focus-within:ring-accent/30 transition-all duration-300 border border-transparent focus-within:border-accent/50">
            
            {{-- Input Field --}}
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input 
                    type="text" 
                    name="q" 
                    placeholder="Cari judul, Nomor arsip atau Tahun Arsip........" 
                    class="w-full pl-12 pr-4 py-3 bg-transparent text-gray-700 placeholder-gray-400 focus:outline-none text-sm rounded-xl"
                >
            </div>

            {{-- Tombol Cari --}}
            <button 
                type="submit" 
                class="w-full sm:w-auto px-6 py-3 bg-accent text-darkblue font-bold rounded-xl hover:bg-yellow-300 transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 flex items-center justify-center gap-2 whitespace-nowrap"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <span>Cari Arsip</span>
            </button>
            
        </form>
    </div>
</section>

{{-- STATS SECTION (ID: TENTANG) --}}
<section id="tentang" class="bg-darkblue py-12">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <div class="flex items-center justify-center gap-4 mb-8">
            <div class="h-[2px] w-10 bg-accent"></div>
            <span class="text-accent text-xs font-bold tracking-widest uppercase">Mulai Jelajahi Arsip Kota</span>
            <div class="h-[2px] w-10 bg-accent"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div><div class="text-3xl md:text-5xl font-bold text-white mb-2">18.400+</div><div class="text-accent text-xs md:text-sm font-semibold">Arsip tekstual terdata</div></div>
            <div><div class="text-3xl md:text-5xl font-bold text-white mb-2">6.750+</div><div class="text-accent text-xs md:text-sm font-semibold">Foto & Dokumentasi</div></div>
            <div><div class="text-3xl md:text-5xl font-bold text-white mb-2">1.240+</div><div class="text-accent text-xs md:text-sm font-semibold">Peta & Kartografi</div></div>
            <div><div class="text-3xl md:text-5xl font-bold text-white mb-2">350+</div><div class="text-accent text-xs md:text-sm font-semibold">Permohonan Di Proses / Tahun</div></div>
        </div>
    </div>
</section>

{{-- ABOUT SECTION --}}
<section class="bg-primary py-16 md:py-24">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
        <div class="w-64 h-64 md:w-80 md:h-80 flex-shrink-0">
            <img src="{{ asset('images/logo-jogja.png') }}" onerror="this.src='https://via.placeholder.com/300x300/004B87/C8E900?text=EMBLEM'" alt="Emblem DPK" class="w-full h-full object-contain drop-shadow-lg">
        </div>
        <div class="text-center md:text-left">
            <h2 class="text-2xl md:text-4xl font-extrabold text-white mb-4 leading-tight">APA ITU DINAS ARSIP &<br><span class="text-accent">PERPUSTAKAAN</span></h2>
            <!-- Garis pemisah dihapus sesuai permintaan sebelumnya -->
            <p class="text-white/80 text-sm md:text-base leading-relaxed mb-8 max-w-lg">
                Dinas Kearsipan dan Perpustakaan Kota Yogyakarta (DPK Kota Yogyakarta) adalah Organisasi Perangkat Daerah (OPD) di lingkungan Pemerintah Kota Yogyakarta yang bertugas mengelola urusan kearsipan dan perpustakaan. Dinas ini berperan dalam menjaga arsip pemerintahan sekaligus meningkatkan budaya literasi masyarakat.
            </p>
            <!-- Link diubah menjadi anchor #tentang agar tidak reload -->
            <a href="#tentang" class="inline-block bg-accent text-darkblue font-bold px-6 py-3 rounded-lg hover:bg-yellow-300 transition shadow-lg text-sm">Selengkapnya...</a>
        </div>
    </div>
</section>

{{-- PAMERAN SECTION --}}
<section id="pameran" class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-3">Pameran & <span class="text-primary">Koleksi Terbaru</span></h2>
            <p class="text-gray-500 text-sm">Kegiatan yang telah dilaksanakan oleh dinas perpustakaan dan arsip jogjakarta</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
            @for($i = 1; $i <= 6; $i++)
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gray-200">
                    <img src="https://via.placeholder.com/600x400/e2e8f0/94a3b8?text=Pameran+{{ $i }}" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <span class="text-[10px] font-bold text-primary bg-blue-50 px-2 py-1 rounded uppercase tracking-wide">Jenis Arsip</span>
                    <h3 class="font-bold text-gray-900 mt-2 mb-2 text-base line-clamp-2">Proses pelayanan kearsipan......</h3>
                    <p class="text-gray-500 text-xs line-clamp-2">proses pelayanan dan juga pendampingan kepada masyarakat....</p>
                </div>
            </div>
            @endfor
        </div>
        <div class="text-center">
            <a href="#pameran" class="inline-flex items-center px-8 py-3 border-2 border-primary text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition text-sm">
                Lihat Semua
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- LAYANAN ARSIP MULTI-STEP FORM --}}
<!-- PERBAIKAN: Hanya gunakan satu ID 'layanan-arsip', hapus 'layanan-section' -->
<section id="layanan-arsip" class="bg-gradient-to-br from-primary to-darkblue py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4">
        
        {{-- Header Section --}}
        <div class="text-center mb-10">
            <div class="flex items-center justify-center gap-4 mb-4">
                <div class="h-[2px] w-10 bg-accent"></div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white">Layanan <span class="text-accent">Arsip</span></h2>
                <div class="h-[2px] w-10 bg-accent"></div>
            </div>
            <p class="text-white/70 text-sm max-w-2xl mx-auto">
                Selamat datang di Layanan Arsip. Silakan lengkapi data identitas dan detail arsip yang Anda perlukan.
            </p>
        </div>

        {{-- Main Card Container --}}
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden relative min-h-[500px]">
            
            {{-- Step Indicator --}}
            <div class="flex items-center gap-3 px-6 py-4 bg-gray-50 border-b border-gray-100 sticky top-0 z-10">
                <div class="flex items-center gap-2 transition-opacity duration-300" id="indikator-step-1">
                    <span class="w-7 h-7 rounded-full bg-primary text-white flex items-center justify-center text-xs font-bold ring-2 ring-accent ring-offset-2">1</span>
                    <span class="text-sm font-bold text-gray-900">Identitas Pengguna Arsip</span>
                </div>
                
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                
                <div class="flex items-center gap-2 opacity-50 transition-opacity duration-300" id="indikator-step-2">
                    <span class="w-7 h-7 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center text-xs font-bold">2</span>
                    <span class="text-sm font-medium text-gray-500">Arsip yang Diperlukan</span>
                </div>
            </div>

            {{-- STEP 1: Identitas Pengguna --}}
            <div id="step-1-content" class="p-6 md:p-8 animate-fade-in">
                <form id="form-step-1" onsubmit="return false;">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nama</label>
                            <input type="text" id="input-nama" placeholder="Nama Lengkap" required
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor HP</label>
                            <input type="tel" id="input-hp" placeholder="08xx-xxxx-xxxx" required
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Pekerjaan</label>
                            <input type="text" id="input-pekerjaan" placeholder="Pekerjaan"
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Lembaga / Instansi</label>
                            <input type="text" id="input-lembaga" placeholder="Nama lembaga / Instansi"
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat</label>
                            <input type="text" id="input-alamat" placeholder="Alamat sesuai identitas"
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat Lembaga / Instansi</label>
                            <input type="text" id="input-alamat-lembaga" placeholder="Alamat lembaga atau instansi"
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        </div>
                    </div>

                    <div class="pt-6 mt-6 border-t border-gray-100">
                        <button type="button" onclick="goToStep2()" 
                                class="w-full bg-primary text-white font-bold py-3.5 rounded-lg hover:bg-darkblue transition shadow-lg text-sm tracking-wide flex items-center justify-center gap-2">
                            SELANJUTNYA
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </button>
                    </div>
                </form>
            </div>

            {{-- STEP 2: Arsip yang Diperlukan --}}
            <div id="step-2-content" class="p-6 md:p-8 hidden animate-fade-in">
                <form id="form-step-2" onsubmit="return false;">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Judul / Masalah</label>
                            <input type="text" placeholder="Judul / masalah arsip" 
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        </div>
                        <div class="relative">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Jenis Arsip</label>
                            <select class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition appearance-none bg-white cursor-pointer">
                                <option value="" disabled selected>Pilih jenis arsip</option>
                                <option>Arsip Tekstual</option>
                                <option>Foto & Dokumentasi</option>
                                <option>Peta & Kartografi</option>
                                <option>Audio Visual</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500 mt-8 mr-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Jumlah</label>
                            <input type="number" placeholder="0" min="0"
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        </div>
                        <div class="relative">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Satuan</label>
                            <select class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition appearance-none bg-white cursor-pointer">
                                <option value="" disabled selected>Pilih satuan arsip</option>
                                <option>Lembar</option>
                                <option>Buku</option>
                                <option>Box</option>
                                <option>Roll</option>
                                <option>CD/DVD</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500 mt-8 mr-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </div>
                    </div>

                    {{-- Area Tanda Tangan --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                        <div class="border-2 border-dashed border-gray-300 rounded-xl p-4 flex flex-col items-center justify-between hover:border-primary transition bg-white h-48 relative group">
                            <p class="text-xs font-bold text-gray-700 uppercase tracking-wide">Tanda Tangan Pemohon</p>
                            <canvas id="ttd-pemohon" width="250" height="100" class="w-full h-full cursor-crosshair touch-none"></canvas>
                            <button type="button" onclick="clearCanvas('ttd-pemohon')" 
                                    class="absolute top-2 right-2 p-1.5 bg-red-50 text-red-500 rounded-md hover:bg-red-100 transition opacity-0 group-hover:opacity-100" title="Hapus Tanda Tangan">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            </button>
                        </div>

                        <div class="border-2 border-dashed border-gray-300 rounded-xl p-4 flex flex-col items-center justify-between hover:border-primary transition bg-white h-48 relative group">
                            <p class="text-xs font-bold text-gray-700 uppercase tracking-wide">Tanda Tangan Petugas</p>
                            <canvas id="ttd-petugas" width="250" height="100" class="w-full h-full cursor-crosshair touch-none"></canvas>
                            <button type="button" onclick="clearCanvas('ttd-petugas')" 
                                    class="absolute top-2 right-2 p-1.5 bg-red-50 text-red-500 rounded-md hover:bg-red-100 transition opacity-0 group-hover:opacity-100" title="Hapus Tanda Tangan">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            </button>
                        </div>
                    </div>

                    {{-- Action Buttons --}}
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4 border-t border-gray-100">
                        <button type="button" class="w-full sm:w-auto px-6 py-3 bg-yellow-400 text-darkblue font-bold rounded-lg hover:bg-yellow-300 transition shadow-md text-sm flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            PRATINJAU
                        </button>
                        <button type="button" class="w-full sm:w-auto px-6 py-3 bg-red-600 text-white font-bold rounded-lg hover:bg-red-700 transition shadow-md text-sm flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            CONVERT TO PDF
                        </button>
                        <button type="button" class="w-full sm:w-auto px-6 py-3 border border-gray-300 text-gray-600 font-bold rounded-lg hover:bg-gray-50 transition text-sm flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                            CETAK
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection

{{-- Script JavaScript untuk Multi-Step Logic & Signature Pad --}}
<script>
    // --- LOGIKA MULTI-STEP FORM ---
    function goToStep2() {
        const nama = document.getElementById('input-nama');
        const hp = document.getElementById('input-hp');
        
        let isValid = true;
        [nama, hp].forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('border-red-500', 'ring-2', 'ring-red-200');
                isValid = false;
                input.addEventListener('input', () => {
                    input.classList.remove('border-red-500', 'ring-2', 'ring-red-200');
                }, { once: true });
            }
        });

        if (isValid) {
            document.getElementById('step-1-content').classList.add('hidden');
            document.getElementById('step-2-content').classList.remove('hidden');
            
            // Update Indikator Step
            const ind1 = document.getElementById('indikator-step-1');
            const ind2 = document.getElementById('indikator-step-2');
            
            ind1.querySelector('span:first-child').className = "w-7 h-7 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-bold";
            ind1.querySelector('span:last-child').classList.remove('font-bold', 'text-gray-900');
            ind1.querySelector('span:last-child').classList.add('text-green-600');
            
            ind2.classList.remove('opacity-50');
            ind2.querySelector('span:first-child').className = "w-7 h-7 rounded-full bg-darkblue text-white flex items-center justify-center text-xs font-bold ring-2 ring-accent ring-offset-2";
            ind2.querySelector('span:last-child').classList.remove('font-medium', 'text-gray-500');
            ind2.querySelector('span:last-child').classList.add('font-bold', 'text-gray-900');
            
            // Scroll ke atas card layanan arsip
            document.getElementById('layanan-arsip').scrollIntoView({ behavior: 'smooth', block: 'start' });
        } else {
            alert("Mohon lengkapi Nama dan Nomor HP terlebih dahulu.");
        }
    }

    // --- LOGIKA TANDA TANGAN DIGITAL ---
    function initSignaturePad(canvasId) {
        const canvas = document.getElementById(canvasId);
        if (!canvas) return;
        
        const ctx = canvas.getContext('2d');
        let isDrawing = false;
        
        ctx.strokeStyle = '#004B87'; // Warna tinta biru tua
        ctx.lineWidth = 2;
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';
        
        // Mouse Events
        canvas.addEventListener('mousedown', startDrawing);
        canvas.addEventListener('mousemove', draw);
        canvas.addEventListener('mouseup', stopDrawing);
        canvas.addEventListener('mouseout', stopDrawing);
        
        // Touch Events
        canvas.addEventListener('touchstart', (e) => { e.preventDefault(); startDrawing(e.touches[0]); });
        canvas.addEventListener('touchmove', (e) => { e.preventDefault(); draw(e.touches[0]); });
        canvas.addEventListener('touchend', stopDrawing);
        
        function getPos(e) {
            const rect = canvas.getBoundingClientRect();
            const clientX = e.clientX || e.pageX;
            const clientY = e.clientY || e.pageY;
            return { x: clientX - rect.left, y: clientY - rect.top };
        }
        
        function startDrawing(e) {
            isDrawing = true;
            const pos = getPos(e);
            ctx.beginPath();
            ctx.moveTo(pos.x, pos.y);
        }
        
        function draw(e) {
            if (!isDrawing) return;
            const pos = getPos(e);
            ctx.lineTo(pos.x, pos.y);
            ctx.stroke();
        }
        
        function stopDrawing() {
            isDrawing = false;
            ctx.closePath();
        }
    }

    function clearCanvas(canvasId) {
        const canvas = document.getElementById(canvasId);
        const ctx = canvas.getContext('2d');
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }

    document.addEventListener('DOMContentLoaded', () => {
        initSignaturePad('ttd-pemohon');
        initSignaturePad('ttd-petugas');
    });
</script>

<style>
    .animate-fade-in { animation: fadeIn 0.4s ease-out forwards; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
</style>