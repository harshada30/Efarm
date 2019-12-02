<?php

$connection = mysqli_connect("localhost" , "root" , "");
$db = mysqli_select_db($connection, 'efarm');

if($connection)
{
    echo "Connected";
}
else
{
    echo "Not Sucessful";
}
 //Decleration
$uname;
$psw;

if(isset($_POST['insertdata']))
{
    $uname= $_POST['uname'];
    $psw= $_POST['psw'];
}
    $query = " INSERT INTO `customer`(`uname`, `psw`) VALUES ($uname,$psw)" ;
    $query_run = mysqli_query($connection , $query);

if ($query_run) 
{
    echo "New records created successfully";
    header('location: Index.php');
}

else 
{
    echo "Error: Contact Admin ";
}


?>