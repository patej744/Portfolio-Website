<?php
	// Creates connection
	$conn = new mysqli("10.128.3.69", "user", "password", "ecs417");
	// Checks connection
	if ($conn->connect_error) {
	 	die("Connection failed: " . $conn->connect_error); 
	}

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		// receive all input values from the form
		$email = $_POST['useremail'];
		$password = $_POST['password'];
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		global $conn;
		$results = mysqli_query($conn, $query);
		if (mysqli_num_rows($results) == 1) {
			//Start session once login successfull
			session_start();
			//Get name of user that has logged in
			$name = mysqli_fetch_array(mysqli_query($conn, "SELECT firstName, lastName FROM users WHERE email='$email'"));
			$_SESSION['username'] = $name[0] . " " . $name[1];
			$_SESSION['success'] = "You are now logged in.";
			header('location: addPost.php');
		}else {
			?>
			<title>Error</title>
			<?php
			echo "<center><h1>Error: Wrong username/password combination </h1></center>";
			echo "<br />";
			echo "<center><h3><a href='login.html'>Try again</a></h3></center>";
			echo "<br />";
			echo "<center><h3><a href='signup.html'>Signup with different email</a></h3></center>";
		}
	}

?>