<div class="flex items-center gap-10 {{ $number != "1." ? "mt-40" : "mt-20" }} mx-5 {{ $number == "2." ? "flex-row-reverse" : "" }}">

  <!-- IMAGE -->
  <div class="relative w-1/2">
    <img class="w-full h-auto rounded-tr-[100px] rounded-bl-[100px]" src="{{ asset('images/journey-'. $number .'png') }}" alt="">

    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 z-10
                bg-red-700 text-white w-16 h-16 rounded-full
                border-[5px] border-white font-semibold text-[24px] flex items-center justify-center">
        {{ $number }}
    </div>

    <div class="absolute bottom-0 right-0 bg-white p-5 rounded-md translate-x-1/2 translate-y-1/2">
      <div class="flex gap-1 justify-start">
        <img src="{{ asset('icons/ic_check.svg') }}" alt="icon journey">
        <p class="text-[16px] font-medium">{{ $title }}</p>
    </div>
      <p class="text-left">{{ $text }}</p>
    </div>
  </div>

  <!-- TEXT SAMPING -->
  <div class="w-1/2">
    <h2 class="font-semibold text-lg">Judul</h2>
    <p class="text-gray-500">
      Ini adalah teks di sebelah kanan dari image. Bisa panjang bebas.
    </p>
  </div>

</div>
