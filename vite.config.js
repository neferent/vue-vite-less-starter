import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  build: {
    minify: true,
    cssCodeSplit: true,
    rollupOptions: {
      output: {
        format: 'es',
        entryFileNames: 'src/main.js',   
        assetFileNames: 'src/style.css', 
      },
    }
  },
  plugins: [vue()],
})
