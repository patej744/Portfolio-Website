﻿<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Jay Patel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" defer></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" defer></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="reset.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
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
							<li class="nav-item"><a class="nav-link active" href="index.php">Homepage</a></li>
							<li class="nav-item"><a class="nav-link" href="https://docs.google.com/document/d/1AlFjYCqGxsEui1BTA3_5wQ1ZIuPUiHNyA89WhLNpQ1Q/edit?usp=sharing">Resume</a></li>
							<li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/jay-patel-5aa74b179?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Ba5qnnZxGSf%2BiWERY%2BLdAzA%3D%3D">Social Media</a></li>
							<li class="nav-item"><a class="nav-link" href="viewBlog.php">Blog</a></li>
							<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div id="sectionA">
				<h6>Computer Science Student<br/> at Queen Mary University of London</h6>
			</div>
			<main>
				<aside>
					<div id="sidebar">
						<ul>
							<li id="phpAside">
								<!-- show logged in msg if only the session varible is set -->
								<?php  if (isset($_SESSION['username'])) : ?>
									<p class="bg-dark"> Welcome <?php echo $_SESSION['username'];?>,
									<br/>
									<?php echo $_SESSION['success'];?>
									</p>
								<?php endif ?>
							</li>
							<li>
								<h2>Skills</h2>
								<ul>
									<li>Algorithms</li>
									<li>Java</li>
									<li>Leadership</li>
									<li>Sales</li>
									<li>Teamwork</li>
								</ul>
							</li>
							<li>
								<h2>Hobbies</h2>
								<ul>
									<li>Building computers</li>
									<li>Cricket</li>
									<li>Badminton</li>
									<li>Gaming</li>
									<li>Cycling</li>
									<li>Gym </li>
								</ul>
							</li>
						</ul>
					</div>
				</aside>
				<aside id="asidelinks">
					<div id="sidebar">
						<ul>
							<li>
								<h2>Links</h2>
								<ul>
									<li><a href="#aboutme">About me</a></li>
									<li><a href="#education">Education</a></li>
									<li><a href="#workexperiance">Work Experience</a></li>
									<li><a href="#personalpro">Personal Projects</a></li>
									<li>
										<?php  if (isset($_SESSION['username'])) : ?>
											<a href="logout.php">Logout</a>
										<?php endif ?>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</aside>

				<article>
						<!--About Me-->
						<section id="aboutme">
							<div class="post">
								<h3 class="title">About Me</h3>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div id="post-text">
										<p><font size="3">Hard-working, curious, and dedicated. A hands-on person that likes to innovate and create things such as computers and programs. Great communication time management skills built from previous work experiences and tasks at school.</font></p>
									</div>
								</div>
								<div class="col-md-4">
									<figure>
										<img src="me.jpg" />
										<figcaption><p>Me</p></figcaption>
									</figure>
								</div>
							</div>
						</section>

						<!--Education-->
						<section id="education">
							<div class="post">
								<h3 class="title">Education</h3>
							</div>
							<div id="post-text">
								<table class="table">
									<tr>
										<thead>
											<th>Date</th>
											<th>Institution</th>
										</thead>
									</tr>
									<tr>
										<th>2019 - PRESENT</th>
										<td>Queen Mary University of London</td>
									</tr>
									<tr>
										<th>2017 - 2019</th>
										<td>Newham Collegiate Sixth Form</td>
									</tr>
									<tr>
										<th>2012 - 2017</th>
										<td>Forest Gate Community School</td>
									</tr>
								</table>
							</div>
						</section>

						<!--Work Experiance-->
						<section id="workexperiance">
							<div class="post">
								<h3 class="title">Work Experience</h3>
							</div>
							<div id="post-text">
								<table class="table">
									<tr>
										<thead>
											<th>Date</th>
											<th>Place and Title</th>
											<th>Tasks</th>
										</thead>
									</tr>
									<tr>
										<th>FEB 2020 - PRESENT</th>
										<th>Study.,<br/> London — Tutor</th>
										<td>
											<ul>
												<li>Part-time GCSE maths and triple/double science tutor</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>NOV 2019 - PRESENT</th>
										<th>Post Office Ltd,<br/> London — Sales Assistant</th>
										<td>
											<ul>
												<li>Serving customers at the cash register</li>
												<li>Merchandising</li>
												<li>Restocking shelves</li>
												<li>Keeping the building tidy</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>JUL 2017 - AUG 2017</th>
										<th>Krishna News,<br/> London — Cashier and Stock Clerk</th>
										<td>
											<ul>
												<li>Restocking the products</li>
												<li>Serving customers at the cash register</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>JAN 2016 - JAN 2016</th>
										<th>Tesco PLC,<br/> London — Stock Clerk</th>
										<td>
											<ul>
												<li>Reorganising the storage compartments</li>
											</ul>
										</td>
									</tr>
								</table>
							</div>
						</section>
						
						<!--Personal Projects-->
						<section id="personalpro">
							<div class="post">
								<h3 class="title">Personal Projects</h3>
							</div>
							<div id="post-text">
								<table class="table">
									<col width="40">
									<col width="40">
									<col width="300">
									<tr>
										<thead>
											<th>Date</th>
											<th>Project</th>
											<th>Description</th>
										</thead>
									</tr>
									<tr>
										<th>Feb 2020 – Present</th>
										<th>Personal Website</th>
										<td>Currently developing a portfolio website with skills and languages I'm currently learning at university. Tools that I have used and will use later when further developing the website include HTML, CSS, Bootstrap, JavaScript, PHP, Sublime Text 3, Github, Git bash, Windows and Linux.</td>
									</tr>
									<tr>
										<th>Sep 2019 – Dec 2019</th>
										<th>Impossible Quiz</th>
										<td>A quiz that asks the user to correctly answer questions to gain the highest score. Challenges were that questions would be repeated so I learnt ArrayLists and sorting algorithms, using Stack Overflow and YouTube videos, to display unique questions and the user’s scores in descending order. I used Java, Github, Git bash, Linux, Windows, Eclipse IDE and Sublime Text 3.</td>
									</tr>
									<tr>
										<th>Sep 2019 – Oct 2019</th>
										<th>Restaurant Consultation Project</th>
										<td>We were given a scenario where a restaurant hired us to help them improve their speed of service, table booking, and payment system and customer satisfaction. I nominated myself as the project manager and assigned each task to those who had prior experience in that field. To ensure everyone is up to date, we had meetings every other day to share what we have done, what we have to do and to practice our presentation. We used Microsoft PowerPoint, Microsoft Word, Google Docs, Google Slides and Windows.</td>
									</tr>
								</table>
							</div>
						</section>
				</article>
			</main>
		</div>
	</body>
	<?php include 'footer.php'?>
</html>
