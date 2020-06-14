<?php
require_once('../private/initialize.php');
require_once("../private/shared/header.php");
?>

<div class="hero2">
	<div class="hero-text">
			<h1>Login or Create an Account</h1>
	</div>
</div>
<section class="section-light">
<?php
global $errors;
if (is_post_request()){
    if (!empty($_POST['email'])){
        $email = strtolower($_POST['email']);
    }else{
        $errors .= " Please enter a email ";
    }
    if (!empty($_POST['password'])){
     $password = $_POST['password'];
    }else{
        $errors .= " Please enter a password ";
    }
    if(empty($errors)){
        login($email, $password);
    }
}
?>
	<div class="login_errors"><?php echo $errors; ?></div>

	<form action="login.php" method="post">

		<legend>Enter Username and Password</legend>

		<label for="Email">Email( User Name ):</label>
			<input name="email" type="text" placeholder="Email" maxlength="75"> <br>

		<label for="password">Password:</label>
			<input placeholder="password" name="password" type="password" maxlength="25"> <br>

		<input class="submit" name="login" type="submit" value="Login">
		<br>

		<div class="register_btn">

			<a  href="https://jnmportfolio.000webhostapp.com/portfolio/webtemplate/public/register.php">Register Here</a>

		</div>

	</form>

</section>

<?php
require_once("../private/shared/footer.php");
?>
