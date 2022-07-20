<?php 

// connecting to the data base

$conn =  mysqli_connect('localhost', 'mbuya', '12345678', 'contactForm');

if(!$conn){

	echo "Error connecting!!" . mysqli_connect_error();
}


 ?>