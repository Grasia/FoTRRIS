<?php
require_once 'util.php';
require_once ROOT_PATH.'config/db_connect.php';
require_once 'functions.php';
sec_session_start();

// Unset all session values 
$_SESSION = array();

// get session parameters 
$params = session_get_cookie_params();

// Delete the actual cookie. 
setcookie(session_name(),'', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);

// Destroy session 
session_destroy();
header("Location: ../home.php");
exit();
