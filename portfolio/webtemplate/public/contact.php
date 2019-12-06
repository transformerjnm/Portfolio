<?php
require_once('../private/initialize.php');
require_once("../private/shared/header.php");
?>
<?php
global $errors;
if (is_post_request()){
		$noerrors = true;
    if (!empty($_POST['email'])){
        $email = strtolower($_POST['email']);
    }else{
       $errors .= " Please enter a email ";
    }

		if (!empty($_POST['firstname'])){
				$firstname = strtolower($_POST['firstname']);
		}else{
				$errors .= " Please enter a  first name";
		}

		if (!empty($_POST['lastname'])){
				$lastname = strtolower($_POST['lastname']);
		}else{
				$errors .=" Please enter a  last name";
		}

		if (!empty($_POST['msg'])){
				$msg = strtolower($_POST['msg']);
		}else{
				$errors .= " Please enter a  message";
		}

    if($errors){
      	mail("someone@example.com","My subject", htmlspecialchars( $firstname + " " + $lastname + " " + $email + "           " + $msg));
    }

}
?>
<div class="hero3">
	<div class="hero-text">
			<h1>Get in Touch with us For All your website needs</h1>
	</div>
</div>
<section>
		<p>This is a non working contact form</p>
			<div class="login_errors"><?php echo $errors; ?></div>
</section>
<section class="section-light">

	<form action="" method="post">
	<legend>Contact Us</legend>
	<label for="email">Email:</label>
		<input placeholder="Email" type="email" name="email"maxlength="75"> <br>

	<label for="firstname">First Name:</label>
		<input placeholder="Firstname" name="firstname" type="text" maxlength="25"> <br> <br>

	<label for="lastname">Last Name:</label>
		<input placeholder="Lastname"name="lastname" type="text" maxlength="25"> <br> <br>

	<label for="message">Message:</label>
		<input placeholder="Message" name="msg" type="text" maxlength="175"> <br> <br>

		<input class="submit" type="submit" value="Submit">
	</form>
</section>
<?php
require_once("../private/shared/footer.php");
?>
