<?php
		
			ini_set('mysql.connect_timeout', 300);
			ini_set('default_socket_timeout', 300);

			include_once "resource/session.php";
					
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "register";
			
			//$conn = mysql_connect($servername, $username, $password);
			//mysql_select_db($dbname, $conn);
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
					
			
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EFarm : Buy and Sell Farm Produce Online</title>

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

<body style="padding-top: 0px;">
   
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong>EFarm</strong></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
					<li>
					<a href = "cart.php?page=1?id=<?php $productid =  uniqid(); $_SESSION["orderid"] = $productid; echo $productid ;?>" ><strong>Buy Products</strong></a>
					</li>
					<li>
                        <a href="logout.php"><strong>Logout</strong></a>
                    </li>
					
                </ul>
            </div>
        </div>
    </nav>
	</br>
	
</br>	
</br>
<div class = "container">
	<header class="jumbotron hero-spacer" style= "background: url(assets/img/background.jpg); margin-top: 0px; background-size: cover; height: 200px;">
     <h1 align ="center" style = "color: white; margin-bottom: 0px;">Welcome <?php if(isset($_SESSION['username'])) echo $_SESSION['username'] ; ?> </h1>
		<?php
		$sql = "SELECT * FROM Users WHERE `username` = '$_SESSION[username]' ";
			$run_user = mysqli_query($conn, $sql);
		
				
				$check_user = mysqli_num_rows($run_user);
				
				if($check_user > 0){
					while($row = mysqli_fetch_array($run_user)){
			
		?>
		
		<h3 align ="center" style = "color: white; margin-top: 0px;"><?php echo $row["email"]; ?></h3>
			<?php
					}
		}
		?>
	 </header>   
	
	
</div>
<div align="center">
	<h2>Welcome</h2><hr>
	<h4>Do checkout our wide range of products from Local trusted farmers.</h4>
</div>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script src = "showhide.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	
	
	</div>
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