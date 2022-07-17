<?php

if(isset($_POST["email_subscribe_form"])) {
	$email = $_POST["email"];
	$email = mb_convert_encoding($email, "UTF-8", "UTF-8");
	$email = htmlentities($email, ENT_QUOTES, "UTF-8");

    $email_to_len = "
    <html>
    <body>
    <p>Hi Roarcuss,</p><br>
    <p>You have received a new subscriber to your website news subscription service</p><br>
    <p>Email:$email</p>
    </body>
    </html>
    ";

    $email_to_customer = "
    <html>
    <body>
    <p>Hi $email,</p><br>
    <p>A newsletter subscription request for this email address was received. </p><br>
    <p>Thank You<br>Roarcuss Technologies</p>
    </body>
    </html>
    ";

    $headers = "From: info@roarcuss.co.uk\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


	mail("info@roarcuss.co.uk", "New newsletter subscription request", $email_to_len, $headers); // Send email to Len
	mail($email, "Welcome to our newsletter", $email_to_customer, $headers); // Send email to customer

    $subscribed = true;

    //mail("stefan.stoj@yahoo.com", "New newsletter subscription request", $email_to_len, $headers); // Send email to Len
    //mail("stefan.stoj@yahoo.com", "Welcome to our newsletter", $email_to_customer, $headers); // Send email to customer

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekTune</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    

  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <img src="images/logo/logo8.png" alt="" height="100" width="250">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
  
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
  
            <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
  
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
  
            <li class="nav-item  "><a href="terms.php" class="nav-link">Terms</a></li>
  
            <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/banner/toyota.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <div class="container">
              <div class="content">
                <h1>Contact Today</h1>
              </div>
            </div>          
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section bg-black">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h3 class="mb-3" style="color:#dc3545">We are based in Ely Cambridgeshire</h3>            
          </div>
        </div>
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Phone:</span> <a style="color:white">0800 448 0962</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a style="color:white" href="mailto:sales@tektune.co.uk">sales@tektune.co.uk </a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
            <form action="phpmailer/mail.php" method="POST" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="subject">
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5 btn-hover" name="submit">
              </div>
            </form>
          
          </div>
        </div>
        
      </div>
    </section>
	

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">
              <img src="images/logo/logo8.png" alt="" height="100" width="250">
            </h2>
            <p>Here at Tektune we have an over decade of remapping experience between our in-house experts To our mobile technician who installs our calibration files to the vehicles</p>
           
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Information</h2>
            <ul class="list-unstyled">
              <li><a href="about.php" class="py-2 d-block">About</a></li>
              <li><a href="services.php" class="py-2 d-block">Services</a></li>
              <li><a href="terms.php" class="py-2 d-block">Terms</a></li>              
              <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Question?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-phone"></span><span class="text">0800 448 0962</span></li>
                <li><a href="mailto:sales@tektune.co.uk"><span class="icon icon-envelope"></span><span
                      class="text">sales@tektune.co.uk</span></a></li>
              </ul>
                   <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                       <li class="ftco-animate"><a href="https://www.facebook.com/TekTune"><span class="icon-facebook"></span></a></li>
            </ul>                                

            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved Tektune</a>
            
          </p>
        </div>
      </div>
    </div>
  </footer>
  
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>