/*lazy loading img and img animations*/
const images = document.querySelectorAll("[lazy-src]");

//load image in. called when close to viewport
function preload_img(img) {
	const src = img.getAttribute("lazy-src");
	if(!src) {
		return;
	} else {
		//set the src of image to lazy src value
		img.src = src;
	}
}

//loading options. such as how far ahead to load in.
const img_options = {
    threshold: 0,
    rootMargin: "400px 0px 400px 0px",
};

//callable image observer. dose not run till called
const img_observer = new IntersectionObserver((entries, img_observer) => {
	entries.forEach( entry => {
		//not intersection
		if (!entry.isIntersecting) {
			/*remove class for re-animation*/
			entry.target.classList.remove('showimg');
			return;
		}
		//is intersection with root margin.(near viewport)
		else {
			/*show img*/
			preload_img(entry.target);
			/*animate img in*/
			entry.target.classList.add('showimg');
		}
	});
}, img_options );

//calls the intersection observer on all images on the page for lazy loading
images.forEach( images => {
	img_observer.observe( images );
});