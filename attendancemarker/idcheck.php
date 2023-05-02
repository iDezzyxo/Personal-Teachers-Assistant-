<?php
require_once 'admin/conn.php';
$student = $_POST['student'];
$a_student = $conn->query("SELECT * FROM `student` WHERE `student_no` = '$student'") or die(mysqli_error());
$c_student = $a_student->num_rows;
if($c_student > 0){
	echo 'Success';
}else{
	echo 'Error';
}
