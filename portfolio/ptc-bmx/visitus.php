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
	<title>Peachtree City BMX - Visit Us</title>
	<meta name="description" content="PTC BMX Track is located at 200 Mcintosh Trail Peachtree City, GA 30269. Find descriptive directions and track layout information here. ">
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
						<li class="bold"><a href="newrider.php">New Rider</a></li>
						<li class="active bold"><a href="visitus.php">Visit Us</a></li>
						<li class="bold"><a href="schedule.php">Schedule</a></li>
						<li class="bold"><a href="results.php">Results</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- mobile slide menu navigation -->
		<ul class="z-depth-5 sidenavfix side-nav" id="mobile-demo">
			<li><a href="index.php">Home</a></li>
			<li><a href="newrider.php">New Rider</a></li>
			<li class="active"><a href="visitus.php">Visit Us</a></li>
			<li><a href="schedule.php">Schedule</a></li>
			<li><a href="results.php">Results</a></li>
		</ul>
		<div class="z-depth-1 center secondarycolor">
			<img class="responsive-img" src="images/header3.png" alt="BMX Header Image">
		</div>
		<div class="row secondarycolor section marginzero">
			<div class="col s12">
				<h3 class="bold center">Vist Us</h3>
			</div>
		</div>
	</header>
	<main>
		<!-- directions section -->
		<div class="container">
			<section>
				<div class="row">
					<div class="col xl12">
						<div class="card maincolor">
							<div class="card-content white-text">
								<span class="card-title center article flow-text">Directions to 200 Mcintosh Trail Peachtree City, GA 30269</span>
								<p class="flow-text">
									Peachtree City can be reached from Interstate 85 and 75 and then following multi lane state highways. These directions will begin from the intersection of Highways 74 and 54. They are the two main roads in Peachtree City. Should you need more detailed directions than the ones that follow, please call the track director.
									<br><br>
									From the intersection of Hwy 74 and 54 go South on Hwy 74. You will go through one traffic light at Paschal/Willow Road. The fire department will be on the right. Continue South. You will then see a brown DOT sign which states Amphitheater/BMX Track. At the next light turn left on Kelly Drive. After you turn left, you will go approximately one half mile. You will then pass the dam for Lake Peachtree and the road will change names to McIntosh Trail. The recreation complex is about one quarter mile past the lake. Turn right into the complex and follow the road to the back. The track is located in the rear of the recreation complex.
									<br><br>
									Note: The actual address is 191 McIntosh Trail, Peachtree City, GA 30269.GPS have trouble finding this address that why we use 200 Mcintosh Trail Peachtree City, GA 30269.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d832.8772997124954!2d-84.5673881!3d33.3838773!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f4ea4baf026821%3A0xae992a9db223b52f!2sPeachtree+City+BMX+Track!5e0!3m2!1sen!2sus!4v1543970972817" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				
				<div class="row">
					<div class="col s12 m6 xl6">
						<div class="card">
							<div class="card-image">
								<img class="responsive-img imgsize" src="images/map1.jpg" alt="Map of Directions One">
							</div>
						</div>
					</div>
					<div class="col s12 m6 xl6">
						<div class="card">
							<div class="card-image">
								<img class="responsive-img imgsize" src="images/map2.jpg" alt="Map of Directions Two">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6 xl6">
						<div class="card">
							<div class="card-image">
								<img class="responsive-img imgsize" src="images/map3.jpg" alt="Map of Directions Three">
							</div>
						</div>
					</div>
					<div class="col s12 m6 xl6">
						<div class="card">
							<div class="card-image">
								<img class="responsive-img imgsize" src="images/tracklayout.jpg" alt="Map of Track layout">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<div class="card">
							<div class="card-image">
								<img class="responsive-img imgsize" src="images/ptcmap.gif" alt="Handdrawn Map of Peachtree City">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- hotels -->
			<section>
				<div class="row">
					<div class="col s12">
						<div class="card maincolor">
							<div class="card-content white-text">
								<span class="card-title center article flow-text">Hotel for PTC</span>
								<p class="flow-text center-align">
									If you are planning to stay in Peachtree City, check out the rates at: <br>
									<a href="https://secure3.hilton.com/en_US/hi/reservation/book.htm?execution=e1s1" target="_blank">Peactree City Atlanta Hotel &amp; Conference Center</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Contact and Message list -->
			<section>
				<div class="row">
					<div class="col s12 m6 xl4">
						<div class="card">
							<div class="card-image">
								<a href="https://www.rainedout.net/team_page.php?a=c9997f4274ac398c34cf" target="_blank"><img class="responsive-img imgsize" src="images/rainedout.jpg" alt="Rained Out Image link. Seach PTCBMX to sign u for track update messages"></a>
							</div>
						</div>
					</div>
					<div class="col s12 m6 xl2">
						<div class="card">
							<div class="card-image">
								<a href="https://www.rainedout.net/team_page.php?a=c9997f4274ac398c34cf" target="_blank"><img class="responsive-img imgsize" src="images/rainedout_text.jpg" alt="Rained Out messageing service.Text PTCBMX to 84483 for track updates."></a>
							</div>
						</div>
					</div>
					<div class="col s12 xl6">
						<div class="card maincolor">
							<div class="card-content white-text">
								<span class="card-title center article flow-text">Contact</span>
								<p class="flow-text center-align">
									Shayne Robinson<br>
									Track Director <br>
									Phone: 678-770-1750 <br>
									<a href="mailto:ptcbmxbiz@aol.com">ptcbmxbiz@aol.com</a><br>
									<a href="https://www.facebook.com/groups/1571144046444830/" target="_blank"><i class="fab fa-facebook-square facebook"></i></a>
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
