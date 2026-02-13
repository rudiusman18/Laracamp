// import { defineConfig } from 'vite';
// import tailwindcss from '@tailwindcss/vite';
// import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         tailwindcss(),
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//     ],
//     server: {
//         host: '0.0.0.0',
//         port: 5173,
//         strictPort: true,
//         hmr: {
//             host: '10.10.10.130',
//             protocol: 'ws',
//         },
//         watch: {
//             ignored: ['**/storage/framework/views/**'],
//         },
//     },
// });

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: 'laracamp.dev',   // samakan dengan domain Valet
        https: true,            // Valet pakai HTTPS
        port: 5173,
        strictPort: true,
        hmr: {
            host: 'laracamp.dev',
            protocol: 'wss',      // gunakan wss agar HMR via HTTPS
        },
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
