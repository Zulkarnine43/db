<?php

include("config.php");

// ........................../product table/................
$tbl_cu_info="CREATE TABLE IF NOT EXISTS cu_info(
cu_id int NOT NULL auto_increment, 
PRIMARY KEY(cu_id),
name VARCHAR(50),
email VARCHAR (50),
password VARCHAR (20)
)";
$cu_info=mysqli_query($con,$tbl_cu_info);

if($cu_info===TRUE){
	echo "<br>customer table created";
}
else{
	echo "<br>customer table not created";
}

// ........................../product table/................
$tbl_product_info="CREATE TABLE IF NOT EXISTS product_info(
product_id int NOT NULL auto_increment, 
PRIMARY KEY(product_id),
name VARCHAR(50),
quentity int (11),
price int (20)
)";
$product_info=mysqli_query($con,$tbl_product_info);

if($product_info===TRUE){
	echo "<br>product table created";
}
else{
	echo "<br>product table not created";
}
// ........................../order table/................
$tbl_order_info="CREATE TABLE IF NOT EXISTS order_info(
order_id int NOT NULL auto_increment, 
PRIMARY KEY(order_id),
cu_id int,
product_id int ,
quentity int (11),
FOREIGN KEY (cu_id) REFERENCES cu_info,
FOREIGN KEY (product_id) REFERENCES product_info
)";
$order_info=mysqli_query($con,$tbl_order_info);

if($order_info===TRUE){
	echo "<br>order table created";
}
else{
	echo "<br>order table not created";
}

?>