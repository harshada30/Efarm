<?php
	include_once "resource/session.php";
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "register";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
				
		
?>

<!DOCTYPE html>
<html >
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Farm Connect: Buy and Sell Raw Product Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">  

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

<body>
<div class="login-form" style = "margin-top: 75px;">
  <div class = "thumbnail" style="width: 50%; margin:auto;">
     <form method = "POST" style = "width:80%; margin: auto;">
	    <h1>Farmer's Sign In</h1>
			<?php
			if(isset($_POST["loginBtn"])){
				$username = mysqli_real_escape_string($conn, $_POST["username"]);
				$password = mysqli_real_escape_string($conn, $_POST["pass"]);
				//$hashed_password = password_hash($password, PASSWORD_DEFAULT);
				
				
				$sel_user = "SELECT * FROM farmers WHERE Company_Name = '$username' AND Password = '$password'";
				
				$run_user = mysqli_query($conn, $sel_user);
				
				$check_user = mysqli_num_rows($run_user);
				
				if($check_user > 0){
					$_SESSION['Company_Name'] = $username;
					
					echo "<script>window.open('FarmerProfile.php', '_self')</script>";
				}
				else{
				$result = "<p style='padding: 20px; color: red; line-height: 1.5;'>invalid password or usename</p>";
				echo $result;
				}
				
			}
			

			?>
			 <div class="form-group">
			   <input type="text" class="form-control"  id="UserName" name ="username" placeholder="Username" value = ""  >
			   <i class="fa fa-user"></i>
			 </div>
			 <div class="form-group log-status">
			   <input type="password" class="form-control" placeholder="Password" id="Passwod" name = "pass">
			   <i class="fa fa-lock"></i>
			 </div>
			<a class="link" style = "float: left;padding-left: 20px;"href="register.php">Register Here</a></br>
			  </br>
			  <div align = "center">
			 <button style =" width: 45%;" name = "loginBtn" type="submit" class="btn btn-primary" ><strong>SIGN IN</strong></button>
			</br>
			 </br>
			</div>
			</form>
		   </div>
		   </div>
   <br><br><br><br><br><br><br>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
	<div>
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
</div>
				
</body>
</html>