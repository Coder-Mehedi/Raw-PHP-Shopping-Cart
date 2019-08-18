<?php 


include_once 'db_connect.php';

// sql to create table data

$sql = "CREATE TABLE IF NOT EXISTS product_info(
id INT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
image VARCHAR(200) NOT NULL,
price FLOAT NOT NULL)";

if (!mysqli_query($conn, $sql)){
	echo "Error creating Table". mysqli_error($conn);
}


$sql = "CREATE TABLE IF NOT EXISTS ordered_products(
id INT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
product_id INT(8) NOT NULL,
user_id INT(8) NOT NULL,
name VARCHAR(255) NOT NULL,
price FLOAT NOT NULL,
quantity INT(4) NOT NULL,
ordered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if (!mysqli_query($conn, $sql)){
	echo "Error creating Table". mysqli_error($conn);
}