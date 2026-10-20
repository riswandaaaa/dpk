@extends('layouts.auth')
@section('title', 'Verifikasi OTP - Arsip Kota Yogyakarta')

@section('auth-content')
    <div class="text-left mb-8 px-2">
        <h1 class="text-3xl font-bold text-gray-900 mb-3">Lupa Kata Sandi</h1>
        <p class="text-sm text-gray-500 leading-relaxed">
            Silahkan masukkan 6 digit kode OTP yang telah dikirim ke email Anda
        </p>
    </div>

    <form action="{{ route('password.reset') }}" method="GET" class="space-y-8">
        @csrf
        
        {{-- 6 Kotak Input OTP --}}
        <div class="flex justify-between gap-2" id="otp-container">
            @for($i = 0; $i < 6; $i++)
            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" 
                   class="otp-input w-12 h-14 sm:w-14 sm:h-16 text-center text-2xl font-bold bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm"
                   oninput="moveToNext(this, {{ $i }})" 
                   onkeydown="handleBackspace(event, {{ $i }})">
            @endfor
        </div>

        {{-- Tombol Selanjutnya --}}
        <button type="submit" class="w-full bg-[#1a1a1a] text-white font-bold py-4 rounded-xl hover:bg-black transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
            Selanjutnya
        </button>
    </form>
@endsection

@push('scripts')
<script>
    // Logika Auto-Focus OTP
    function moveToNext(element, index) {
        element.value = element.value.replace(/[^0-9]/g, '');
        if (element.value.length === 1) {
            const inputs = document.querySelectorAll('.otp-input');
            if (index < inputs.length - 1) inputs[index + 1].focus();
        }
    }

    function handleBackspace(event, index) {
        if (event.key === 'Backspace') {
            const inputs = document.querySelectorAll('.otp-input');
            if (index > 0 && inputs[index].value === '') inputs[index - 1].focus();
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        const firstInput = document.querySelector('.otp-input');
        if(firstInput) firstInput.focus();
    });
</script>
@endpush