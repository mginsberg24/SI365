<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Contact</title>
		<meta name = 'viewport' content='width=device-width, initial-scale=1'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="personal_stylesheet.css"> -->
		<link rel="stylesheet" href="header.css">
		<link rel="stylesheet" href="contact.css">
		<link rel="stylesheet" href="footer.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		
		<link href="http://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		
		
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-formhelpers.min.js"></script>
		<script>
		function myFunction() {
				
			alert( "Thank you for reaching out! I sent you an email for confirmation");
		};
		</script>
		
		<div class="container">
			<div class="content">
				<!-- <h3> Want to chat?</h3> -->
				<div class="form">
					<div class="row">
						<div class="col-md-12">
							<form role="form"  action = "index.php#contact" method = "POST">
								<h3> Want to chat?</h3>
								<div class="form-group">
									<div class="row contactfrom">
										<label for="name">Name</label>
										<input name = "name" type="text" class="form-control" id="name" placeholder="Enter Name">
									</div>
									
									
									<div class="row  contactfrom">
										<label for="Email">Email address</label>
										<input name = "email" type="email" class="form-control" id="Email" placeholder="Enter email">
									</div>
									
									
									<div class="row  contactfrom">
										<label class = "questions" for="Question">Subject</label>
										<textarea name = "question" class="form-control" id="Question" rows="3" placeholder = "What do you want to talk about?"></textarea>
									</div>
									<br>
									<button id = "submit" type="submit" onclick="myFunction()" class="btn btn-default">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	<?php
					
					$filename = "cotact.csv";
					$exists = (file_exists($filename));
					$handle = fopen($filename, 'a');
		
				
					
					fwrite($handle, $stringToAdd);
					//now close the file
					fclose($handle);
					$msg = "Thank you for reaching out " . $_POST["name"] . "! You wanted to talk about " . $_POST["question"] . ". I will get back to you with further details soon. \n" .
					"\n" . "Best, \n". "Mikenzie Ginsberg";//EMail message
						$to = $_POST["email"];
					$headers = "From: ". "Mikenzie" ."<".$_POST["name"]. ">\r\n";
					mail($to, 'Thank you!', $msg, $headers);
					$stringToAdd="";
	?>
	
</body>
</html>