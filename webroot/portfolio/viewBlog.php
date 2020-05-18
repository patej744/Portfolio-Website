<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Blog</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" defer></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" defer></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="reset.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="style2.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
		<div id="wrapper">
			<?php include'header.php'?>
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
			<main>
				<aside>
					<li>
						<!-- show logged in msg if only the session varible is set -->
						<?php  if (isset($_SESSION['username'])) : ?>
							<p class="bg-dark"> Welcome <?php echo $_SESSION['username'];?>,
							<br/>
							<?php echo $_SESSION['success'];?>
							</p>
						<?php endif ?>
					</li>
					<li>
						<!-- if logged in, link to add blog page else redirect to login page -->
						<?php  if (isset($_SESSION['success'])) : ?>
							<a href="addPost.php">Add new blog</a>
						<?php endif ?>
						<?php  if (!isset($_SESSION['success'])) : ?>
							<a href="login.html">Add new blog</a>
						<?php endif ?>
					</li>
					<li>
						<!-- display a logout option if the user is logged in -->
						<?php  if (isset($_SESSION['success'])) : ?>
							<a href="logout.php">Logout</a>
						<?php endif ?>
					</li>
				</aside>
				<article>
					<?php
						$conn = new mysqli("10.131.17.96", "user", "password", "ecs417");
						// Checks connection
						if ($conn->connect_error) {
						 	die("Connection failed: " . $conn->connect_error); 
						}
						//Change timezone to UTC
						date_default_timezone_set('UTC');

						//Gets all the blogs from the database in descending order
						$sql= mysqli_query($conn, "SELECT * FROM blogs order by id DESC");
						//For each database entry, store each field in a variable and format the dates and times
						while ($result = mysqli_fetch_assoc($sql)) {
							$blogTitle = $result['blogTitle'];
							$blogDetails = $result['blogDetails'];
							$blogDate = $result ['blogDate'];
							$blogTime = $result ['blogTime'];
							echo "<h1>". "$blogTitle" ."</h1>";
							echo "<p class='fa fa-clock-o' aria-hidden='true'> " . date('jS F Y, ', strtotime($blogDate));
							echo date('G:i T', strtotime($blogTime)) . "</p>" . "<br/>";
							echo "$blogDetails" ."<br/>";
							echo "<hr/>";
						}
					?>
				</article>
			</main>
		</div>
	</body>
	<?php include 'footer.php'?>
</html>