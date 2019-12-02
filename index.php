<?php
			ini_set('mysql.connect_timeout', 300);
			ini_set('default_socket_timeout', 300);

			include_once "resource/session.php";
					
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "register";
			
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
			
?>
<style>
	.col-md-4:hover img{
	transform: scale(1.0);
	transition: all 0.5s ease-in;
	filter: blur(2px) brightness(85%);
	position: relative;
	box-shadow: 0 0 16px cyan;
		
	}
	
	.hint{
	position: absolute;
	z-index: 1;
	align: center;
	top: 30%;
	left: 40%;
	color: #fff;
	text-decoration: bold;
	opacity: 0;
	transition: 2s;
	}
	.col-md-4:hover :not(img){
	opacity: 1;
	
	
	}


</style>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EFarm: Buy and Sell Farm Produce Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
		
	
	<!-- Font-Awesome Icons -->
	<link href = "assets/css/font-awesome.min.css" rel = "stylesheet">
			
    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
	<style>
		.header{
			padding:2px;
			text-align:center;
			background:url("fhead.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			color: white;
			font-size:13px;
			font-family: Trebuchet MS;
		}
	</style>
	
	<!--navbar_css-->
	<style>
		body
		{
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
		}

		.topnav 
		{
			overflow: hidden;
			background-color: #228B22;
		}

		.topnav a
		{
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}

		.topnav a:hover
		{
			background-color: #556B2F;
			color: white;
		}

		.topnav-right
		{
			float: right;
		}
	</style>
	
	<!--login_css-->
	<style>
		input[type=text], input[type=password] 
		{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		
		button
		{
			background-color: #4CAF50;  <!--green-->
			color: white;
			padding: 10px 16px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		button:hover 
		{
			opacity: 0.6;
		}
		
		.cancelbtn 
		{
			width: auto;
			padding: 10px 18px;
			background-color: #f44336; <!--red-->
		}
		
		.imgcontainer 
		{
			text-align: center;
			margin: 24px 0 12px 0;
			position: relative;
		}

		img.avatar
		{
			width: 15%;
			border-radius: 50%;
		}

		.container 
		{
			padding: 16px;
		}

		span.psw 
		{
			float: right;
			padding-top: 16px;
		}
		
		.modal 
		{
			display: none;
			position: fixed; 
			z-index: 1;
			left: 0;
			top: 0;
			width: 100%; 
			height: 100%; 
			overflow: auto; 
			background-color: rgba(0,0,0,0.5);
			padding-top: 60px;
		}
		
		.modal-content
		{
			background-color: #fefefe;
			margin: 5% auto 10% auto; 
			border: 1px solid #888;
			width: 60%; 
		}
		
		.close 
		{
			position: absolute;
			right: 25px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
		}
		
		.close:hover,
		.close:focus 
		{
			color: red;
			cursor: pointer;
		}
		
		.animate 
		{
			-webkit-animation: animatezoom 0.5s;
			animation: animatezoom 0.5s;
		}

		@-webkit-keyframes animatezoom
		{
			from {-webkit-transform: scale(0)} 
			to {-webkit-transform: scale(1)}
		}
  
		@keyframes animatezoom 
		{
			from {transform: scale(0)} 
			to {transform: scale(1)}
		}

		@media screen and (max-width: 300px)
		{
			span.psw
			{
				display: block;
				float: none;
			}
			.cancelbtn 
			{
				width: 100%;
			}
		}
	</style>
	
	<!--slidshow_css-->
	<style>
		.mySlides {display: none;}
		img {vertical-align: middle;}

		.slideshow-container
		{
			max-width: 1000px;
			position: relative;
			margin: right;
		}

		.text 
		{
			color: #f2f2f2;
			font-size: 15px;
			padding: 8px 12px;
			position: absolute;
			bottom: 8px;
			width: 100%;
			text-align: center;
		}

		.numbertext 
		{
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		.dot 
		{
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.6s ease;
		}

		.active 
		{
			background-color: #717171;
		}

		.fade
		{
			-webkit-animation-name: fade;
			-webkit-animation-duration: 1.5s;
			animation-name: fade;
			animation-duration: 1.5s;
		}

		@-webkit-keyframes fade
		{
			from {opacity: .4} 
			to {opacity: 1}
		}

		@keyframes fade 
		{
			from {opacity: .4} 
			to {opacity: 1}
		}

		@media only screen and (max-width: 300px)
		{
			.text {font-size: 11px}
		}
	</style>
	
	<!--footer_css-->
	<style>
		.site-footer 
		{
			background-color: #838383;
			text-align: center ;
			margin: 10px 0;
			padding: 10px 0;
		}

		#social-wrapper 
		{
			text-align: center;
		}

		.social-wrapper 
		{
			text-align: center;
		}

		.social-wrapper ul li 
		{
			display: inline;
			margin: 0 5px;
		}

		.twitter-icon,
		.facebook-icon,
		.instagram-icon,
		.googleplus-icon,
		.youtube-icon,
		.foursquare-icon
		{
			margin-top: .625em;
			width: 40pxsss;
			height: 40px;
			opacity: 0.6;
			filter: alpha(opacity=60); 
			border-radius: 25px;
		}

		.twitter-icon:hover,
		.facebook-icon:hover,
		.instagram-icon:hover,
		.googleplus-icon:hover,
		.youtube-icon:hover,
		.foursquare-icon:hover 
		{
			opacity: 1.0;
			filter: alpha(opacity=100); 
		}

		.footer-nav p 
		{
			text-align: center;
		}
	</style>
    
</head>

<body style="padding-top: 0px; padding-bottom: 0px;">
    
<!--header-->
<div class="header"><img src="F3.jpg" ="right" height="110" width="110"></img>
		<h1><b>E-FARM</b></h1>
		<p style="font-size:20;"=>For Better India</p>
	</div>

	<!--nav bar div-->	
	<div class="topnav">
		<a href="index.php">Home</a>
		<a href="about.php">About Us</a>
		<div class="topnav-right">
			<button onclick="window.location.href = 'login.php';" style.display='block'" style="width:auto;">Login</button>	
			<button onclick="window.location.href = 'register.php';" style.display='block'" style="width:auto;">Signup</button>
		</div>
	</div>


<iframe align="right" width="420" height="450" src="https://www.youtube.com/embed/Qmla9NLFBvU" >
</iframe>
	<!--slideshow div--> 
	<div class="slideshow-container">
		<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
			<img src="f1.jpg" alt="farm" width="900" height="450">
		</div>

		<div class="mySlides fade">
			<div class="numbertext">2 / 3</div>
			<img src="farmer2.jpg" alt="farmer" width="900" height="450">
		</div>

		<div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
			<img src="f2.jpg" alt="crop" width="900" height="450">
		</div>
	</div><br>

	<div style="text-align:center">
		<span class="dot"></span> 
		<span class="dot"></span> 
		<span class="dot"></span> 
	</div>

<!--js slideshow-->
	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() 
		{
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) 
			{
			slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) 
			{
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 3000); 
		}
	</script>


	<p align="center" font-family: "verdana"><b>E-FARM </b>is a electronic trading portal.It's a bridge from farmer and consumer's table.</p>
	<p align="center" font-family: "verdana"><b>VISION</b><br>To promote uniformity in agriculture marketing by streamlining of procedures across the integrated markets, removing information asymmetry between buyers and sellers and promoting real time price discovery based on actual demand and supply.</p>

<!--footer div-->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="social-wrapper">
			<ul>
				<li>
					<a href="#" target="_blank">
					<img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png" alt="Twitter Logo" class="twitter-icon"></a>
				</li>
				<li>
					<a href="#" target="_blank">
					<img src="https://www.mchenryvillage.com/images/instagram-icon.png" alt="Instagram Logo" class="instagram-icon"></a>
				</li>
				<li>
					<a href="#" target="_blank">
					<img src="http://www.iconarchive.com/download/i54037/danleech/simple/facebook.ico" alt="Facebook Logo" class="facebook-icon"></a>
				</li>
				<li>
					<a href="#" target="_blank">
					<img src="http://icons.iconarchive.com/icons/marcus-roberto/google-play/256/Google-plus-icon.png" alt="Googleplus Logo" class="googleplus-icon"></a>
				</li>
				<li>
					<a href="#" target="_blank">
					<img src="https://lh3.googleusercontent.com/j_RwVcM9d47aBDW5DS1VkdxUYCkDUCB6wZglv4x-9SmsxO0VaFs7Csh-FmKRCWz9r_Ef=w170" alt="Youtube Logo" class="youtube-icon"></a>
				</li>
				<li>
					<a href="#" target="_blank">
					<img src="http://www.iconarchive.com/download/i94258/designbolts/vector-foursquare/Foursquare-2.ico" alt="Foursquare Logo" class="foursquare-icon"></a>
				</li>
			</ul>
		</div>

		<nav class="footer-nav" role="navigation">
			<p>Copyright &copy; 2019- E_farm. All rights reserved.</p>
		</nav>
	</footer>
	
	</body>
	

</html>