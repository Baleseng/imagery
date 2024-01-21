import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({

    //server: {
    //    hmr: {
    //        host: 'a0c3-152-111-140-25.ngrok-free.app',
    //    },
    //},

    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/cart.js',
            ],
            refresh: true,
        }),
         vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],

    name: 'blade',
    handleHotUpdate({ file, server }) {
        if (file.endsWith('.blade.php')) {
            server.ws.send({
                type: 'full-reload',
                path: '*',
            });
        }
    },

   
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
