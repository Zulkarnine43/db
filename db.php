
<?php
$localhost="localhost";
$name="root";
$password="";

$con=mysqli_connect("$localhost","$name","$password");

$sql="CREATE DATABASE shop";

mysqli_query($con,$sql);
?>