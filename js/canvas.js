/* use css to draw background instead of redrawing in canvas every time */
window.addEventListener( "load", function() {
    var theCanvas = document.getElementById( 'canvas1' );
    //if the canvas created properly
    if(theCanvas && theCanvas.getContext) {
        theCanvas.width = document.documentElement.clientWidth || window.innerWidth;
        theCanvas.height = window.innerHeight;
        var ctx = theCanvas.getContext( "2d" );
        //if we have context of canvas
        if(ctx) {
            let stars_array = [];
            stars_array.push(new shooting_star());
            stars_array.push(new shooting_star());
            stars_array.push(new shooting_star());
            stars_array.push(new shooting_star());
            stars_array.push(new shooting_star());
            /*star object*/

            function shooting_star() {
                //star starting point on canvas
                this.star_start_x = Math.random() * theCanvas.width;
                this.star_start_y = Math.random() * theCanvas.height;
                //size of the circle of the star
                this.star_size = (Math.random() * 3) + 1;
                //start end is the end of the star's tail
                this.star_end_x = this.star_start_x + (Math.random() * 100) + 25;
                this.star_end_y = this.star_start_y - (Math.random() * 50) + 15;
            }

            function draw(star) {
               /* create star gradient based on size of star. larger stars are closer and brighter. farther stars a dimmer and smaller */
                var gradient = ctx.createLinearGradient( star.star_start_x, star.star_start_y, star.star_end_x, star.star_end_y );
                if(star.star_size > 3) {
                   //large bright star
                    gradient.addColorStop("0", "rgba( 165, 199, 227, 1 )");
                    gradient.addColorStop("0.5", "rgba( 165, 199, 227, 1 )");
                    gradient.addColorStop("1.0", "rgba( 165, 199, 227, 0 )");
                } else if(star.star_size > 2) {
                    //medium normal star
                    gradient.addColorStop("0", "rgba( 52, 98, 137, 1 )");
                    gradient.addColorStop("0.5", "rgba( 52, 98, 137, 1 )");
                    gradient.addColorStop("1.0", "rgba( 52, 98, 137, 0 )");
                } else {
                    //small dull star
                    gradient.addColorStop("0", "rgba( 39, 84, 122, 1 )");
                    gradient.addColorStop("0.5", "rgba( 64, 84, 122, 1 )");
                    gradient.addColorStop("1.0", "rgba( 39, 84, 122, 0 )");
                }
                /*draw the shooting star trail*/
                ctx.beginPath();
                ctx.moveTo(star.star_start_x, star.star_start_y);
                ctx.lineTo(star.star_end_x, star.star_end_y);
                ctx.strokeStyle = gradient;
                ctx.lineWidth = star.star_size;
                ctx.stroke();

                /*the star*/
                ctx.beginPath();
                ctx.arc(star.star_start_x, star.star_start_y, star.star_size, 0, 2 * Math.PI);
                ctx.strokeStyle = "rgba( 125, 220, 255, .20 )";
                ctx.fillStyle = " white ";
                ctx.stroke();
                ctx.fill();
            }

            //update star position to make it move
            function update( star ) {
                stars_array.forEach( function ( star ) {
                    let x = 1;
                    let y = 1;
                    let diff_y = Math.abs( star.star_start_y - star.star_end_y );
                    let diff_x = Math.abs( star.star_start_x - star.star_end_x );
                    /*if its negative make it positive*/
                    if(diff_x < 0) {                     
                        diff_x = diff_x * diff_x;
                    }
                    if(diff_y < 0) {
                        diff_y = diff_y * diff_y;
                    }
                    /*
                        based upon where the star trail is relative to the star itself go in the direction that
                        puts the star trail behind the star. So if the star trail was directly up go down.

                        uses difference so that the star movement speed match the star tail. if the tail
                        is long move faster. Also makes the speed up/down and left/right based upon the tail.
                    */
                    if(star.star_start_x > star.star_end_x) {
                        /*go right*/
                        x = (diff_x / 70);
                    } else {
                        /*go left*/
                        x = (-diff_x / 70);
                    }
                    if(star.star_start_y < star.star_end_y) {
                        /*go up*/
                        y = (-diff_y / 80);
                    } else {
                        /*go down*/
                        y = (diff_y / 80);
                    }
                    star.star_start_x = star.star_start_x + x;
                    star.star_start_y = star.star_start_y + y;
                    star.star_end_x = star.star_end_x + x;
                    star.star_end_y = star.star_end_y + y;
                    /*if the star is completely out of view. recreate it in view*/
                    if(star.star_end_x < 0 || star.star_end_y < 0 || star.star_end_x > window.innerWidth  || star.star_end_y > window.innerHeight) {
                        star.star_start_x = Math.random() * theCanvas.width;
                        star.star_start_y = Math.random() * theCanvas.height;
                        star.star_size = (Math.random() * 3 ) + 1;
                        star.star_end_x = star.star_start_x + (Math.random() * 100) + 25;
                        star.star_end_y = star.star_start_y - (Math.random() * 50) + 15;   
                    }
                } );
            }

            //MAIN FUNCTION
            // this function make the blank canvas then calls the stars
            function animate() {           
                //limit to 45 frames. 1000/fps give mil sec to setTimeout for
                setTimeout(() => {
                    requestAnimationFrame(animate)
                }, 22)
                //reset canvas in-between frames
                ctx.clearRect(0, 0, theCanvas.width, theCanvas.height);
                //for every circle re draw it for every frame
                stars_array.forEach(function(star) {
                    draw(star);
                    update(star);
                });
            }    
            animate();
        }
    }//context(ctx) of canvas if end
});