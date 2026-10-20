<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Arsip Kota Yogyakarta')</title>
    
    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0069D4',
                        accent: '#C8E900',
                        darkblue: '#0069D4',
                    },
                    fontFamily: { sans: ['Inter', 'sans-serif'] }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        
        /* Animasi Fade In */
        .fade-in { animation: fadeIn 0.6s ease-out forwards; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(15px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-gray-50 h-screen overflow-hidden">

    <div class="flex h-full w-full">
        
        {{-- BAGIAN KIRI (BRANDING & TAGLINE) --}}
        <div class="hidden lg:flex flex-col justify-center items-center w-1/2 bg-gradient-to-br from-primary to-darkblue relative p-12 text-white overflow-hidden">
            
            {{-- Hiasan Background Abstrak Halus --}}
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <div class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
            </div>

            {{-- Emblem Besar --}}
            <div class="mb-8 z-10 drop-shadow-2xl fade-in">
                <img src="{{ asset('images/logo-jogja.png') }}" onerror="this.src='https://via.placeholder.com/200x200/transparent/ffffff?text=EMBLEM'" alt="Emblem DPK" class="w-48 h-48 object-contain">
            </div>

            {{-- Tagline --}}
            <div class="text-center z-10 max-w-lg fade-in" style="animation-delay: 0.2s">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                    Setiap Arsip Menyimpan<br>
                    <span class="text-accent">Sepenggal Ingatan Kota</span>
                </h1>
                <p class="text-white/80 text-sm md:text-base leading-relaxed">
                    Telusuri, ajukan peminjaman, dan pelajari arsip statis milik Pemerintah Kota Yogyakarta — mulai dari naskah tekstual, foto, rekaman, hingga peta kartografi.
                </p>
            </div>
        </div>

        {{-- BAGIAN KANAN (FORM AREA) --}}
        <div class="w-full lg:w-1/2 relative flex items-center justify-center p-6 sm:p-12">
            
            {{-- Background Image Buram (Hanya muncul di Desktop/Tablet besar) --}}
            <div class="absolute inset-0 z-0 hidden lg:block overflow-hidden">
                {{-- Ganti URL ini dengan foto kegiatan asli jika ada --}}
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2070&auto=format&fit=crop" 
                     alt="Background Kegiatan" 
                     class="w-full h-full object-cover opacity-60 blur-md scale-110">
                <div class="absolute inset-0 bg-white/30"></div> {{-- Overlay putih tipis agar card terbaca --}}
            </div>

            {{-- Card Form --}}
            <div class="bg-white w-full max-w-md rounded-[2rem] shadow-2xl p-8 sm:p-10 relative z-10 fade-in">
                
                {{-- Logo Kecil di Atas Form --}}
                <div class="flex flex-col items-center mb-8">
                    <img 
                     src="{{ asset('images/logo-header.png') }}" 
                    onerror="this.style.display='none'" 
                    alt="Logo Arsip Jogja" 
                    class="w-16 h-16 mb-3 drop-shadow-md object-contain"
                    >
                     <h2 class="text-xl font-bold text-gray-900 tracking-wide">Arsip Kota Yogyakarta</h2>
                    <p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Dinas Perpustakaan & Kearsipan</p>
                </div>

                {{-- KONTEN FORM DINAMIS --}}
                @yield('auth-content')

            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>