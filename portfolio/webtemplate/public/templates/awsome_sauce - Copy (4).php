<?php
//require login
if(!isset($_SESSION['user_id'])){
    $url="login.php";
    redirect_to($url);
}
?>