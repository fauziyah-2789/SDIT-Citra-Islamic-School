import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true, // Auto reload ketika ada perubahan file blade/css/js
        }),
    ],

    // Alias supaya import JS lebih mudah (contoh: import x from '@/components/x')
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
            '~': path.resolve(__dirname, 'resources'),
        },
    },

    server: {
        host: 'localhost',
        port: 5173,
        open: false, // ganti true kalau mau otomatis buka browser
        hmr: {
            host: 'localhost',
        },
    },

    build: {
        outDir: 'public/build',
        emptyOutDir: true,
        manifest: true,
        rollupOptions: {
            output: {
                manualChunks: {
                    // Pisahkan vendor JS agar cache lebih efisien dan cepat
                    vendor: ['alpinejs', 'aos', 'trix'],
                },
            },
        },
    },

    css: {
        preprocessorOptions: {
            css: {
                charset: false, // hindari warning di beberapa browser
            },
        },
    },
});
