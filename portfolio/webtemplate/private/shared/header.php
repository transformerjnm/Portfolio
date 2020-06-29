<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../public/styles.css">
	<meta name="description" content="Website Templates is a Free Website Design template site!">
	<link rel="canonical" href="https://jnmportfolio.000webhostapp.com/portfolio/c-r-compressors/index.php" />
	<title></title>
</head>
	<body>
		<header>
			<nav>
				<ul>

					<li><a href="https://jacobportfolio.com/">Portfolio</a></li>
					<li><a href="https://jnmportfolio.000webhostapp.com/portfolio/webtemplate/public/index.php">Home</a></li>
					<li><a href="https://jnmportfolio.000webhostapp.com/portfolio/webtemplate/public/template.php">Templates</a></li>
					<li><a href="https://jnmportfolio.000webhostapp.com/portfolio/webtemplate/public/contact.php">Contact</a></li>

					<!-- If not loged in show log in-->
					<?php if(!isset($_SESSION['user_id'])){ ?>
						<li><a href="https://jnmportfolio.000webhostapp.com/portfolio/webtemplate/public/login.php">Login</a></li>
					<?php }
						/*IF logged in show log out option*/
					 else {?>
						<li><a href="https://jnmportfolio.000webhostapp.com/portfolio/webtemplate/public/logout.php">Logout</a></li>
					<?php }?>
					<!-- IF admin give admin link-->
					<?php if($_SESSION['admin'] ?? false){?>
						<li><a href="https://jnmportfolio.000webhostapp.com/portfolio/webtemplate/public/admin.php">Admin</a></li>
					<?php }?>
					
				</ul>
			</nav>
		</header>
	<main>
