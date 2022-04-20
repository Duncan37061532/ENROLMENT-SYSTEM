<?php
if (isset($_POST['Submit'])) {

	$Names=$_POST['name'];
	$Mobile=$_POST['mobile'];
	$NationalId=$_POST['nid'];
	$Admission=$_POST['admission'];
	$Country=$_POST['country'];
	$County=$_POST['county'];
	$DOB=$_POST['dob'];
	$Fees=$_POST['fee'];
	$Course=$_POST['course'];
	$Department=$_POST['department'];

	$mike=new mysqli('localhost','root','','mikedb');

	if (!$mike) {
		echo "<script>alert('Poor connection to the server')</script>";
	}
	else{
		echo "Connection to the server Was Successful";
	}
	$sql="INSERT INTO studentstbl(Names,Mobile,NationalID,Admission,Country,County,DOB,FeesAmount,Course,Department) VALUES('$Names','$Mobile','$NationalId','$Admission','$Country','$County','$DOB','$Fees','$Course','$Department')";
	$result=mysqli_query($mike,$sql);
	if ($result) {
		
		header("location:index.html");
		echo "<script>alert('New Student records captured successfully')</script>";
	}


	else
	{
		echo "<script>alert('Could not Submit your Details. Please try again later..')</script";
	}
		
}
?>