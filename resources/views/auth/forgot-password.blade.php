@extends('layouts.auth')
@section('title', 'Lupa Kata Sandi - Arsip Kota Yogyakarta')

@section('auth-content')
    <div class="text-left mb-8 px-2">
        <h1 class="text-3xl font-bold text-gray-900 mb-3">Lupa Kata Sandi</h1>
        <p class="text-sm text-gray-500 leading-relaxed">
            Silahkan masukan email anda yang terdaftar sebagai admin pada sistem
        </p>
    </div>

    <form action="{{ route('password.verify') }}" method="GET" class="space-y-6">
        @csrf
        
        {{-- Input Email --}}
        <div class="relative group">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <input type="email" name="email" placeholder="Masukan Email Anda" required autocomplete="off"
                   class="w-full pl-12 pr-4 py-4 bg-white border border-gray-200 rounded-xl text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm hover:border-gray-300 text-sm">
        </div>

        {{-- Tombol Kirim OTP --}}
        <button type="submit" class="w-full bg-[#1a1a1a] text-white font-bold py-4 rounded-xl hover:bg-black transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 mt-2">
            Kirim kode OTP
        </button>
    </form>
@endsection