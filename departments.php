<!DOCTYPE html>
<html>
<head>
	<title>Employees Sign Up</title>
</head>

<link rel="stylesheet" type="text/css" href="depstyle.css">
<body>
	<form method="post" action="">
		<div class="wrapper">
<div>
	<h1>SIGN UP FORM</h1>
<label>First Name:</label><br>
</div>
<input name="fname" type="text"  placeholder="Enter First name" ></p>

<label>last Name:</label><br>
<input type="text" name="lname" placeholder="input last name">
<p>

	<label>Email:</label><br>
	<input type="Email" name="email" placeholder="Enter email"><p>
		<label>Password:</label><br>

		<input type="Password" name="pass" placeholder="Enter Password" required="on"><p>
			<label>Confirm password:</label><p>
				<input type="Password" name="Password" placeholder="Confirm Password" required="on"></p>
					<div class="btn">
		<button type="submit" name="submit">Sign Up</button>
	</div>

	</div>


	</form>
</body>
</html>
<?php
if (isset($_POST)) {
	
	
}
?>
