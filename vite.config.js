import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { viteStaticCopy } from "vite-plugin-static-copy";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: "resources/assets/*",
                    dest: "images",
                },
            ],
        }),
    ],
    server: {
        host: "127.0.0.1",
        port: 8000,
        hmr: {
            host: "127.0.0.1",
        },
    },
});
