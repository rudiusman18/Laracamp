<x-layout :title=$title>
<x-background-blob/>
<x-header/>


<div class="flex flex-col justify-center items-center mt-[100px]">
    <img class="w-[401px] h-[434px]" src="{{ asset('images/checkout-success.png') }}" alt="checkout image">

    <p class="text-[#31B380] font-semibold text-[16px] mt-[100px]">WHAT A DAY!</p>
    <p class="font-semibold text-[30px] mt-[8px]">Berhasil Checkout</p>
   <a href="/"><button class="bg-[#7839F3] text-white rounded-full text-medium text-[16px] py-2 px-10 mt-[20px]" >My Dashboard</button></a>
</div>


</x-layout>
