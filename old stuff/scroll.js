
//resuable function to throttle the number of times a fuction is called
function throttle(fn, wait) {
	var time = Date.now();
	return function () {
		if ((time + wait - Date.now()) < 0) {
			fn();
			time = Date.now();
		}
	}
}
//*************scrolling animations*************
let hasscrolled = false;
function scrollani() {

    //****navigation****
	let topofscreen = window.pageYOffset;
	let nav = document.getElementById('nav');

	//below hero canvas remove fadeout if present and fade in nav background
	if (topofscreen > window.innerHeight) {
		hasscrolled = true;
		if (nav.classList.contains('navfadeout')) {
			nav.classList.remove("navfadeout");
			//trigger reflow to make animation work
			void nav.offsetWidth;
		}
		nav.classList.add("navfadein");
	}
	//Nav is above bottom of hero canvas remove fadein and add fade out to nav background
	else if (topofscreen < window.innerHeight && hasscrolled) {
		if (nav.classList.contains('navfadein')) {
			nav.classList.remove("navfadein");
			//trigger reflow to make animation work
			void nav.offsetWidth;
		}
		nav.classList.add("navfadeout");
	}
	//****images****
	let bottomofscreen = topofscreen + window.innerHeight;
	//all img with class of .slideinimg put inside of an array
	let slideinimgs = document.querySelectorAll('.slideinimg');
	slideinimgs.forEach(img => {
			let imgposmid = img.offsetTop - (img.height / 2);
			let imgposbottom = img.offsetTop + img.height;
			let haspassed = topofscreen > imgposbottom;
			//if middle of img is in viewport and has not scrolled passed img
			if (bottomofscreen > imgposmid && !haspassed) {
				//add class to animate
				img.classList.add('showimg');

			}else{
				//remove class. img out of viewport.
				img.classList.remove('showimg');
			}
		});
}
//************MAIN CALLING*********
window.addEventListener('scroll', throttle(scrollani, 100));
