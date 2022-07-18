<?php 

// data base connection

$conn = mysqli_connect('localhost','mbuya','12345678', 'contactform');

if(!$conn){
	echo "Errror connecting to the database!!". mysqli_connect_error();
}



 ?>