import kirby from 'vite-plugin-kirby'

// arnoson/kirby-vite reads the manifest from public/dist in production and
// switches to the dev server while `npm run dev` runs (it drops a `.dev`
// marker file). The base URL differs between the two, as the plugin expects.
export default ({ mode }) => ({
  // The docroot is not a Vite public dir: it must not be copied into the build.
  publicDir: false,
  base: mode === 'development' ? '/' : '/dist/',
  build: {
    manifest: true,
    outDir: 'public/dist',
    assetsDir: 'assets',
    emptyOutDir: true,
    rollupOptions: {
      input: ['src/js/app.js', 'src/css/app.css'],
    },
  },
  plugins: [
    kirby({
      watch: ['../site/(templates|snippets|controllers|models|layouts)/**/*.php', '../content/**/*'],
      kirbyConfigDir: 'site/config',
    }),
  ],
  server: {
    // DDEV: Vite runs inside the web container and is exposed via
    // web_extra_exposed_ports (https://test-kirby.ddev.site:5173).
    host: '0.0.0.0',
    port: 5173,
    strictPort: true,
    allowedHosts: true,
    cors: {
      origin: /https?:\/\/([A-Za-z0-9\-\.]+)?(localhost|\.local|\.test|\.site)(?::\d+)?$/,
    },
  },
})
