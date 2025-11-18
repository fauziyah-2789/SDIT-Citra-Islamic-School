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
            refresh: true,
        }),
    ],

    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
            '~': path.resolve(__dirname, 'resources'),
        },
    },

    server: {
        host: 'localhost',
        port: 5173,
        open: false,

        // ❗ FIX PENTING UNTUK WINDOWS (biar ga restart terus)
        watch: {
            usePolling: true,
            interval: 300,
        },

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
                    vendor: ['alpinejs', 'aos', 'trix'],
                },
            },
        },
    },

    css: {
        preprocessorOptions: {
            css: {
                charset: false,
            },
        },
    },
});
