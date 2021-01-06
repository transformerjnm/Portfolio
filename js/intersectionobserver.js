/*lazy loading img and img animations*/
const images = document.querySelectorAll("[lazy-src]");
const paragraphs = document.querySelectorAll("p");
const h3 = document.querySelectorAll("h3");
const h4 = document.querySelectorAll("h4");
const li = document.querySelectorAll("li");

let preload_img = img => {
	const lazySrc = img.getAttribute("lazy-src");
	if(!lazySrc) {
		return;
	} else {
		img.src = lazySrc;
	}
}

const options = {
    threshold: 0,
    rootMargin: "0px 0px 0px 0px",
};

const observer = new IntersectionObserver(entries => {
	entries.forEach( entry => {
		//not intersection
		if (!entry.isIntersecting) {
			/*remove class for re-animation*/
			if(entry.target.classList.contains('startSlideIn')) {
				entry.target.classList.remove('startSlideIn');
			} else if(entry.target.classList.contains('fadeIn')) {
				entry.target.classList.remove('fadeIn');
			}
		} else {
			/*animate in*/
			if(entry.target.nodeName === 'IMG') {
				preload_img(entry.target);
				entry.target.classList.add('startSlideIn');
			} else if(entry.target.classList.contains('slideIn')) {
				entry.target.classList.add('startSlideIn');
			} else {
				entry.target.classList.add('fadeIn');
			}
		}
	});
}, options );

images.forEach( image => {
	observer.observe(image);
});
h3.forEach( h3 => {
	observer.observe(h3);
});
h4.forEach( h4 => {
	observer.observe(h4);
});
li.forEach( li => {
	observer.observe(li);
});
paragraphs.forEach( p => {
	observer.observe(p);
});