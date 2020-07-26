
<?php
$localhost="localhost";
$name="root";
$password="";

$con=mysqli_connect("$localhost","$name","$password");

$sql="CREATE DATABASE dokan";

$result=mysqli_query($con,$sql);

if($result===TRUE){
	echo "Database Creadted";
}
else
{
	echo "Datababse not Created";
}
?>