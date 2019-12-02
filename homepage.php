<?php  session_start(); ?>
<html>
<head>
	<title>E-Farm</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	
	<!--header_css-->
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
        
	</style>
</head>

<body>
	<!--header-->
	<div class="header"><img src="F3.jpg" ="right" height="110" width="110"></img>
		<h1><b>E-FARM</b></h1>
		<p style="font-size:20;"=>For Better India</p>
	</div>

	<!--nav bar div-->	
	<div class="topnav">
		<a href="javascript:history.go(0)">Home</a>
		<a href="about.php">About Us</a>
		<div class="topnav-right">
			<button style='width:auto'>Cart <i class='fas fa-cart-arrow-down' ></i></button>
            			<!--logout button-->
            <button onclick="location.href = 'logout.php';" style.display='block' name="redirect" id="myButton" style="width:auto" class="float-left submit-button" >LogOut</button>
		</div>
	</div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>    
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
			<p>Copyright &copy; 2013- E_farm. All rights reserved.</p>
		</nav>
	</footer>

</body>
</html>