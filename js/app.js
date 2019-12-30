/* navigator is an object that represent the browser and the information in it.  */
/* Dose the browser support service workers */
if('serviceWorker' in navigator){
    /* asynchronous */
    navigator.serviceWorker.register('/sw.js')
    /* once service worker has finished registering */
    .then((reg) => console.log('Service Worker Registered', reg))
    /* if there is an error */
    .catch((err) =>  console.log('Failed to Register Service Worker', err))
}