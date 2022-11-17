import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                // 'resources/css/app.scss',
                'resources/js/app.js',
                'resources/js/mijs.js',
                'resources/css/micss.css',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias:{
            '@': '/resources'
        }
    }
});
