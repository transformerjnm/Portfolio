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
	<title>Peachtree City BMX - Template</title>
	<!-- ENTER A META DESCRIPTION *********************************************** -->
	<meta name="description" content="">
	<?php include 'shared/update.php'; ?>
	<style type="text/css">
		<?php if ($alert=="") {
			?>.noshow {
				display: none;
			}

			<?php
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
			<li><a href="schedule.php">Schedule</a></li>
			<li><a href="results.php">Results</a></li>
		</ul>
		<div class="z-depth-1 center secondarycolor">
			<img class="responsive-img" src="images/header3.png" alt="BMX Header Image">
		</div>
		<div class="row secondarycolor section marginzero">
			<div class="col s12">
				<h3 class="bold center"><?php echo $pagetitle; ?></h3>
			</div>
		</div>
	</header>