<?php
require_once('../private/initialize.php');
require_once("../private/shared/header.php");
?>

<div class="hero2">
	<div class="hero-text">
			<h1>Register for an account</h1>
	</div>
</div>
<section class="section-light">
<?php
global $errors;
if (is_post_request()){
    $new_user = [];
    $pwd = true;
    $email_entered = true;
    //check user enter something
    if(!empty($_POST['email']) && strlen($_POST['email'] ) < 75){
        $new_user['email'] = strtolower($_POST['email']);
    }else {
        $errors .= " Enter a email that is less the 75 characters";
        $new_user['email'] = "";
    }
    if(!empty($_POST['password']) && strlen($_POST['password']) < 25 && strlen($_POST['password']) >= 6 ){
        $new_user['password'] = $_POST['password'];
    }else {
        $errors .= " Enter a password that is minum of 6 characters long and maximum of 25 characters";
        $new_user['password'] = "";
    }
    if(!empty($_POST['password2'])){
        $new_user['password2'] = $_POST['password2'];
    }else {
        $errors .= " Enter a confirming password that is minum of 6 characters long and maximum of 25 characters";
        $new_user['password2'] = "";
    }
    if(!empty($_POST['firstname']) && strlen($_POST['firstname']) < 50){
        $new_user['firstname'] = $_POST['firstname'];
    }else {
        $errors .= " Enter a first name that is less then 50 characters long";
    }

    if(!empty($_POST['lastname']) && strlen($_POST['firstname']) < 50){
        $new_user['lastname'] = $_POST['lastname'];
    }else {
        $errors .= " Enter a last name that is less then 50 characters long";
    }

    //filter illegal email chars out
    $new_user['email'] = filter_var($new_user['email'], FILTER_SANITIZE_EMAIL);
    //check if valid format
   if(!filter_var($new_user['email'], FILTER_VALIDATE_EMAIL)){
       $errors .= " Enter a valid email address!";
  }
    //return true if email exist false if not
    if(check_email_exist($new_user['email'])){
       $errors .= " Email allready registered for an account.";
   }
   //check pwd1 and pwd2 match
   //keep from error out by pwd being null
   if($new_user['password'] != $new_user['password2']){
     $errors .= " Passwords do not match ";
   }


    if(empty($errors)){
        register($new_user);
    }
}

?>
	<div><?php echo $errors; ?></div>
	<form action="register.php" method="post">
		<legend>Enter Username and Password</legend>

		<label for="Email">Email(username):</label>
			<input placeholder="Email" name="email" type="text" maxlength="75"> <br>

		<label for="password">Password:</label>
			<input placeholder="Password" name="password" type="password" maxlength="25"> <br>

		<label for="password2">Confirm Password:</label>
				<input placeholder="Password" name="password2" type="password" maxlength="25"> <br>

		<label for="firstname">Firstname:</label>
				<input placeholder="FirstName" name="firstname" type="text" maxlength="50"> <br>

		 <label for="lastanme">Lastname:</label>
				<input placeholder="lastname" name="lastname" type="text" maxlength="50"> <br> <br>

		<input class="submit" name="login" type="submit" value="register">
		<br>
		<br>
		<span>By singing up your agree to term and conditions</span>
	</form>
</section>

<?php
require_once("../private/shared/footer.php");
?>
