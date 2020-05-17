<?php
	session_start(); 

	// Creates connection
	$conn = new mysqli("10.128.3.69", "user", "password", "ecs417");
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
		//Insert data from form into database
		$sql = "INSERT INTO `blogs` (blogTitle, blogDetails, blogDate, blogTime)
					VALUES ('$title', '$blogDetails', curDate(), curTime())";
		$conn->query($sql);
		header('Location: viewBlog.php');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Add Blog</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" defer></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" defer></script>
		<script src="script.js" ></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="reset.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
		<div id="wrapper">
			<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<div class="navbar-nav mr-auto">
						<ul id="menu">
							<li class="nav-item"><a class="nav-link" href="index.php">Homepage</a></li>
							<li class="nav-item"><a class="nav-link" href="https://docs.google.com/document/d/1AlFjYCqGxsEui1BTA3_5wQ1ZIuPUiHNyA89WhLNpQ1Q/edit?usp=sharing">Resume</a></li>
							<li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/jay-patel-5aa74b179?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Ba5qnnZxGSf%2BiWERY%2BLdAzA%3D%3D">Social Media</a></li>
							<li class="nav-item"><a class="nav-link active" href="viewBlog.php">Blog</a></li>
							<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div id="sectionB">
				<h6>Blog</h6>
			</div>
			<article id="blog_article">
				<form id="blogForm" method="post" name="blogForm" action="addPost.php">
					<center><legend>Add Blog</legend></center>
					<label>Title :</label>
					<input type="text" name="title" id="title"/>
					<br />
					<label>Details :</label>
					<textarea type="text" name="blogDetails" id="blogDetails" rows="10"></textarea>
					<button type="submit" id="submit" name="postButton" onclick="postPost(this.form)"> Post </button>
					<button type="button" id="submit" name="clear" onclick="clearPost()"> Clear </button>
					<button type="button" id="submit" name="discard" onclick="discardPost()"> Discard </button>
				</form>
			</article>
		</div>
	</body>
</html>