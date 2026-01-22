import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        
        laravel({
            input: [
                'resources/css/bootstrap.min.css',
                'resources/css/all-fontawesome.min.css',
                'resources/css/animate.min.css',
                'resources/css/magnific-popup.min.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/style.css',
                //'resources/css/custom.css',
                // modernizr en head si nécessaire
                'resources/js/jquery-3.7.1.min.js',
                'resources/js/modernizr.min.js',
                // bundle principal qui contient jQuery + plugins + custom
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
