import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/css/home.css',
                'resources/css/login.css',
                'resources/css/signup.css',
                'resources/css/navbar/navbarDark.css',
                'resources/css/navbar/navbarLight.css',
                'resources/css/navbar/searchBarDark.css',
                'resources/css/footer/footerDark.css',
                'resources/css/footer/footerLight.css',
                'resources/css/ads/trade.css',
                'resources/css/ads/add.css',
                'resources/css/dashboard.css',
                'resources/css/contact.css',
                'resources/css/ourproduct.css',
                'resources/css/errors/error.css',
                'resources/css/profile.css',
            ],
            refresh: true,
        }),
    ],
});
