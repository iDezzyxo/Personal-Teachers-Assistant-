<!DOCTYPE html>
<?php
	require_once 'valid.php';
	require_once 'conn.php';

?>
<html lang = "eng">
<head>
    <meta charset = "utf-8" />
    <title>Class Attendance</title> 
    <link rel = "stylesheet" href = "./styles/adminstyles.css" />
</head>
<header>
<div class ="head">

            <h1>ISC 496 Attendance</h1>

</div>
<br/>
<nav>
    <ul>
	<button><li><a href = "adlogout.php">Logout</a></li></button>
	<button><li><a href = "records.php"> Records</a></li></button>
	</ul>
</nav>
</header>
<body>
<div class = "main">
				<center> <h2 class = "h22">Home Page</h2> <center>

<br/>	
<br/>
<div class = "sub"><h3> Student Roster</h3></div>
<br/>

<table class = "Rtable">
<thead>
	<tr>
	   
		<th>Student Number</th>
		<th>Student Name</th>
		<th>Present Days</th>
	</tr>
</thead>
<tbody>

<?php
		$a_time = $conn->query("SELECT student_name, student_no, COUNT(*) AS Total FROM time GROUP BY student_no;") or die(mysqli_error());
		while($b_time = $a_time->fetch_array()){
			

			?>

		<tr>
		    <td><?php echo $b_time['student_no']?></td>
			<td><?php echo htmlentities($b_time['student_name'])?></td>
		    <td><?php echo $b_time['Total']?></td>
		</tr>
		
		
<?php
}
?>
		
<tbody>
</table>
<br/>
</body>

	
</div>
</body>
<script src = js/jquery-3.6.4.min.js></script>
</html>