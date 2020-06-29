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
	<title>Peachtree City BMX - New Rider</title>
	<meta name="description" content="PTX BMX’s comprehensive guide of required race equipment, moto sheets/combining, staging, and USABMX Rulebook.">
	<?php include 'update.php'; ?>
		<style type="text/css">
	   <?php 
	   if ($alert == ""){
	       ?>
	       .noshow{
	           display: none; 
	       }<?php 
	   }
	   ?>
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
						<li class="bold"><a href="index.php">Home</a></li>
						<li class="bold active"><a href="newrider.php">New Rider</a></li>
						<li class="bold"><a href="visitus.php">Visit Us</a></li>
						<li class="bold"><a href="schedule.php">Schedule</a></li>
						<li class="bold"><a href="results.php">Results</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- mobile slide menu navigation -->
		<ul class="z-depth-5 sidenavfix side-nav" id="mobile-demo">
			<li><a href="index.php">Home</a></li>
			<li class="active"><a href="newrider.php">New Rider</a></li>
			<li><a href="visitus.php">Visit Us</a></li>
			<li><a href="schedule.php">Schedule</a></li>
			<li><a href="results.php">Results</a></li>
		</ul>
		<div class="z-depth-1 center secondarycolor">
			<img class="responsive-img" src="images/header3.png" alt="BMX Header Image">
		</div>
		<div class="row secondarycolor section marginzero">
			<div class="col s12">
				<h3 class="bold center">New Rider</h3>
			</div>
		</div>
	</header>
	<main>
		<!-- empty card template -->
		<!--
		<div class="card maincolor">
			<div class="card-content white-text">
				<span class="card-title center article flow-text">Title</span>
				<p class="flow-text">
					content
				</p>
			</div>
		</div>
-->
		<!-- Emtpy img card -->
		<!-- 
		<div class="card">
			<div class="card-image">
				<img class="responsive-img imgsize" src="" alt="">
			</div>
		</div>

-->
		<div class="container">
			<div class="row">
				<div class="col xl4">
					<div class="card maincolor">
						<div class="card-content white-text">
							<span class="card-title center article flow-text">Required Race Equipment</span>
							<ul class="flow-text dots">
								<li>-USABMX Membership</li>
								<li>-20 inch or 24 inch bicycle</li>
								<li>-Full face helmet, or helmet with mouth-guard</li>
								<li>-Long sleeve shirt</li>
								<li>-Long pants</li>
								<li>-Number Plate</li>
								<li>-Working brakes</li>
								<li>-Bar ends or something which securely covers the end of the handlebars</li>
								<li>-Gloves (optional - recommended)</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col xl4">
					<div class="card maincolor">
						<div class="card-content white-text">
							<span class="card-title center article flow-text">Will My Bike be Acceptable?</span>
							<p class="flow-text">
								Can not have reflectors, pegs, kick stand, or chain guard. (These items can come loose or fall off and cause injury to yourself or a fellow competitor)
								Bikes with any size wheels (16, 20, 24 or 26) are allowed in the Novice (beginner) class.
								Your bicycle should be mechanically sound and at least have effective brakes on the rear wheel. <br><br>
								<span class="bold"><a href="newrider/usabmx_rulebook2014.pdf" target="_blank">RuleBook</a></span> <br>
								<span class="bold"><a href="sizingchart.php" target="_blank">Sizing Chart</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col xl4">
					<div class="card maincolor">
						<div class="card-content white-text">
							<span class="card-title center article flow-text">Is BMX Dangerous?</span>
							<p class="flow-text">
								If you do not wear a helmet or do not follow proper safety precautions it can be.
								If you wear your protective gear and follow all safety precautions, it is no more dangerous than any other organized sport.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m4 xl4">
					<div class="card maincolor">
						<div class="card-content white-text">
							<span class="card-title center article flow-text">Registering to Race</span>
							<p class="flow-text">
								You may sign up on race-day, and register to race that same day.
								Please bring a copy of the racer's birth certificate. (can be produced after registration)
								We will supply you with your initial number plate and numbers.
							</p>
						</div>
					</div>
				</div>
				<div class="col s12 m8 xl8">
					<div class="card maincolor">
						<div class="card-content white-text">
							<span class="card-title center article flow-text">RACEDAY</span>
							<p class="flow-text">
								If you are really nervous and feel you need a "buddy" to help you get through your first race, ask the clerk when you register for the race to assign you a buddy and let them show you the ropes. Practice the entire track, so that you know what to expect during the race. Practice the gate until you feel comfortable with it's operation. <br><br>
								<span class="bold">Who will I race?</span><br><br>
								Riders your own age
								Riders your own skill level
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col xl8">
					<div class="card maincolor">
						<div class="card-content white-text">
							<span class="card-title center article flow-text">All About Moto Sheets</span>
							<p class="flow-text">
								Listen for the announcement that "Motos are posted" and go to the moto boards to find out who you will be racing that day! How to <a href="newrider/readingmotosheets.pdf">read the moto sheets</a> and if you racing someone younger/older than you, understand the <a href="newrider/moto_combining_rules.pdf">moto combining rules.</a>
								<br><br>
								<span class="bold">Correcting Motos</span><br><br>
								If there is a problem with your moto, go to registration so that it can be corrected. <br>
								If you hear an anncoment for moto repost. Go check your moto and make sure you were not affected by the change.
							</p>
						</div>
					</div>
				</div>
				<div class="col xl4">
					<div class="card maincolor">
						<div class="card-content white-text">
							<span class="card-title center article flow-text">Start of Race</span>
							<p class="flow-text">
								Listen for the announcement calling "Riders to go the back of the starting hill and into staging." Most tracks play the national anthem before the first race starts, so you have some time to prepare yourself. How to get into staging
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card maincolor">
				<div class="card-content white-text">
					<span class="card-title center article flow-text">How to Stage</span>
					<p class="flow-text">
						When the riders are called to staging, the stager will call riders into staging by moto number, not riders names. <br><br>

						At the back of the starting hill, there will be 10 roped-off lanes. Initially the first 10 motos of riders will load into the lane that corresponds with the right-most digit of their moto number. <br><br>

						The stager will then call each moto out of the lanes and the riders in that moto should form up on the first line behind the number that corresponds with the gate number they were assigned for the first round race. <br><br>

						In our example, when moto 9 was called up, the riders in moto 9 would exit lane 9 move up the hill and form up behind the line and with our rider A behind the number 6. <br><br>

						If there was a moto 19, that group of riders would fill the vacated lane 9. As each moto is released from the gate, the riders progress up the hill until they are "on the gate" and under the starter's orders. <br><br>

						This process continues until the last moto of the first round has completed their race and the process will be repeated with round 2 and then round 3. <br><br>

						<span class="bold">Note to parents:</span>
						No one except riders, race officials, and parents that need to assist boys 6 & under and/or girls 7 & under are allowed in staging. <br><br>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 xl6">
					<div class="card">
						<div class="card-image">
							<img class="responsive-img imgsize" src="images/stageing.jpg" alt="layout of how staging works image">
						</div>
					</div>
				</div>
				<div class="col s12 m6 xl6">
					<div class="card maincolor">
						<div class="card-content white-text">
							<span class="card-title center article flow-text">What to Expect When the Gate Drops</span>
							<p class="flow-text">
								You will hear the word "PEDAL!" a lot, and you should listen to the spectators and pedal! Always give your best effort and have FUN! There is great joy in riding bicycles, and it is even more intense racing bicycles!
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col xl12">
					<div class="card maincolor">
						<div class="card-content white-text">
							<span class="card-title center article flow-text">After the Race</span>
							<p class="flow-text">
								Listen for the announcement calling "Riders to go pick up their trophies." If you are entitled to a trophy, go pick it up and enjoy. We hope to see you at the next race.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m4 xl4">
					<div class="card maincolor">
						<div class="card-content white-text">
							<span class="card-title center article flow-text">Contact</span>
							<p class="flow-text center-align">
								Shayne Robinson<br>
								Track Director <br>
								Phone: 678-770-1750 <br>
								<a href="mailto:ptcbmxbiz@aol.com">ptcbmxbiz@aol.com</a><br>
								<a href="visitus.php">Directions</a> <br>
								<a href="https://www.facebook.com/groups/1571144046444830/" target="_blank"><i class="fab fa-facebook-square facebook"></i></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4 xl4">
					<div class="card">
						<div class="card-image">
							<a href="https://www.rainedout.net/team_page.php?a=c9997f4274ac398c34cf" target="_blank"><img class="responsive-img imgsize" src="images/rainedout.jpg" alt="Rained Out Image link. Seach PTCBMX to sign u for track update messages"></a>
						</div>
					</div>
				</div>
				<div class="col s12 m4 xl4">
					<div class="card">
						<div class="card-image">
							<a href="https://www.rainedout.net/team_page.php?a=c9997f4274ac398c34cf" target="_blank"><img class="responsive-img imgsize" src="images/rainedout_text.jpg" alt="Rained Out messageing service.Text PTCBMX to 84483 for track updates."></a>
						</div>
					</div>
				</div>
			</div>
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
