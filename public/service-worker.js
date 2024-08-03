const cacheName = "v1";
const cacheAssets = [
    // "/",
    // "/vendor/css/styles.css",
    // "/vendor/js/scripts.js",
    // "/vendor/img/undraw_rocket.svg",
    // "/vendor/img/undraw_rocket.svg",
];

self.addEventListener("install", (e) => {
    e.waitUntil(
        caches.open(cacheName).then((cache) => {
            return cache.addAll(cacheAssets);
        })
    );
});

self.addEventListener("fetch", (e) => {
    e.respondWith(
        caches.match(e.request).then((response) => {
            return response || fetch(e.request);
        })
    );
});
