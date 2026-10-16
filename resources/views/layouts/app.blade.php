<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Jogja - Dinas Perpustakaan & Kearsipan</title>
    
    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0069D4',      /* Biru utama */
                        accent: '#C8E900',       /* Hijau lime */
                        darkblue: '#0069D4',     /* Versi gelap untuk gradient & footer */
                    },
                    fontFamily: { sans: ['Inter', 'sans-serif'] }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            overflow-y: scroll; 
        }

        /* SMOOTH SCROLL WAJIB ADA */
        html {
            scroll-behavior: smooth;
        }

        /* Mencegah judul section tertutup navbar fixed (tinggi navbar 64px + padding) */
        section[id] {
            scroll-margin-top: 80px;
        }

        /* Sembunyikan Scrollbar */
        ::-webkit-scrollbar { display: none; }
        html { -ms-overflow-style: none; scrollbar-width: none; }

        /* Animasi Fade In */
        .animate-fade-in {
            animation: fadeIn 0.4s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">
    @include('partials.navbar')
    <main>@yield('content')</main>
    @include('partials.footer')
    
    <script>
        function toggleMenu() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        }
        
        // Tutup menu mobile saat link anchor diklik
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });
    </script>
</body>
</html>