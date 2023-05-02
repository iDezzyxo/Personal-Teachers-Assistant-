<?php
require_once 'conn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$a_login = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username' && `password` = '$password'") or die(msqli_error());
$b_login = $a_login->fetch_array();
$c_login = $a_login->num_rows;
if($c_login > 0){
	echo 'success';
	session_start();
	$_SESSION['admin_id'] = $b_login['admin_id'];
}