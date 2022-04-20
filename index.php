<!DOCTYPE html>
<html>
<head>
	<title>STUDENTS REGISTRATION PAGE</title>
	<h1>STUDENTS ENROLMENT SYSTEM</h1>
</head>
<style type="text/css">
	body{
		background-image: url('images/login-bg.jpg')
	}

</style>
<link rel="stylesheet" type="text/css" href="Style/mike.css">
<body>
	<form action="query.php" method="post">
		<div class="container">
			<label for="Name">Name</label><br>
			<input type="text" name="name" id="Name" placeholder="Enter full names"><p>

			<label for="mobile">Mobile</label><br>
			<input type="Mobile" name="mobile" placeholder="Enter phone" id="mobile" required="yes"><p>

			<label>National Id</label><br>
			<input type="number" name="nid" placeholder="Enter National Id" required="yes"><p>

			<label>Admission</label><br>
			<input type="text" name="admission" placeholder="Enter Admission number" required="yes"><p>
				<label>Select country</label><br>
				<select type="text" required="yes" name="country">
					<option>select</option>
					<option>Kenya</option>
					<option>Togo</option>
					<option>Uganda</option>
					<option>Tunisia</option>
					<option>Tanzania</option>
					<option>Nigeria</option>

				</select><p></p>

				<label>Select county</label><br>
				<select type="text" name="county">
					<option>select</option>
					<option>Trans nzoia</option>
					<option>BUNGOMA</option>
					<OPTION>BOMET</OPTGROUP>
					<option>KILIFI</option>
					<OPTION>BUSIA</OPTION>
					<OPTION>MT ELGON</OPTION>
					<OPTION>MERU</OPTION>
				</select><p>
				<label>DOB</label><br>
				<input type="date" name="dob"><p></p>
				<label>Fee amount</label><br>
				<input type="number" name="fee"><p></p>
				<label>Faculity</label><br>
				<select type="text" name="course">
					<option>Select</option>
					<option>Computing</option>
					<option>Engineering</option>
					<option>Catering</option>
					<option>Civil</option>
					<option>Survey</option>
					
				</select><p>
				<label>Department</label><br>
				<input type="text" name="department"><p>
					
					<div class="btn">
						<button type="submit" name="Submit">Register</button>
						
					</div>
					Already have and account? <a href="login.php">Login Here</a> <a href="table.php">View Records</a>





		</div>
	</form>
</body>
</html>
<?php
include('connection.php');


$sql="SELECT * FROM studentstbl";
$result=mysqli_query($mike,$sql);
if ($result) {
	echo "<script>alert('Record moved to the table')</script>";
	}

	echo "<table border='1' align = 'center'>
		<tr>
			<th>Course ID</th>
			<th>Names</th>
			<th>Mobile</th>
			<th>National ID</th>
			<th>Admission</th>
			<th>Country</th>
			<th>County</th>
			<th>DOB</th>
			<th>Fees Amount</th>
			<th>Faculty</th>
			<th>Department</th>
		</tr>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr>";
					echo"<td>".$row['courseID']."</td>";
					echo"<td>".$row['Names']."</td>";
					echo"<td>".$row['Mobile']."</td>";
					echo"<td>".$row['NationalID']."</td>";
					echo"<td>".$row['Admission']."</td>";
					echo"<td>".$row['Country']."</td>";
					echo"<td>".$row['County']."</td>";
					echo"<td>".$row['DOB']."</td>";
					echo"<td>".$row['FeesAmount']."</td>";
					echo"<td>".$row['Course']."</td>";
					echo"<td>".$row['Department']."</td>";



				 echo "</tr>";

		}	


	echo "</table>";


?>