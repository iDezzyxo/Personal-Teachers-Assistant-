<?php
require_once 'conn.php';
$a_adminname = $conn->query("SELECT * FROM `admin` WHERE 'admin_no' = '$_SESSION[admin_id]'") or die(mysqli_error());
$b_adminname = $a_adminname->fetch_array();
$admin_name = $b_adminname['firstname']." ".$b_adminname['lastname'];