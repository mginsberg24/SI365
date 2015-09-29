<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>My family</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="family_stylesheet.css">
		<link rel="stylesheet" href="header.css">
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap.min.js">
		<link rel="stylesheet" href="footer.css">
		<meta name = 'viewport' content='width=device-width, initial-scale=1'>


	</head>
	<body>
	<?php 
		$fName = basename(__FILE__);
	
		 ?>
	<div class = "content">
		<h3>My Family Tree</h3>
		<div class="height">
		<!-- <header>
			<div class="row">
				<div class="col-xs-5">
					<h1 class = "title">My Family</h1>
				</div>
				<div class="col-xs-7 logos">
					<nav>
						<a href="https://twitter.com/"><img src="images/twitter.jpg"  alt="this links twitter"></a>
						<a href="https://www.facebook.com"><img src="images/facebook.jpg"  alt="this links to facebook"></a>
						<a href="https://www.linkedin.com/"><img src="images/linkedin.jpg" alt="this links to linkedin"></a>
						<a href="family.php" class = "link"><span>My past </span>|</a>
						<a href="index.php#about" class = "link"><span>Home </span>|</a>
					</nav>
				</div>
			</div>
		</header> -->
	
		<div class="tree">
			<ul class="family">
				<li class = "image">
					<a href="#"><img class="img-rounded" src="images/mom.jpg.png" alt="this is me"><p>Mom</p></a>
					<a href="#"><img class="img-rounded" src="images/dad.jpg.png" alt="this is me"><p>Dad</p></a>
					<ul class="siblings row">
						<li class = "col-sm-4 image">
							<a href="#"><img class="img-rounded" src="images/candice.jpg" alt="this is me"><p>Candice</p></a>
						</li>
						<li class = "col-sm-4 image">
							<a href="#"><img class="img-rounded" src="images/dean.jpg" alt="this is me"><p>Dean</p></a>
						</li>
						<li class = "col-sm-4 image">
							<a href = "#"><img class="img-rounded" src="images/mikenzie.jpg" alt="this is me"><p>Me</p></a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<section class = "phone">
			<div class="row">
				<br>
				<br>
			</div>
			<div class="row">
				<div class="col-md-10">
					<img class="img-rounded" src="images/mom.jpg.png" alt="this is me">
					<h2>Mom</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10">
					<img class="img-rounded" src="images/dad.jpg.png" alt="this is me">
					<h2>Dad</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10">
					<img class="img-rounded" src="images/candice.jpg" alt="this is me">
					<h2>Candice</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10">
					<img class="img-rounded" src="images/dean.jpg" alt="this is me">
					<h2>Dean</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10">
					<img class="img-rounded" src="images/mikenzie.jpg" alt="this is me">
					<h2>Me</h2>
				</div>
			</div>
		</section>
		<!-- <footer>
				Made by Mikenzie Ginsberg &#169;
		</footer> -->
	
	</div>
		
		</div>
	</body>
</html>