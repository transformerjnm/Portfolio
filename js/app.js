/* if the browser support service workers */
if( 'serviceWorker' in navigator ){
    //register service worker
    navigator.serviceWorker.register( '/sw.js' )
    /*
    .then( ( reg ) => console.log( 'Service Worker Registered', reg ) )
    .catch( (e rr ) =>  console.log( 'Failed to Register Service Worker', err) ) 
    */
}