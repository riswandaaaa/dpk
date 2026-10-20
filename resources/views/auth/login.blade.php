@extends('layouts.auth')
@section('title', 'Login - Arsip Kota Yogyakarta')

@section('auth-content')
    <div class="text-left mb-8 px-2">
        <h1 class="text-3xl font-bold text-gray-900 mb-3">Login</h1>
        <p class="text-sm text-gray-500 leading-relaxed">
            Silahkan masukan email & kata sandi untuk akses fitur yang tersedia dalam sistem informasi arsip dan perpustakaan yogyakarta
        </p>
    </div>

    <form action="#" method="POST" class="space-y-5">
        @csrf
        
        {{-- Input Email --}}
        <div class="relative group">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <input type="email" name="email" placeholder="Masukan Email Anda" required autocomplete="off"
                   class="w-full pl-12 pr-4 py-4 bg-white border border-gray-200 rounded-xl text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm hover:border-gray-300 text-sm">
        </div>

        {{-- Input Password DENGAN TOGGLE MATA --}}
        <div class="relative group">
            {{-- Ikon Gembok Kiri --}}
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
            </div>
            
            <input type="password" name="password" id="login-password" placeholder="Masukan Kata Sandi Anda" required
                   class="w-full pl-12 pr-12 py-4 bg-white border border-gray-200 rounded-xl text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm hover:border-gray-300 text-sm">
            
            {{-- Tombol Mata Kanan --}}
            <button type="button" onclick="togglePassword('login-password', this)" 
                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-primary transition-colors focus:outline-none cursor-pointer">
                {{-- Icon Mata Terbuka (Default) --}}
                <svg class="w-5 h-5 eye-open" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                {{-- Icon Mata Tertutup (Hidden by default) --}}
                <svg class="w-5 h-5 eye-closed hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/></svg>
            </button>
        </div>

        {{-- Link Lupa Password --}}
        <div class="flex justify-end -mt-2">
            <a href="{{ route('password.request') }}" class="text-sm font-medium text-gray-600 hover:text-primary transition-colors">
                Lupa Kata Sandi?
            </a>
        </div>

        {{-- Tombol Masuk --}}
        <button type="submit" class="w-full bg-[#1a1a1a] text-white font-bold py-4 rounded-xl hover:bg-black transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 mt-2">
            Masuk
        </button>
    </form>
@endsection

{{-- Script Toggle Password Khusus Login --}}
@push('scripts')
<script>
    function togglePassword(inputId, btn) {
        const input = document.getElementById(inputId);
        const eyeOpen = btn.querySelector('.eye-open');
        const eyeClosed = btn.querySelector('.eye-closed');
        
        if (input.type === 'password') {
            input.type = 'text';
            eyeOpen.classList.add('hidden');
            eyeClosed.classList.remove('hidden');
        } else {
            input.type = 'password';
            eyeOpen.classList.remove('hidden');
            eyeClosed.classList.add('hidden');
        }
    }
</script>
@endpush