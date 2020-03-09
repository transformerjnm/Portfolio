/*moile navigation*/
let nav_active = false;
let mobile_nav_logo = document.querySelector( '.mobile_nav_logo' );
let mobile_nav = document.querySelector( '.mobile_nav' );

/*open and close mobile nav when mobile nav logo is clicked*/
mobile_nav_logo.addEventListener( 'click',

	function ( ) {

		mobile_nav.classList.toggle( 'mobile_nav_active' );
		mobile_nav_logo.classList.toggle( 'mobile_logo_active' );
		nav_active = !nav_active;

	}

);

//function that set mobile navigation to inactive
function remove_mobile_nav_classes( ) {

		mobile_nav.classList.remove( 'mobile_nav_active' );
			mobile_nav_logo.classList.remove( 'mobile_logo_active' );
			nav_active = !nav_active;
			
}


let main = document.querySelector( 'main' );
let header = document.querySelector( '.canvas_container' );
let herocontent = document.querySelector( '.herocontent' );
let footer = document.querySelector( 'footer' );

//if  mobile nav is open and clicked outside of nav. close  mobile nav
if ( nav_active = true ) {
	/*would not let me select body or header so had to do them individualy*/
	main.addEventListener( 'click', remove_mobile_nav_classes );
	header.addEventListener( 'click', remove_mobile_nav_classes );
	herocontent.addEventListener( 'click', remove_mobile_nav_classes );
	footer.addEventListener( 'click', remove_mobile_nav_classes );
}
