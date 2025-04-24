import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';

export default defineConfig({
    server: {
        https: {
            key: fs.readFileSync('/Users/user/.config/herd/config/valet/Certificates/web-prodi-abi.test.key'),
            cert: fs.readFileSync('/Users/user/.config/herd/config/valet/Certificates/web-prodi-abi.test.crt'),
        },
        host: 'web-prodi-abi.test',
        headers: {
            'Access-Control-Allow-Origin': '*', // TOLONG HAPUS INI PADA PRODUCTION.
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
