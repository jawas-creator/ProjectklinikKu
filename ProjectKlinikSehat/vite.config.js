import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/sass/app.scss", // pastikan ini ada
            ],
            refresh: true,
        }),
    ],
});
