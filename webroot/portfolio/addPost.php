<?php
	session_start(); 

	// Creates connection
	$conn = new mysqli("10.130.17.62", "blogs", "password", "ecs417");
	// Checks connection
	if ($conn->connect_error) {
	 	die("Connection failed: " . $conn->connect_error); 
	}

	if (!isset($_SESSION['success'])) {
		header('location: login.html');
	}
	
	if (isset($_POST['postButton'])) {
		// receive all input values from the form
		$title = $_POST['title'];
		$blogDetails = $_POST['blogDetails'];
		$curDate = date('Y-m-d');
		$curTime = date('g:i T');
		//Insert data from form into database
		$sql = "INSERT INTO `blogs` (blogTitle, blogDetails, blogDate, blogTime)
					VALUES ('$title', '$blogDetails', '$curDate', '$curTime')";
		$conn->query($sql);
		header('Location: viewBlog.php');
	}

?>