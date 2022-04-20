<?php
if (isset($_POST['submit'])); {
$FirstName=$_POST['fname'];
$SecondName=$_POST['lname'];
$Email=$_POST['email'];
$Password=$_POST['pass'];
$Confirmpassword=$_POST['Password'];

	$conn=mysqli_connect('localhost','root','','employessdb');
	
$sql="INSERT INTO semployeestbl(FisrtName,LastName,Email,Password,Confirmpassword) VALUES('$FirstName','$SecondName','$Email','$Password','$Confirmpassword')";
$result=mysqli_query($conn,$sql);

if ($result) { 
	echo "<script>alert('Account created successfully') </script>";

}
else
{
	echo "<script>alert('Error creating account')</script>";
}

}

?>