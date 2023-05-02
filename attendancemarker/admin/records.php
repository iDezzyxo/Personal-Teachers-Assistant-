<!DOCTYPE html>
<?php
	require_once 'valid.php';
	require_once 'conn.php';
?>
<html lang = "eng">
<head>

<script src = js/jquery-3.6.4.min.js></script>
<script src = "js/adlogin.js"></script>
    <meta charset = "utf-8" />
    <title>Class Attendance</title> 
	<link rel = "stylesheet" href = "styles/adminstyles.css" />
</head>
<header>
<div class ="head">
    <h1>ISC 496 Attendance</h1>
</div>
</br>
	<nav>
    <ul>
	<button><li><a href = "adlogout.php">Logout</a></li></button>
	<button><li><a href = "home.php"> Home</a></li></button>
	</ul>
</nav>
</header>
<div class = "main">
				<center> <h2 class = "h22">Attendance Records</h2> <center>
</div>
</br>
</br>
	<table class = "Rtable">
<thead>
	<tr>
		<th>Student Number</th>
		<th>Student Name</th>
		<th>Time</th>
		<th>Date</th>	
	</tr>
</thead>
<tbody>
<?php
		$a_time = $conn->query("SELECT * FROM `time`") or die(mysqli_error());
		while($b_time = $a_time->fetch_array()){
			
			?>
		<tr>
			<td><?php echo $b_time['student_no']?></td>
			<td><?php echo htmlentities($b_time['student_name'])?></td>
			<td><?php echo date("h:i a", strtotime($b_time['time']))?></td>
			<td><?php echo date("m-d-Y", strtotime($b_time['date']))?></td>
		</tr>
<?php
}
?>
		
<tbody>
</table>
<br/>
</body>
<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	
</html>
	