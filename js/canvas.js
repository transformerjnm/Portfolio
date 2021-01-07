/* use css to draw background instead of redrawing in canvas every time */
window.addEventListener("load", function() {
    let theCanvas = document.getElementById( 'starCanvas' );
    //if the canvas created properly
    if(theCanvas && theCanvas.getContext) {
        theCanvas.width = document.documentElement.clientWidth || window.innerWidth;
        theCanvas.height = window.innerHeight;
        let ctx = theCanvas.getContext( "2d" );
        //if we have context of canvas
        if(ctx) {
            let starsArray = [];
            starsArray.push(new shootingStar());
            starsArray.push(new shootingStar());
            starsArray.push(new shootingStar());
            starsArray.push(new shootingStar());
            starsArray.push(new shootingStar());
            /*star object*/

            function shootingStar() {
                //star starting point on canvas
                this.starStartX = Math.random() * theCanvas.width;
                this.starStartY = Math.random() * theCanvas.height;
                //size of the circle of the star
                this.starSize = (Math.random() * 3) + 1;
                //start end is the end of the star's tail
                this.starEndX = this.starStartX + (Math.random() * 100) + 25;
                this.starEndY = this.starStartY - (Math.random() * 50) + 15;
            }

            function draw(star) {
               /* create star gradient based on size of star. larger stars are closer and brighter. farther stars a dimmer and smaller */
                let gradient = ctx.createLinearGradient( star.starStartX, star.starStartY, star.starEndX, star.starEndY );
                if(star.starSize > 3) {
                   //large bright star
                    gradient.addColorStop("0", "rgba( 165, 199, 227, 1 )");
                    gradient.addColorStop("0.5", "rgba( 165, 199, 227, 1 )");
                    gradient.addColorStop("1.0", "rgba( 165, 199, 227, 0 )");
                } else if(star.starSize > 2) {
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
                ctx.moveTo(star.starStartX, star.starStartY);
                ctx.lineTo(star.starEndX, star.starEndY);
                ctx.strokeStyle = gradient;
                ctx.lineWidth = star.starSize;
                ctx.stroke();

                /*the star*/
                ctx.beginPath();
                ctx.arc(star.starStartX, star.starStartY, star.starSize, 0, 2 * Math.PI);
                ctx.strokeStyle = "rgba( 125, 220, 255, .20 )";
                ctx.fillStyle = " white ";
                ctx.stroke();
                ctx.fill();
            }

            //update star position to make it move
            function update(star) {
                starsArray.forEach( function ( star ) {
                    let x = 1;
                    let y = 1;
                    let diffY = Math.abs( star.starStartY - star.starEndY );
                    let diffX = Math.abs( star.starStartX - star.starEndX );
                    /*if its negative make it positive*/
                    if(diffX < 0) {                     
                        diffX = diffX * diffX;
                    }
                    if(diffY < 0) {
                        diffY = diffY * diffY;
                    }
                    /*
                        based upon where the star trail is relative to the star itself go in the direction that
                        puts the star trail behind the star. So if the star trail was directly up go down.

                        uses difference so that the star movement speed match the star tail. if the tail
                        is long move faster. Also makes the speed up/down and left/right based upon the tail.
                    */
                    if(star.starStartX > star.starEndX) {
                        /*go right*/
                        x = (diffX / 70);
                    } else {
                        /*go left*/
                        x = (-diffX / 70);
                    }
                    if(star.starStartY < star.starEndY) {
                        /*go up*/
                        y = (-diffY / 80);
                    } else {
                        /*go down*/
                        y = (diffY / 80);
                    }
                    star.starStartX = star.starStartX + x;
                    star.starStartY = star.starStartY + y;
                    star.starEndX = star.starEndX + x;
                    star.starEndY = star.starEndY + y;
                    /*if the star is completely out of view. recreate it in view*/
                    if(star.starEndX < 0 || star.starEndY < 0 || star.starEndX > window.innerWidth  || star.starEndY > window.innerHeight) {
                        star.starStartX = Math.random() * theCanvas.width;
                        star.starStartY = Math.random() * theCanvas.height;
                        star.starSize = (Math.random() * 3 ) + 1;
                        star.starEndX = star.starStartX + (Math.random() * 100) + 25;
                        star.starEndY = star.starStartY - (Math.random() * 50) + 15;   
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
                starsArray.forEach(function(star) {
                    draw(star);
                    update(star);
                });
            }    
            animate();
        }
    }//context(ctx) of canvas if end
});