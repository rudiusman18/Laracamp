{{--
Catatan
Mobile Harus beda tampilan
--}}

<x-layout :title=$title>
    <x-background-blob></x-background-blob>
        <div class="flex w-full">

    {{-- Tampilan sebelah kiri --}}
    <div class="w-1/2 h-screen bg-[#4D1CAB] flex flex-col items-center justify-center">
        <img class="absolute translate-y-[-100px] translate-x-[110px]  w-[223px] h-[217px] object-contain" src="{{ asset('images/login-circle.png') }}" alt="circle accessories for login">
        <div class="relative w-[336px] h-[214px]">
            <img class="absolute" src="{{ asset('images/chart-accessories.png') }}" alt="chart accessories">

        {{-- Logo Laravel --}}
        <div class="absolute top-0 left-0 w-[80px] h-[80px]  object-contain -translate-x-1/2 -translate-y-1/2 bg-white rounded-full p-4 shadow-2xl">
             <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/3840px-Laravel.svg.png" alt="Logo laravel">
        </div>

        {{-- profile developer untuk login --}}
        <div class="absolute bg-white top-0 right-0 -translate-y-1/2 translate-x-1/2 p-10 rounded-2xl shadow-2xl flex flex-col items-center">
            <img class="w-[100px] h-[100px]" src="{{ asset('images/globe.png') }}" alt="globe">
            <p class="font-medium text-[18px] mt-[14px]">Rudi Usman</p>
            <p class="text-[16px]">Developer</p>
            <button class="bg-green-600 rounded-full text-white px-10 py-2 mt-[14px]">Hire Now</button>
        </div>

        </div>
    </div>

    {{-- Tampilan sebelah kanan --}}
    <div class="w-1/2 h-screen px-[100px] flex flex-col justify-center">
        <img class="w-[187px] h-auto" src="{{ asset('images/logo.png') }}" alt="logo aplikasi">
        <div class="mt-[100px]">
            <p class="font-semibold text-[22px]">Start Today</p>
            <p class="text-16">Because tomorrow become never</p>
        </div>
        {{-- Tombol sign in with google --}}
        <a href="/">
            <div class="flex gap-3 object-contain mt-[40px] rounded-full px-10 py-5 bg-white filter drop-shadow-md w-fit">
            <img class="w-[20px] h-[20px]" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/3840px-Google_%22G%22_logo.svg.png" alt=""logo google>
            <p>Sign in with Google</p>
        </div>
        </a>
        <img class="mt-[100px]" src="{{ asset('images/people.png') }}" alt="people image">
    </div>
</div>
</x-layout>


