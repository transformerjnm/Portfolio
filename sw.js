const staticCacheName = 'site-static-v1';
const dynamicCacheName = 'dynamic-cache-v2';
const assets = [
    '/',
    '/index.html',
    'css/styles.css',
    '/js/app.js',
    '/js/canvas.js',
    '/js/intersectionobserver.js',
    '/images/materlized-css.png',
    '/images/mysql.png',
    '/images/redux.png',
    '/images/unanimity.png',
    '/images/ptc_bmx_website.jpg',
    '/images/georgia_gifts_react.png',
    '/images/favicon-32x32.png',
    'images/favicon-16x16.png',
    '/images/fontawesome/bootstrap-brands.svg',
    '/images/fontawesome/external-link-alt-solid.svg',
    '/images/fontawesome/css3-alt-brands.svg',
    '/images/fontawesome/envelope-solid.svg',
    '/images/fontawesome/github-square-brands.svg',
    '/images/fontawesome/graduation-cap-solid.svg',
    '/images/fontawesome/html5-brands.svg',
    '/images/fontawesome/js-square-brands.svg',
    '/images/fontawesome/linkedin-brands.svg',
    '/images/fontawesome/php-brands.svg',
    'images/fontawesome/react-brands.svg',
    'https://fonts.googleapis.com/css?family=Quicksand&display=swap',
    'https://fonts.googleapis.com/css?family=Pacifico&display=swap',
];

const limitCacheSize = (name, size) => {
    caches.open(name).then(cache => {
        cache.keys().then(keys => {
            if(keys.length > size) {
                cache.delete(keys[0]).then(limitCacheSize(name, size));
            }
        })
    })
};

//installs service worker and caches assets
self.addEventListener('install', evt => {
    evt.waitUntil(
      caches.open(staticCacheName).then((cache) => {
        cache.addAll(assets);
      } )
    );
} );

//activates service worker then removes old cache  when new cache is found
self.addEventListener('activate', evt => {
    evt.waitUntil(
        //removes old cache when new cache is found
        caches.keys().then(keys => {
            return Promise.all(keys
                /* all keys that are old caches stay in array. we then delete them */
                .filter(key => key !== staticCacheName && key !== dynamicCacheName)
                .map(key => caches.delete(key))
            );
        })
    );
});

self.addEventListener('fetch', evt => {
    evt.respondWith(
        //check if requested asset is cashed
        caches.match(evt.request).then( cacheRes => {
            //return cache response if it is there.(get cache) or if is empty fetch asset from server              
            return cacheRes || fetch(evt.request).then(fetchRes => {
                //add asset to dynamic array
                return caches.open(dynamicCacheName).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    limitCacheSize(dynamicCacheName, 15);
                    return fetchRes;
                })
            });
        }).catch(() => {            
            //if cant get asset. aka offline and not cached. Return the fallback page for request of html or php.
            if(evt.request.url.indexOf( '.html' ) > -1 || evt.request.url.indexOf( '.php' ) > -1 ) {
                return caches.match( '/index.html' )
            }
        })
    );
});