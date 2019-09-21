<?php

session_start();

$con=mysqli_connect('localhost','root');
if($con){
	echo "connection sucess";
}
else{
	echo "umsucess";
}

mysqli_select_db($con,'sessionpractical');

$name=$_POST['user'];
$pass=$_POST['password'];

// var_dump($name, $pass);
// die();

$q="select * from signin where name='$name' && password='$pass' ";


$result=mysqli_query($con, $q);
var_dump($result);
die();
$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['username']=$name;
	header('location:home.php');
}
else{
	header('location:home.php');
}
?>