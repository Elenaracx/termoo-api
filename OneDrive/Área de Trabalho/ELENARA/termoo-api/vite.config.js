// Importa dependências
import { defineConfig } from 'vite';
// Importa dependências
import laravel from 'laravel-vite-plugin';
// Importa dependências
import tailwindcss from '@tailwindcss/vite';

// Executa esta linha
export default defineConfig({
    // Executa esta linha
    plugins: [
        // Executa esta linha
        laravel({
            // Executa esta linha
            input: ['resources/css/app.css', 'resources/js/app.js'],
            // Executa esta linha
            refresh: true,
        // Executa esta linha
        }),
        // Executa esta linha
        tailwindcss(),
    // Executa esta linha
    ],
    // Executa esta linha
    server: {
        // Executa esta linha
        watch: {
            // Executa esta linha
            ignored: ['**/storage/framework/views/**'],
        // Executa esta linha
        },
    // Executa esta linha
    },
// Executa esta linha
});