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
	<title>Peachtree City BMX - Results</title>
	<meta name="description" content="Peachtree City(PTC) BMX Track is the ultimate family friendly BMX sport facility. Find all race results and  final placements for PTC BMX here.">
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
						<li class="bold"><a href="schedule.php">Schedule</a></li>
						<li class="bold active"><a href="results.php">Results</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- mobile slide menu navigation -->
		<ul class="z-depth-5 sidenavfix side-nav" id="mobile-demo">
			<li><a href="index.php">Home</a></li>
			<li><a href="newrider.php">New Rider</a></li>
			<li><a href="visitus.php">Visit Us</a></li>
			<li><a href="schedule.php">Schedule</a></li>
			<li class="active"><a href="results.php">Results</a></li>
		</ul>
		<div class="z-depth-1 center secondarycolor">
			<img class="responsive-img" src="images/header3.png" alt="BMX Header Image">
		</div>
		<div class="row secondarycolor section marginzero">
			<div class="col s12">
				<h3 class="bold center">Race Results</h3>
			</div>
		</div>
	</header>
	<main>
		<!-- New Tabel Entrie - copy and past below code inside <tbody> tag at the top. DO NOT NEST <tr>.
			
				<tr>
					<td><a href="results/" target="_blank">Race Type</a>
					<td>Race Date</td>
					<td>Race Condition</td>
				</tr>
				
				Inside the first <td> is a <a>. the <a> has a href="results/". enter your file name there. Your file should be saved in the results folder.
				example: <td><a href="results/localrace20181006.pdf" target="_blank">Local</a></td>
				
				All <td> have a hint on what data goes there. Delete the hint and put appropriate content there.
	
					Race Type is for local, National, State, Peach seriouse, Tripple Crown, etc. It also contains the linking <a> tag.
				
					Race date is for the date of the race. Keep the format of the date consistent for instance use mounth date, year. November 21, 2018.
				
					Race condtion is for information such as: Smooth and fast, slow and sticky, etc.
			-->
		<Table class="highlight responsive-table centered">
			<thead>
				<tr>
					<th>Race Type</th>
					<th>Race Date</th>
					<th>Race Condition</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="results/localrace20181006.pdf" target="_blank">Local</a></td>
					<td>October 6, 2018</td>
					<td>Smooth,Fast,Mild Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180922.pdf" target="_blank">Local</a></td>
					<td>September 22, 2018</td>
					<td>Smooth,Fast,Hot Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180908.pdf" target="_blank">Local</a>
					<td>September 8, 2018</td>
					<td>Smooth,Fast,Hot Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180825_peach5ch.pdf" target="_blank">Local Peach Champs</a>
					<td>August 25, 2018</td>
					<td>Smooth,Fast,Hot Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180811.pdf" target="_blank">Local</a>
					<td>August 11, 2018</td>
					<td>Smooth,Spongy,Hot Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180728_peach4.pdf" target="_blank">Local Peach</a>
					<td>July 28, 2018</td>
					<td>Smooth,Fast,Hot Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180726.pdf" target="_blank">Race Type</a>
					<td>July 26, 2018</td>
					<td>Smooth,Dry,Hot Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180519_peach3.pdf" target="_blank">Local Peach</a>
					<td>May 19, 2018</td>
					<td>Smooth,Fast,Warm Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180512.pdf" target="_blank">Local</a>
					<td>May 12,2018</td>
					<td>Smooth,Dry,Hot Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180505.pdf" target="_blank">Local</a>
					<td>May 5, 2018</td>
					<td>Smooth,Dry,Warm Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180428.pdf" target="_blank">Local</a>
					<td>April 28, 2018</td>
					<td>Smooth,Dry,Warm Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180414.pdf" target="_blank">Bob Warnicke</a>
					<td>April 14, 2018</td>
					<td>Smooth,Dusty,Warm Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180331_peach2.pdf" target="_blank">Local Peach</a>
					<td>March 31, 2018</td>
					<td>Smooth,Dusty,Warm Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180324.pdf" target="_blank">Local</a>
					<td>March 24, 2018</td>
					<td>Smooth,Dusty,Warm Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180310.pdf" target="_blank">Local</a>
					<td>March 10, 2018</td>
					<td>Smooth,Damp,Warm Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180303.pdf" target="_blank">Local</a>
					<td>March 3, 2018</td>
					<td>Dry,Damp,Warm Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180224_peach1.pdf" target="_blank">Local Peach</a>
					<td>February 24, 2018</td>
					<td>Dry,Damp,Hot Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180217.pdf" target="_blank">Local</a>
					<td>February 17, 2018</td>
					<td>Dry,Damp,Hot Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180203SQ.pdf" target="_blank">State Qualifier</a>
					<td>February 3, 2018</td>
					<td>Dry,Smooth,Mild Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180120.pdf" target="_blank">Local</a>
					<td>January 20, 2018</td>
					<td>Dry,Damp,Cold Weather</td>
				</tr>
				<tr>
					<td><a href="results/localrace20180113.pdf" target="_blank">Local</a>
					<td>January 13, 2018</td>
					<td>Dry,Damp,Cold Weather</td>
				</tr>
			</tbody>
		</Table>

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
