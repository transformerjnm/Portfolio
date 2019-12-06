<?php
require_once('../private/initialize.php');
if($_SESSION['user_id']){ 
    global $db;
   unset($_SESSION['user_id']);
   unset($_SESSION['user_name']);
   unset($_SESSION['admin']);
   session_regenerate_id();   
   //normaly called in footer. must call manuel since no footer
   db_disconnect($db);
   redirect_to("login.php");
}
?>