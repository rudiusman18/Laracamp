{{--
Halaman detail dari tombol "Take This Plan" pada halaman home
--}}

<x-layout :title=$title>
    <x-background-blob/>
    <x-header/>

    <div class="text-center mt-[80px]">
        <p class="font-semibold text-[16px] text-[#31B380]">YOUR FUTURE CAREER</p>
        <P class="font-semibold text-[30px] mt-[8px]">Checkout Bootcamp</P>
    </div>

    <div class="flex w-full mt-[70px]">

        {{--  Tampilan sebalah kiri --}}
        <div class="flex flex-col w-1/2 items-center">
            <div class="relative w-[368px] h-[255px] object-contain flex items-center justify-center">
                <img class="absolute rounded-3xl" src="{{ asset('images/cover.png') }}" alt="image cover">
                <img class="absolute w-[50px] h-[50px]" src="{{asset('icons/play_btn.png')  }}" alt="icons play">
            </div>
            <div class="relative w-[368px] h-[255px] text-justify mt-[30px]">
                <p class="font-semibold text=[22px] text-[#31B380]">GILA BELAJAR</p>
                <p class="mt-[10px] text-[16px]">Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli</p>
            </div>
        </div>

        {{--  Tampiolan Sebelah Kanan --}}
        <div class="w-[370px] flex flex-col">
            <form action="/checkout/success">
                <x-form-item for="email" type="email" id="email" placeholder="email@gmail.com" isrequired="required">Email Address</x-form-item>
                <x-form-item class="mt-[30px]" for="full-name" type="text" id="full-name" placeholder="John Doe" isrequired="required">Full Name</x-form-item>
                <x-form-item class="mt-[30px]" for="occupation" type="text" id="occupation" placeholder="Product Manager" isrequired="required">Occupation</x-form-item>
                <x-form-item class="mt-[30px]" for="card-number" type="number" id="card-number" placeholder="0812212212322" isrequired="required">Card Number</x-form-item>
                <div class="flex gap-4">
                <x-form-item class="mt-[30px]" for="expired" type="month" id="expired" placeholder="mm/yyyy" isrequired="required">Expired</x-form-item>
                <x-form-item class="mt-[30px]" for="cvc" type="number" id="cvc" placeholder="000" isrequired="required">CVC</x-form-item>
                </div>
                <button type="submit" class="w-full px-10 py-2 rounded-full mt-[50px] text-white bg-[#7839F3]">Pay Now</button></a>
            </form>

            <p class="text-[14px] text-[#5B5575] text-center mt-[20px]">Your payment is secure and encrypted</p>

        </div>

    </div>

</x-layout>
