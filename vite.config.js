import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                'resources/css/prism.css',
                'resources/js/prism.js',

                'resources/fonts/Lato-Regular.ttf',
                'resources/fonts/OpenSans-SemiBold.ttf',
            ],
            refresh: true,
        }),
    ],
});
