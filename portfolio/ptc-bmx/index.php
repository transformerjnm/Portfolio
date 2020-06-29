<!-- 
Creator: Jacob Mitchell
Date of creation: 11/26/2018
name: BMX Website
Purpouse: A website that can be maintained easily. While providing ever need of the organization.
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- font awsome link -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Peachtree City BMX - Home</title>
	<meta name="description" content="Peachtree City(PTC) BMX Track is the ultimate family friendly BMX sport facility. Find the latest announcements and events here.">
	<?php include 'update.php'; ?>
	<style>
		<?php 
	   if ($alert == ""){
	       ?>
	       .noshow{
	           display: none; 
	       }<?php 
	   }
	   ?>
	<?php if($racenotes == ""){
	    ?>
	    .notenoshow{
	    	display: none;
	    } <?php 
	}?>
	</style>
</head>

<body class="grey lighten-4">
	<header>
		<!-- php alert system -->
		<div class="navbar-fixed alert noshow">
			<nav class=" maincolor z-depth-4 alert valign-wrapper">
				<?php echo $alert ?>
			</nav>
		</div>
		<div class="navbar-fixed">
			<nav class=" maincolor z-depth-4 ">
				<div class="nav-wrapper">
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="flow-text hide-on-med-and-down">
						<li class="active bold"><a href="index.php">Home</a></li>
						<li class="bold"><a href="newrider.php">New Rider</a></li>
						<li class="bold"><a href="visitus.php">Visit Us</a></li>
						<li class="bold"><a href="schedule.php">Schedule</a></li>
						<li class="bold"><a href="results.php">Results</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- mobile slide menu navigation -->
		<ul class="z-depth-5 sidenavfix side-nav" id="mobile-demo">
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="newrider.php">New Rider</a></li>
			<li><a href="visitus.php">Visit Us</a></li>
			<li><a href="schedule.php">Schedule</a></li>
			<li><a href="results.php">Results</a></li>
		</ul>
		<div class="z-depth-1 center secondarycolor">
			<img class="responsive-img" src="images/header3.png" alt="BMX Header Image">
		</div>
		<div class="row secondarycolor section marginzero">
			<div class="col s12">
				<h3 class="bold center">Announcements</h3>
			</div>
		</div>
	</header>
	<main>
		<div class="container">
			<!-- section for upcoming and current data -->
			<section>
				<!-- Z-index 1 for gridd -->
				<div class="row section">
					<div class="col s12 l6 xl4">
						<div class="card maincolor">
							<div class="card-content white-text">
								<span class="card-title center article flow-text">Next Race</span>
								<p class="flow-text">
									Last Updated:
									<?php echo $lastupdate; ?><br>
									Date:
									<?php echo $racedate; ?><br>
									Time:
									<?php echo $racetime ?> <br>
									Price:
									<?php echo $raceprice ?> <br>
									<div class="notenoshow flow-text">
										Notes: <br>
										<?php echo $racenotes; ?>
									</div>
									<a href="visitus.php" class="flow-text">Directions</a><br>
									<a href="schedule.php" class="flow-text">Schedule</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col s12 l6 xl4 offset-xl4">
						<div class="card maincolor">
							<div class="card-content white-text">
								<span class="card-title center flow-text">Next Gate</span>
								<p class="flow-text center-align">
									Every thursday <br>
									6:00pm - 8:00pm <br>
									Full Race Gear and Current USABMX licence required <br>
									No Charge <br>
									<a href="visitus.php">Directions</a><br>
									<a href="schedule.php">Schedule</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row section">
					<div class="col  l6 xl4">
						<div class="card maincolor">
							<div class="card-content white-text">
								<span class="card-title center article flow-text">Track Condition</span>
								<p class="flow-text">
									Last Updated:
									<?php echo $lastupdate; ?><br>
									Status:
									<?php echo $status; ?> <br>
									Description: <br>
									<?php echo $trackdescription; ?>
									<br><br>
									For The latest Update sign up for our <a href="https://www.rainedout.net/team_page.php?a=c9997f4274ac398c34cf" target="_blank">Message List</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col s12 m6 xl4">
						<div class="card">
							<div class="card-image">
								<a href="https://www.rainedout.net/team_page.php?a=c9997f4274ac398c34cf" target="_blank"><img class="responsive-img imgsize" src="images/rainedout.jpg" alt="Rained Out Image link. Seach PTCBMX to sign u for track update messages"></a>
							</div>
						</div>
					</div>
					<div class="col s12 m6 xl4">
						<div class="card">
							<div class="card-image">
								<a href="https://www.rainedout.net/team_page.php?a=c9997f4274ac398c34cf" target="_blank"><img class="responsive-img imgsize" src="images/rainedout_text.jpg" alt="Rained Out messageing service.Text PTCBMX to 84483 for track updates."></a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!--section for newest announcement -->
		<div class="container">
			<section>

				<div class="row section">
					<div class="col s12 z-depth-1">
						<div class="card-image">
							<img class="responsive-img imgsize" src="images/triple_crown2018_logo_front.jpg" alt="Triple Crown Logo">
						</div>
					</div>
				</div>
				<div class="row section">
					<div class="col s12 m6 l4">
						<div class="card maincolor">
							<div class="card-content white-text">
								<span class="card-title center article flow-text">Saturday</span>
								<p class="flow-text center-align">
									November 10 <br>
									PTC BMX <br>
									Double Point <br>
									Race <br>
									<br><br>
									Round 1 <br>
									P&amp;R 12-1:30pm <br>
									Race 2pm <br>
									$25 (2x points)
								</p>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card maincolor">
							<div class="card-content white-text">
								<span class="card-title center article flow-text">Saturday</span>
								<p class="flow-text center-align">
									November 10 <br>
									Sandy Ridge <br>
									Single Point <br>
									Race <br>
									<br><br>
									Round 2 <br>
									P&amp;R 6-7:30pm <br>
									Race 8pm <br>
									$10 (1x points)
								</p>
							</div>
						</div>
					</div>
					<div class="col  s12 l4">
						<div class="card maincolor">
							<div class="card-content white-text">
								<span class="card-title center article flow-text">Sunday</span>
								<p class="flow-text center-align">
									November 11 <br>
									Blanchard Woods <br>
									Double Point <br>
									Race <br>
									<br><br>
									Round 3 <br>
									P&amp;R 6-7:30pm <br>
									Race 8pm <br>
									$10 (2x Points)
								</p>
							</div>
						</div>
					</div>
				</div>

			</section>
		</div>

		<!-- sponsors -->
		<div class="row secondarycolor section marginzero">
			<div class="col s12">
				<h3 class="bold center">Sponsors</h3>
			</div>
		</div>
		<div class="row secondarycolor marginzero sponsor">
			<div class="col s12 m6 l2 xl1 offset-xl2 center-align">
				<a href="http://acomfortbydesign.com/" target="_blank"><img class="responsive-img sponsimg" src="images/acomfortbydesign.jpg" alt="A comfort by design logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.icelandicglacial.com/" target="_blank"><img class="responsive-img sponsimg" src="images/icelandic.jpg" alt="icelandic logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.maxxis.com/" target="_blank"><img class="responsive-img sponsimg" src="images/maxxis.jpg" alt="maxxis logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://visitpeachtreecity.com/" target="_blank"><img class="responsive-img sponsimg" src="images/ptc.png" alt="peachtree logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.rinnai.us/" target="_blank"><img class="responsive-img sponsimg" src="images/rinnai.png" alt="Rinnai Logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="http://www.southsidecycling.com/" target="_blank"><img class="responsive-img sponsimg" src="images/southsidecycling.png" alt="South Side Cycling logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.atlantatrek.com/" target="_blank"><img class="responsive-img sponsimg" src="images/trek.png" alt="Trek logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.ventureshuffleboard.com/" target="_blank"><img class="responsive-img sponsimg" src="images/venture.jpg" alt="Venture logo"></a>
			</div>
		</div>
		<!-- older anncoumnets -->
		<div class="container">
			<section>
				<!-- z-index-1 grid -->
				<div class="video-container">
					<iframe width="585" height="329" src="https://www.youtube.com/embed/eRLOd2fxtXA" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="row section">
					<div class="col s10 l6">
						<div class="card">
							<div class="card-image">
								<img class="responsive-img imgsize" src="images/Safety_gate_PayPal.jpg" alt="Picture of riders staged at new Starting Gate">
							</div>
						</div>
					</div>
					<div class="col s2 offset-l4">
						<div class="card">
							<div class="card-image">
								<img class="responsive-img imgsizesmall" src="images/pumptrack_donations_goal.jpg" alt="Goal of twenty thousand dollars fund raiser. With one thousand dollars result">
							</div>
						</div>
					</div>
					<div class="col s12 xl12">
						<div class="card maincolor">
							<div class="card-content white-text">
								<span class="card-title center article flow-text">Starting Gate Fund</span>
								<p class="flow-text">
									The Ride-A-Thon fund raiser raised us one thousand dollars. Our goal for the new starting gate is Twenty-thousand dollars. Thank you to all who donated at Ride-A-Thon.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="video-container">
					<iframe width="910" height="512" src="https://www.youtube.com/embed/z6mWe8XX4n4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</section>
		</div>
		<!-- sponsors -->
		<div class="row secondarycolor section marginzero">
			<div class="col s12">
				<h3 class="bold center">Sponsors</h3>
			</div>
		</div>
		<div class="row secondarycolor marginzero sponsor">
			<div class="col s12 m6 l2 xl1 offset-xl2 center-align">
				<a href="http://acomfortbydesign.com/" target="_blank"><img class="responsive-img sponsimg" src="images/acomfortbydesign.jpg" alt="A comfort by design logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.icelandicglacial.com/" target="_blank"><img class="responsive-img sponsimg" src="images/icelandic.jpg" alt="icelandic logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.maxxis.com/" target="_blank"><img class="responsive-img sponsimg" src="images/maxxis.jpg" alt="maxxis logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://visitpeachtreecity.com/" target="_blank"><img class="responsive-img sponsimg" src="images/ptc.png" alt="peachtree logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.rinnai.us/" target="_blank"><img class="responsive-img sponsimg" src="images/rinnai.png" alt="Rinnai Logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="http://www.southsidecycling.com/" target="_blank"><img class="responsive-img sponsimg" src="images/southsidecycling.png" alt="South Side Cycling logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.atlantatrek.com/" target="_blank"><img class="responsive-img sponsimg" src="images/trek.png" alt="Trek logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.ventureshuffleboard.com/" target="_blank"><img class="responsive-img sponsimg" src="images/venture.jpg" alt="Venture logo"></a>
			</div>
		</div>
	</main>
	<footer class="page-footer z-depth-2 section maincolor darken-2">
		<div class="container">
			<div class="row">
				<div class="col s12 l4 flow-text center-align">
					Track Director <br>
					Shayne Robinson<br>
					Phone: 678-770-1750 <br>
					<a href="mailto:ptcbmxbiz@aol.com">ptcbmxbiz@aol.com</a>
				</div>
				<div class="col s12 l4 flow-text center-align">
					<a href="visitus.php">Dircetions</a> <br>
					200 Mcintosh Trail <br>
					Peachtree City, GA 30269
				</div>
				<div class="col s12 l4 flow-text center-align">
					<a href="https://www.facebook.com/groups/1571144046444830/" target="_blank"><i class="fab fa-facebook-square facebook"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l4 flow-text center-align">
					Website Developer/Designer <br>
					Jacob Mitchell <br>
					<a href="https://jnmportfolio.000webhostapp.com/">Jacob's Webiste</a>
					<a href="mailto:jacob.mitchell157@gmail.com">Jacob.Mitchell157@gmail.com</a>
				</div>
				<div class="col s12 l4 flow-text center-align">
					Website Administrator <br>
					Anthony Robinson <br>
				</div>
				<div class="col s12 l4 flow-text center-align">
					<a href="sponsorship_program.pdf">Sponsor Us</a>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<p>Copyright &copy; 2018 Jacob Mitchell</p>
			<p class="right-align">
				Last Updated:
				<?php echo $lastupdate ?>
			</p>
		</div>
	</footer>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script>
		$(".button-collapse").sideNav();

	</script>
</body>

</html>
