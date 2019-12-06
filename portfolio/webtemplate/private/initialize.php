<?php 

session_start();
require_once('db_functions.php');
require_once('db_query.php');
require_once('validate.php');
require_once('functions.php');


$db = db_connect();
$connected = true;
$errors;

?>