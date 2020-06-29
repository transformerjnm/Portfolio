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
	<title>Peachtree City BMX - Schedule</title>
	<meta name="description" content="Peachtree City(PTC) BMX Track is the ultimate family friendly BMX sport facility.   Look at the schedule of all the race dates and events.">
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
						<li class="bold"><a href="visitus.php">Visit Us</a></li>
						<li class="bold active"><a href="schedule.php">Schedule</a></li>
						<li class="bold"><a href="results.php">Results</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- mobile slide menu navigation -->
		<ul class="z-depth-5 sidenavfix side-nav" id="mobile-demo">
			<li><a href="index.php">Home</a></li>
			<li><a href="newrider.php">New Rider</a></li>
			<li><a href="visitus.php">Visit Us</a></li>
			<li class="active"><a href="schedule.php">Schedule</a></li>
			<li><a href="results.php">Results</a></li>
		</ul>
		<div class="z-depth-1 center secondarycolor">
			<img class="responsive-img" src="images/header3.png" alt="BMX Header Image">
		</div>
		<div class="row secondarycolor section marginzero">
			<div class="col s12">
				<h3 class="bold center">Schedule</h3>
			</div>
		</div>
	</header>
	<main>
	
		<!-- Calendar <iframe> goses inside of the div below. Make sure to give the calendar a class="calendar" for propper sizing. -->
		<div class="center">
			<iframe class="calendar" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=qnbidltumlchiioeogvj9j2ijk%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style="border-width:0"></iframe>
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
