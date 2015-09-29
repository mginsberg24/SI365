<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Index</title>
		<meta charset="UTF-8">
		<meta name = 'viewport' content='width=device-width, initial-scale=1'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="personal_stylesheet.css">
		<link rel="stylesheet" href="header.css">
		<link rel="stylesheet" href="footer.css">
	
		<link href="http://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" charset="utf-8" src="js/jquery.tubular.1.0.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="/path/to/jquery.min.js"></script>
		<script src="jquery.js"></script>
		<script src="jquery.scrollTo.js"></script>
		<script src="jquery.nav.min.js"></script>


				<?php 
		$fName = basename(__FILE__);
	
		 ?>
				<?php
		include ("header.php");
		?>
		<div class="break">
		
		</div>
		<div  ></div>
		<div class="content">
		<section id = "intro"  class="first">
			<div class = "smallbreakintro"></div>
				<div class="intro">
					<div class="row">
						<div class="quote">
							<p> "Yesterday is history, tomorrow is a mystery, but today is a gift. That is why it is called the "present.""</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4"></div>
						<div class="col-xs-4 image" >
							<img src="images/mikenzie.jpg" alt="this is me">
						</div>
						<div class="col-xs-4"></div>
					</div>
					<div class="hello">
						<div class="row">
							<p>Hi, My name is <span>Mikenzie</span> </p>
						</div>
						<div class="row">
							<p> Learn about me</p>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<a href = "#about" id = "scroll" ><img class = "transition arrow" src="images/arrow.jpg" alt="This is an arrow"></a>
							</div>
						</div>
					</div>
				</div>
				
				<br>
				<br>
			</section>
			<div id = "phoneheight"></div>
			<section id = "about" class="about" >
				<div class="row">
					<div class="col-md-12">
					<h3 id = "me"> About Me</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p id = "discription">
						Welcome to my page! My name is Mikenzie Ginsberg and I am a Junior at the University of Michigan studying business.
						I grew up in Tribeca, New York City with my older sister, Candice and older brother, Dean and my dog Butch. I attended Poly Prep Country
						Day School for middle and high school. In my free time, I love to watch movies, hang out with friends and play with my dog. However, my
						greatest passion is traveling. I have traveled to over 24 countries and hope to go to many more over the course of my life. <span>To learn more
						about my interests and hobbies check out my pinterest board!</span>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id = "pint">
				<a  data-pin-do="embedUser" href="http://www.pinterest.com/mginsberg24/">Visit Mikenzie Ginsberg's profile on Pinterest.</a>
				<!-- Please call pinit.js only once per page -->
				<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
				</div>
				</div>
			</section>
			<div class="break">
			
			</div>
			<section id="past" >
				<div class = "smallbreakpast"></div>
				<div class = "past resume">
				<?php 
				include("past.php");
				 ?>
				 </div>
			</section>
		<div class="break">
			
			</div>
			<section id="family" >
				<div class = "smallbreakfamily"></div>
				<div class = "family resume">
				<?php 
				include("family.php");
				 ?>
				 </div>
			</section>
			
	<div  class="break">
			
			</div>
			<section id = "contact">
				<div class = "smallbreakcontact"></div>
				<div class = "contact resume">
				<?php 
				include("contactme.php");
				 ?>
				 </div>
			</section>
			<section class = "footer">
				<div class="row">
				<?php
					include("footer.php");
				?>
				</div>
			</section>
		</div>
		<script>
		
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});


		
		</script>
	</body>
</html>