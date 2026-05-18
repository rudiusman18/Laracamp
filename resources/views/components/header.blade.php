<nav x-data="{ open: false }" class="relative z-50 bg-transparent">
  <div class="mx-auto px-20">
    <div class="flex h-16 items-center justify-between">

      <!-- LEFT -->
      <div class="flex items-center">
        <div class="shrink-0">
          <a href="/">
            <img src="{{ asset('images/logo.png') }}" class="size-8 w-full" />
          </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md2:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="/" class="px-3 py-2 text-sm {{ request()->is('/') ? 'text-purple-800' : 'text-black'}}">Program</a>
            <a href="/mentor" class="px-3 py-2 text-sm {{ request()->is('mentor') ? 'text-purple-800' : 'text-black'}}">Mentor</a>
            <a href="/pricing" class="px-3 py-2 text-sm {{ request()->is('pricing') ? 'text-purple-800' : 'text-black'}}">Pricing</a>
            <a href="/business" class="px-3 py-2 text-sm {{ request()->is('business') ? 'text-purple-800' : 'text-black'}}">Business</a>
          </div>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="hidden md2:flex items-center space-x-2">
        <button onclick="window.location.href='/sign-in'" class="rounded-full bg-purple-300/30 text-purple-800 px-5 py-2 text-sm">
          Sign In
        </button>
        <button class="rounded-full bg-purple-800 text-white px-5 py-2 text-sm">
          Sign Up
        </button>
      </div>

      <!-- BURGER -->
      <div class="md2:hidden">
        <button @click="open = !open" class="p-2 text-gray-600">

          <!-- icon hamburger -->
          <svg x-show="!open" class="size-6" fill="none" stroke="currentColor">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>

          <!-- icon close -->
          <svg x-show="open" class="size-6" fill="none" stroke="currentColor">
            <path d="M6 18 18 6M6 6l12 12" />
          </svg>

        </button>
      </div>

    </div>
  </div>

  <!-- MOBILE MENU -->
  <div x-show="open"
       x-transition
       @click.outside="open = false"
       class="md2:hidden px-4 pb-4">

    <a href="/" class="block py-2">Program</a>
    <a href="/mentor" class="block py-2">Mentor</a>
    <a href="/pricing" class="block py-2">Pricing</a>
    <a href="/business" class="block py-2">Business</a>

    <div class="mt-3 space-y-2">
      <button class="w-full bg-purple-300/30 text-purple-800 py-2 rounded-full">
        Sign In
      </button>
      <button class="w-full bg-purple-800 text-white py-2 rounded-full">
        Sign Up
      </button>
    </div>

  </div>
</nav>
