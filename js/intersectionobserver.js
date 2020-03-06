/*lazy loading img and img animations*/
const images = document.querySelectorAll( "[lazy-src]" );

function preload_img( img ) {
  const src = img.getAttribute( "lazy-src" );
  if( !src ){
    return;
  } else {
    img.src = src;
  }
}

const img_options = {
    threshold: 0,
    rootMargin: "400px 0px 400px 0px"
};

const img_observer = new IntersectionObserver( ( entries, img_observer ) => {
  entries.forEach( entry => {
    if ( !entry.isIntersecting ){
      /*remove class for re-animation*/
      entry.target.classList.remove( 'showimg' );
      return;
    }else {
      /*show img*/
      preload_img( entry.target );
      /*animate img in*/
      entry.target.classList.add( 'showimg' );
    }
  })
}, img_options );

images.forEach( images => {
  img_observer.observe( images );
} );
