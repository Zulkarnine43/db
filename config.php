<?php

$host="localhost";
$username="root";
$password="";
$db="shop";

$con=mysqli_connect($host,$username,$password,$db);
if(mysqli_connect_error()){
	echo mysqli_connect_error();

}
else{
		echo "connected";
	}


?>