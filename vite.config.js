import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { resolve } from 'path';

export default defineConfig({
  resolve: {
    alias: {
      '@': resolve(__dirname, './resources/js/')
    }
  },
  plugins: [
    vue(),
    laravel({
      input: [
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/js/form/register.js',
      ],
      refresh: true,
    }),
  ],
});
