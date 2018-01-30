<?php

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'warn':
            $statusMsgClass = 'alert-danger';
            $statusMsg = '<strong>User Id or Password Was Incorrect, Please Try Again.</strong>';
            break;
        case 'inc':
            $statusMsgClass = 'alert-warning';
            $statusMsg = 'You Are Not Authorised User, Please Register First. ';
            break;
        case 'lg':
            $statusMsgClass = 'alert-info';
            $statusMsg = 'Login First. ';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>University Online System</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> <!-- Flexslider-CSS -->
<link href="css/font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="css/style.css" rel='stylesheet' type='text/css'/><!-- Stylesheet-CSS -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>	
</head>
<body>
	<h1>University Online Portal</h1>
	<div class="main-agile">
		<div class="content-wthree">
			<div class="about-middle">
			<section class="slider">
			<div class="flexslider">
				<ul class="slides">
				  <li>
					<div class="banner-bottom-2">			  		
						<div class="about-midd-main">
							<img class="agile-img" src="images/t1.jpg" alt=" " class="img-responsive">
							<h4>Ms. Preeti Raj Verma</h4>
							<p> Under My Supervison, this project designed. Also this project helpful for each member in universtiy.
						    </p>
						</div>
					</div>
				  </li>
				 <li>
					<div class="banner-bottom-2">			  		
						<div class="about-midd-main">
							<img class="agile-img" src="images/t2.jpg" alt=" " class="img-responsive">
							<h4>Pinki Kumari Soni</h4>
							<p>I am design front end of this website with newest technologies. I hope this project helpful for you.</p>
						</div>
					</div>
				  </li>
				  <li>
					<div class="banner-bottom-2">			  		
						<div class="about-midd-main">
							<img class="agile-img" src="images/t3.jpg" alt=" " class="img-responsive">
							<h4>Suraj Chakrawarti</h4>
							<p>I am design back end and manage database, with letest technology and also trying my best to make easy, fast and professional look. I hope you must like it.</p>
						</div>
					</div>
				  </li>
				</ul>
			</div>
			<div class="clear"> </div>
		  </section>
		</div>
		<div class="new-account-form">
		<h2 class="heading-w3-agile">Sign In</h2>

		<?php if(!empty($statusMsg)){
        echo '
        <div class="alert '.$statusMsgClass.'" role="alert">'.$statusMsg.'</div>
        ';
    } ?>
			<form action="auth.php" method="post">
			<div class="inputs-w3ls">
				<p>User I'd</p>
				<i class="fa fa-envelope" aria-hidden="true"></i>
					<input type="text" class="email" name="uid" placeholder="" required="">
			</div>
			<div class="inputs-w3ls">
				<p>Password</p>
				<i class="fa fa-unlock-alt" aria-hidden="true"></i>
					<input type="password" class="password" name="password" placeholder="" required="">
			</div>
					<label class="anim">
					
						
						<a href="forgot.php">Forgot Password</a>
					</label> 
						<input type="submit" value="Sign In" name="login">  
			</form> 
		</div>
		<div class="clear"> </div>

		</div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2018 Created By SUN_PS| Design by <a href="http://facebook.com/surajchakrawarti.9">Suraj Chakrawarti</a></p>
	</div>
<script src="js/jquery.min.js"></script>

	<!-- FlexSlider -->
				  <script defer src="js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					$(function(){
					 
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
		<!-- FlexSlider -->

</body>
</html>