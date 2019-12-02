<?php

$connection = mysqli_connect("localhost" , "root" , "");
$db = mysqli_select_db($connection, 'efarm');

 $uname;
 $psw;


if(isset($_POST['loggin']))
{
    $uname= $_POST['uname'];
    $psw= $_POST['psw'];
}
    
$q = "SELECT * from customer where uname ='$uname' && psw ='$psw' ";
$run = mysqli_query($connection , $q);
$res = mysqli_num_rows($run);

if ($res == 1) 
{
    session_start();
    $_SESSION['uname'] = $uname;
    header('location: homepage.php');
}
    

?>