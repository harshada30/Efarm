<?php
	
	ini_set('mysql.connect_timeout', 300);
	ini_set('default_socket_timeout', 300);

	include_once "resource/session.php";


		if(isset($_POST['AddProduct'])){
			if(isset($_POST['username']) && (isset($_POST['phone'])) && (isset($_POST['select_category'])) && (isset($_POST['category'])) && (isset($_POST['price'])) && ($_FILES['image']['tmp_name'] == TRUE) ){
				$image = addslashes($_FILES['image']['tmp_name']);
				$name = addslashes($_FILES['image']['name']);
				$image = mysql_real_escape_string(file_get_contents($image));
				$image = base64_encode($image);
				saveimage($name, $image);
						
		
			
			}
			else{
			
					?>
				
							<script type = "text/javascript">
							alert("Please Complete the Form ");
							window.location.href = "addProduct.php";
							</script>

							<?php

			}
			
		
		}
		
		
		function saveimage($name, $image){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "register";
			
			$conn = mysql_connect($servername, $username, $password);
			mysql_select_db($dbname, $conn);
			
			
			$username = $_POST['username'];
			$phone = $_POST['phone'];
			$price = $_POST['price'];
			$category = $_POST['category'];
			$description = $_POST['description'];
			$select = $_POST['select_category'];
			
				
			$sql = "INSERT INTO products (CompanyName, Category, type_product, Description, Phone, Prcie, ImageName, image)
			VALUES ('$username', '$category', '$select', '$description', '$phone', '$price', '$name', '$image')";
		
				$result = mysql_query($sql, $conn);
				if($result){
					echo "<script>window.open('FarmerProfile.php', '_self')</script>";
				}
				else{
					echo "<br/>Not Uploaded";
				}
			
						
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

<body style = "padding-top: 40px;">
   
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong>Farm Connect</strong></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"style = "font-weight: bold;">
                <ul class="nav navbar-nav">
                    
					<li>
                        <a href="FarmerProfile.php?username=<?php if(isset($_SESSION['Company_Name'])) echo $_SESSION['Company_Name'] ; ?>">View Profile</a>
                    </li>
					
					<li>
						<a href = "logout.php">Logout</a>
                    </li>
					
                </ul>
            </div>
        </div>
    </nav>
	</br>
	   <div class="container">
	<header class="jumbotron hero-spacer"style= "background: url(assets/img/background.jpg); margin-top: 0px; background-size: cover; height: 200px;">
     <h1 align ="center" style= "color:white;"><strong> <?php if(isset($_SESSION['Company_Name'])) echo $_SESSION['Company_Name'] ; ?></strong></h1>
	 </header>  
	<form method = "post" enctype = "multipart/form-data" style = "width:50%; margin: auto;">
		<br/>
		<h1>Add Product</h1>
		<div class="form-group ">
		   <input type="text" class="form-control" placeholder="Company Name " minlength="8"  id="username" name ="username">
		   <i class="fa fa-user"></i>
		 </div>
		<div class="form-group ">
		   <input type="number" class="form-control" placeholder="Phone Number"  minlength="11"  id="Phone" name ="phone">
		   <i class="fa fa-user"></i>
		 </div>
			 <div class="form-group ">
				<select name = "select_category" style = "width: 100%;">
					<option>Select product category here</option>
					
					<option>Grains</option>
					<option>Oil Seeds</option>

			</select>
		   <p style = "color:blue;">Products with specified category have more customers</p>
		   <i class="fa fa-user"></i>
		 </div>
		
		<div class="form-group ">
		   <input type="text" class="form-control" minlength="4" placeholder="Kind of Product e.g Rice, yam, palm oil e.t.c" id="category" name ="category">
		   <i class="fa fa-user"></i>
		 </div>
		  <div class="form-group ">
		   <input type="number" class="form-control" minlength="6"  placeholder="Enter Price of Product" id="price" name ="price">
		   <i class="fa fa-user"></i>
		 </div>
		 
		<div class="form-group ">
		   <textarea class="form-control" placeholder="Description " minlength="20" maxlength = "120" id="description" name ="description" style="width:100%;height:150px;"></textarea>
		   <i class="fa fa-user"></i>
		 </div>
		<div class="form-group ">

			<form method = "post" enctype = "multipart/form-data" style = "width:50%; margin: auto;">
		<hr>
		
		Upload Picture:
		</br>
		<input type = "file" name = "image"/>
		<br/><br/>
		  <i class="fa fa-user"></i>
		 </div>
		 <p>
           <button name = "AddProduct" type="submit" class="btn btn-primary" style ="float: right;">Add Product</button> 
        </p>
	</form>
	
		<div style = "padding: 1em 0 2em 0;">
	
				
</div>

	

	</div>
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