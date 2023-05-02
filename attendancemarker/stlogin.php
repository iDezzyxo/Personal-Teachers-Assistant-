<?php
require_once 'idcheck.php';
require_once 'admin/conn.php';
$student = $_POST['student'];
$time = date("H:i", strtotime("+8 hours"));
$date = date("Y-m-d", strtotime("+8 hours"));
$a_student = $conn->query("SELECT * FROM `student` WHERE `student_no` = '$student'") or die(mysqli_error());
$b_student = $a_student->fetch_array();
$student_name = $b_student['firstname']." ".$b_student['lastname'];
$conn->query("INSERT INTO `time` VALUES('', '$student', '$student_name', '$time', '$date')") or die(mysqli_error());
echo "<h3>".$student_name." <label>at  ".date("h:i a", strtotime($time))."</label></h3>";