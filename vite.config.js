import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/footer.css',
                'resources/js/app.js',
                'resources/js/delete.js',
            ],
            refresh: true,
        }),
    ],
});
