<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bharati Computers</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/laptop.png" />
	<!-- setting viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Glyphicon-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Font Awesome icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
	<!-- Company Logo-->
	<div class="container-fluid"  id="companyname">
	    <h1 align="center">Bharati Computers</h1>
	    <h3 align="center">We care your systems and laptops</h3>
	</div>
	<font size=5>
		<marquee style="color:yellow;background-color:brown;">Our Team Welcome's you</marquee>
	</font>
	<!--Banner-->
	<div>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/banner1.png" alt="banner1"/>
				</div>

				<div class="item">
					<img src="images/banner2.jpg" alt="banner2"/>
				</div>

				<div class="item">
					<img src="images/banner3.jpg" alt="banner3"/>
				</div>
			</div>
			  <!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<!--end of banner-->
	
	
	<!--Body Container-->
	<div class="container-fluid" style="background-color:#000000;">
		<!--Block1-->
		<div class="row" id="block1">
			<div class="col-md-12 col-sm-12">	
				<div align="center">
					<h2>ABOUT US</h2>
					<span class="glyphicon glyphicon-pencil"></span>Kiran Kumar
					<span class="glyphicon glyphicon-time"></span>March27,2015
					<p  align="justify">
						<b>Our company is dedicated to providing our customers with total computer solutions for business, industry, and individuals. Our company philosophy has always been to help our customers solve their problems and to provide them with service before and after every sale. Customer satisfaction has always been the guiding force of our company since it was founded.
						We are the supporting team for our customers, the best of us would be caring of your system/laptop.Beleive us,we will be one for your system.Looking forward to serve you the with best.</b>
					</p>
					<section>
						<h2 align="center">We Deal With</h2>
						<img src="images/companies.png" class="img-responsive" >
					</section>
				</div>
			</div>
		</div>

		<!--Block2-->	
		<div class="row" id="block2">
		    <h2 align="center">OUR SERVICES</h2>
			<div class="col-md-4 col-lg-4">
				<img src="images/desktop.png" class="img-responsive">
			</div>
			<div class="col-md-4 col-lg-4">
				<marquee  direction="up" height="160"  width="200" onmouseover="this.stop()" onmouseout="this.start()"><b>Computer Virus Removal<br><br>Computer Repair & Upgrades<br><br>Custom Built Desktops<br><br>Used pc's and Laptop sales<br><br>And Many More Sevices..</b></marquee>
			</div>
			<div class="col-md-4 col-lg-4">
				<img  src="images/apple.png" class="img-responsive"> 
			</div>
		</div>

		<!--Block3-->	
		<div class="row" id="block3">
			<form method="POST" action="">
				<div class="container">
						<h2 align="center">Get In Touch</h2>
				<div class="row">
					<div class="col-lg-4">
						<input type="text" name="name" class="form-control" placeholder="Name" required>
					</div>
					<div class="col-lg-4">
						<input type="text" name="email" class="form-control" placeholder="Email" required>
					</div>
					<div class="col-lg-4">
						<input type="text" name="company" class="form-control" placeholder="company" required>
					</div>
				</div>
				<br><br>
					<div class="row" >
						<div class="col-lg-12">
							<textarea rows="5" cols="80" name="message" class="form-control" required></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-12" align="center">
							<button type="submit" class="btn btn-danger" name="sbtn">Submit</button>
						</div>
					</div>
				</div>	

<?php
if(isset($_POST['sbtn']))
{
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['company'])     ||
   empty($_POST['message'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$company=$_POST['company'];
	
// Create the email and send the message
$to = 'mailme_kiran1995@rediffmail.com'; 

$email_subject = "Website Contact Form:  $name";

$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName:$name\n\nEmail: $email_address\n\nCompany:$company\n\nMessage:\n$message";

$headers = "From: noreply@bharaticomputer.com\n"; 

$headers .= "Reply-To: $email_address";	
$retval=mail($to,$email_subject,$email_body,$headers);

 if( $retval == true ) {
            echo "<div class='alert alert-success'>
            <strong>Success!</strong> Your Query has been Sent.
              </div>";

}
else {
            echo "<div class='alert alert-danger'>
  <strong>Danger!</strong> Fill the Details Properly
</div>";
         }			

}

?>
				</form>
		</div>
	</div>
	<!--End of body conatiner-->

    <!--Know us-->
    <div class="container-fluid" id="knowus">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<h4><u>Contact Us</u></h4>
				<p align="justify">
					<b>Address:-</b>Gandhinagar(Bhatisalguda),<br>Nabarangpur,pin:-764059<br><br>
				    <b>Email:-</b>mailme_kiran1995@rediffmail.com</p>
			</div>
			<div class="col-md-6 col-sm-6" >
				<h4><u>Connect with Us</u></h4>
				<a href="www.facebook.com" class="fa fa-facebook"></a>
				<a href="www.twitter.com" class="fa fa-twitter"></a>
				<a href="www.google.com" class="fa fa-google-plus"></a>
				<a href="www.linkedin.com" class="fa fa-linkedin"></a>
			</div>
		</div>
	</div>
    <!--footer-->
	<footer>
		<div class="container-fluid" id="foot">
			<div class="row" align="center">
				<div class="col-md-12 col-sm-12">
					<p style="padding:10px;">Copyright © 2015 All Right Reserved.| Created By - P.Kiran Kumar</p>
				</div>
			</div>
		</div>
	</footer>
	<!--End of footer-->
</body>
</html>