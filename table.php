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