<?php
	// Creates connection
	$conn = new mysqli("10.128.3.69", "user", "password", "ecs417");
	// Checks connection
	if ($conn->connect_error) {
	 	die("Connection failed: " . $conn->connect_error); 
	}

	 // REGISTER USER
	if (isset($_POST['signup_user'])) {
		// receive all input values from the form
		$fname = $_POST['firstName'];
		$lname = $_POST['lastName'];
		$email = $_POST['useremail'];
		$pass1 = $_POST['password'];
		$pass2 = $_POST['password2'];


		// first check the database to make sure 
		// a user does not already exist with the same username and/or email
		$user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if ($user) { // if user exists
			?>
			<title>Error</title>
			<?php
			echo "<center><h1>Error: email already exists </h1></center>";
			echo "<br />";
			echo "<center><h3><a href='signup.html'>Signup with different email</a></h3></center>";
			echo "<br />";
			echo "<center><h3><a href='login.html'>Login instead</a></h3></center>";
		} elseif($pass1 <> $pass2) {//if the two passwords do not match
			?>
			<title>Error</title>
			<?php 
			echo "<center><h1>Error: Passwords do not match</h1></center>";
			echo "<br />";
			echo "<center><h3><a href='signup.html'>Try again</a></h3></center>";
		} else {
			$sql = "INSERT INTO `users` (firstName, lastName, email, password)
					VALUES ('$fname', '$lname', '$email', '$pass1')";
			$conn->query($sql);
			echo "<center><h1>Login successful!</h1></center>";
			echo "<br />";
			echo "<center><h3><a href='login.html'>Login</a></h3></center>";
		}
	}

?>