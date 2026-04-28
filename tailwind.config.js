/** @type {import('tailwindcss').Config} */
module.exports = {
  // File mana yang harus di-scan Tailwind untuk class
  content: [
    './resources/views/**/*.blade.php', // semua Blade di resources/views
    './resources/js/**/*.js',           // semua JS di resources/js
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php', // pagination Laravel
    './storage/framework/views/*.php',  // cached Blade
     './resources/**/*.vue',
  ],

    safelist: [
    'text-balance',
    'text-pretty',
    'text-5xl',
    'text-xl/8',
  ],

  theme: {
    extend: {
      fontFamily: {
        // font custom 'Instrument Sans' + fallback
        sans: [
          'Poppins',
          'Instrument Sans',
          'ui-sans-serif',
          'system-ui',
          'sans-serif',
          'Apple Color Emoji',
          'Segoe UI Emoji',
          'Segoe UI Symbol',
          'Noto Color Emoji',
        ],
      },
      screens: {
        md2: '950px',
      },
    },

  },

  plugins: [],
}



