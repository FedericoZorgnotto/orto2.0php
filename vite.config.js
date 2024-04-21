import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/home.css',
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/css/navbar.css',
                'resources/css/login.css',
                'resources/css/style.css',
                'resources/css/signup.css',



                'resources/css/navbar/navbarDark.css',
                'resources/css/navbar/navbarLight.css',
                'resources/css/navbar/searchBarDark.css',
                'resources/css/footerDark.css',
                'resources/css/footerLight.css',
                'resources/ads/trade.css',
                'resources/ads/add.css'
            ],
            refresh: true,
        }),
    ],
});
