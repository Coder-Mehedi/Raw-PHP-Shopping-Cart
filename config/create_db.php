<?php 


// $conn = mysqli_connect('localhost', 'mehedi', 'm3h3d1');
$conn = mysqli_connect('localhost', 'root', 'm3h3d1');

// checking connection

if(!$conn) {
	die("connection failed" .mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS shopping_cart_db";

if(!mysqli_query($conn, $sql)){
	echo "Error creating Database ". mysqli_error($conn);
}
