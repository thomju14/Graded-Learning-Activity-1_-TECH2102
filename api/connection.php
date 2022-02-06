<?php


$con = mysqli_connect("localhost", "root", "Juli2510@", "students" );

if(!$con){
	echo mysqli_connect_error();
die();
}

echo "Database Connected Successfully";
