<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$content=" From: $name \n Email: $email \n Number: $number \n Message: $message \n \n *This is an automatic mail onbehalf of recipient submitting form on cbhogilal.in ";
$recipient = "viralshah@cbhogilalfort.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo '
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../style-home.css" rel="stylesheet">
	<title>Success</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700" rel="stylesheet" type="text/css">
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar">
    <img src="../assests/logo.png" alt="Company Logo" style="width: 100px; height: 55px;" alt="Cbhogilal-Logo";>
    <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
    <ul class="nav">
      <li class="nav-item"><a href="../Home">Home</a></li>
      <li class="nav-item"><a href="../about">About</a></li>
      <li class="nav-item"><a href="../Products">Products</a></li>
      <li class="nav-item"><a href="../Projects">Projects </a></li>
      <li class="nav-item"><a style="font-weight: bold;" href="../">Contact Us</a></li>
      </ul>
  </nav>
	<div class="background-success">
     <div style="background-color: black;"><br><br><br>  
     <div class="main wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">                
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
	</header>
	<div class="main-content" style="padding: 10px;">
		<i class="fa fa-check main-content__checkmark fa-3x" id="checkmark" style="color: white; display: flex; justify-content: center; align-content: center;"></i><br>
		<p class="main-content__body" data-lead-id="main-content-body"> Thank you for reaching out. We will get back to you as soon as possible.</p><br><br><br>
	</div>
	</div></div></div>
</div>
<br><br><br>
<footer>
	<br>
	<p>Copyright <i class="far fa-copyright"></i> Bhogilal & Co 2015</p>
</footer>
<!-- Script -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../script.js"></script>
</script>
</body>
</html>
';
?>

