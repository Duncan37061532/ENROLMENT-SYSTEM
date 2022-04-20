<?php
//THIS IS A SIMPLE PHP CODES

//Duncan Software Solution
<!--Button onclick Global declaration--!>
	
if (isset($_POST['Submit'])) {
//Classic variables PHP Using AddSlashes Function to Prevent Any kind of SQLinjections
	
	$Names=addslashes($_POST['name']); //ADD SLASHES IS AN INBUILT FUNCTION IN PHP THAT PREVENTS ANY KING OF SQL INJECTIONS that could be tested using SQLMAP in Kali Linux By offensive security
	$Mobile=addslashes($_POST['mobile']);
	$NationalId=addslashes($_POST['nid']);
	$Admission=addslashes($_POST['admission']);
	$Country=addslashes($_POST['country']);
	$County=addslashes($_POST['county']);
	$DOB=addslashes($_POST['dob']);
	$Fees=addslashes($_POST['fee']);
	$Course=addslashes($_POST['course']);
	$Department=addslashes($_POST['department']);

	$mike=new mysqli('localhost','root','','mikedb');
	
//Validating Connection
	
	if (!$mike) {
		echo "<script>alert('Poor connection to the server')</script>";//Dr. Duncan error Response for poor connection to the database
	}
	else{
		echo "Connection to the server Was Successful";
	}
	//Main query for Records insertion into the Mysql Database
	
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
